# DockerFiles/frankenphp.Dockerfile

# Use the official FrankenPHP image
# Check for the latest version compatible with PHP 8.4, or a specific PHP 8.4 variant if available
# For now, we assume a generic one and will install PHP 8.4 and extensions if needed.
# dunglas/frankenphp images often come with many extensions pre-installed.
FROM dunglas/frankenphp:latest-php8.3 AS base_frankenphp
# If a PHP 8.4 specific image becomes available, prefer that.
# Example: FROM dunglas/frankenphp:1.1.0-php8.4-alpine

# FrankenPHP's images are based on Alpine, so use apk for package management.
# Install common dependencies for Laravel and PHP extensions
# Many common extensions are often included, but we list them for clarity
# and in case the base image is minimal.
RUN apk add --no-cache     bash     curl     libzip-dev     libxml2-dev     postgresql-dev \ # For pdo_pgsql
    # Add other system dependencies as needed for your application
    && docker-php-ext-install     pdo_pgsql     zip     xml     bcmath
    # exiftool is often needed for exif, check if available or install differently
    # gd, mbstring, pcntl are usually included or enabled by default in many PHP images.

# Set up Laravel Octane if you plan to use FrankenPHP's Octane capabilities
# RUN composer require laravel/octane --working-dir=/app

# Set environment variables for FrankenPHP
ENV FRANKENPHP_CONFIG "/app/docker/frankenphp/Caddyfile"
# The server name for Laravel to generate correct URLs (especially for console commands)
ENV APP_URL="http://localhost"
ENV APP_ENV="local"
ENV APP_DEBUG="true"
# Add other Laravel ENV vars as needed, or ensure they are passed from docker-compose

WORKDIR /app

# Copy the application
COPY . /app

# If you have a custom Caddyfile for FrankenPHP + Laravel
# COPY docker/frankenphp/Caddyfile /app/docker/frankenphp/Caddyfile

# Default Caddyfile for Laravel (FrankenPHP uses Caddy)
# This is a basic example. You might need to customize it.
# If not providing a Caddyfile, FrankenPHP might try to auto-configure.
# However, explicit is often better.
RUN echo ":80 {
    log
    # FrankenPHP specific settings
    # Refer to FrankenPHP documentation for Laravel best practices
    frankenphp {
        # worker /app/public/index.php # For worker mode
        # or let it auto-detect based on composer.json for Laravel
    }
    # Serve static files from the public directory
    root * /app/public
    file_server
    # Handle PHP requests
    php_server {
        # root /app/public # For standard mode if not using worker above
    }
}" > /etc/caddy/Caddyfile


# Expose port 80 (Caddy's default HTTP port) and 443 (HTTPS)
# Also 8080 if that's what you configure Caddy to use internally or for a non-root user.
EXPOSE 80
EXPOSE 443
# Expose 8080 (Often used by FrankenPHP in examples, ensure Caddyfile matches)
# EXPOSE 8080

# Laravel specific setup like permissions, composer install etc.
# Should ideally be in an entrypoint script.
# RUN chown -R frankenphp:frankenphp /app/storage /app/bootstrap/cache
# RUN composer install --no-dev --optimize-autoloader --working-dir=/app

# Should ideally be in an entrypoint script.
# RUN chown -R frankenphp:frankenphp /app/storage /app/bootstrap/cache
# RUN composer install --no-dev --optimize-autoloader --working-dir=/app

COPY DockerFiles/scripts/php_entrypoint.sh /usr/local/bin/php_entrypoint.sh
RUN chmod +x /usr/local/bin/php_entrypoint.sh
# Note: The chown in the script uses www:www. FrankenPHP WORKDIR is /app.
# The script has a commented line for chown -R www:www /app/storage...
# This will be used, but the user 'www:www' might be incorrect if frankenphp user is 'frankenphp'.
ENTRYPOINT ["php_entrypoint.sh"]

# CMD ["frankenphp", "run", "--config", "/etc/caddy/Caddyfile"]
# Default command is often sufficient if Caddyfile is in default location /etc/caddy/Caddyfile
CMD ["frankenphp", "run"]
