# DockerFiles/octane-swoole.Dockerfile

# Use PHP 8.4 base image (e.g., cli or fpm, cli is often better for Octane)
FROM php:8.4-cli

# Set working directory
WORKDIR /var/www/html

# Install system dependencies
# - swoole dependencies: pcre, zlib, openssl
# - common laravel dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    libzip-dev \
    libpq-dev \
    libpcre3-dev \
    zlib1g-dev \
    libssl-dev \
    # Add any other system dependencies required

# Install PHP extensions for Laravel
RUN docker-php-ext-install pdo pdo_pgsql mbstring exif pcntl bcmath gd xml zip

# Install Swoole PHP extension
# Prefer pecl install for swoole
RUN pecl install swoole && docker-php-ext-enable swoole

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Create a non-root user (optional but good practice)
# RUN groupadd -g 1000 www && \
#     useradd -u 1000 -ms /bin/bash -g www www

# Copy application code
COPY . .

# Install Laravel Octane and application dependencies
# Note: Running composer install here means the vendor directory will be part of the image.
# This is common for Octane setups.
# Ensure your .dockerignore excludes vendor if you copy it like this.
# If you mount code, you might run composer install as part of an entrypoint or startup command.
RUN composer install --no-dev --optimize-autoloader
RUN composer require laravel/octane

# Change ownership if a non-root user is created
# RUN chown -R www:www /var/www/html

COPY DockerFiles/scripts/php_entrypoint.sh /usr/local/bin/php_entrypoint.sh
RUN chmod +x /usr/local/bin/php_entrypoint.sh
# The composer install is already in this Dockerfile. The entrypoint's composer install
# might be redundant. The chown in the script uses www:www. Octane runs as root.
ENTRYPOINT ["php_entrypoint.sh"]

# Expose Octane port (default 8000)
EXPOSE 8000

# Set the default command to start Octane with Swoole
# The host 0.0.0.0 is important to accept connections from outside the container
CMD ["php", "artisan", "octane:start", "--server=swoole", "--host=0.0.0.0", "--port=8000"]

# If using a non-root user:
# USER www
# CMD ["php", "artisan", "octane:start", "--server=swoole", "--host=0.0.0.0", "--port=8000"]
