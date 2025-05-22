#!/bin/sh
set -e # Exit immediately if a command exits with a non-zero status.

# Run Composer Install
echo "Running composer install..."
# --no-interaction: Do not ask any interactive questions
# --no-plugins: Disable plugins during install. Can be faster if not needed.
# --no-scripts: Do not execute scripts defined in composer.json. Artisan commands will be run separately.
# --prefer-dist: Download and unpack packages as archives instead of cloning from VCS.
# Consider adding --no-dev for production images if dependencies are baked in.
# If you mount your vendor directory or want to manage it on the host, you might skip this in container.
composer install --no-interaction --no-plugins --no-scripts --prefer-dist

# Run Database Migrations (optional, can be controlled by an ENV var)
# Check for an environment variable, e.g., RUN_MIGRATIONS=true
if [ "$RUN_MIGRATIONS" = "true" ] ; then
    echo "Running database migrations..."
    php artisan migrate --force # --force is recommended for running in scripts
else
    echo "Skipping database migrations (RUN_MIGRATIONS is not 'true')."
fi

# Fix storage and bootstrap/cache permissions
# This is often needed if composer install or other commands run as root initially
# before switching to a non-root user, or if host mounts have different permissions.
echo "Fixing permissions for storage and bootstrap/cache..."
# Standardized to www:www as per instructions
chown -R www:www /var/www/html/storage /var/www/html/bootstrap/cache || true
# For FrankenPHP, WORKDIR is /app. Adjust path if this script is used.
# chown -R www:www /app/storage /app/bootstrap/cache || true
# This part might need adjustment per Dockerfile user setup or be handled inside Dockerfile.

# Optimize Laravel (optional, good for production)
if [ "$OPTIMIZE_LARAVEL" = "true" ] ; then
    echo "Optimizing Laravel..."
    php artisan config:cache
    php artisan route:cache
    php artisan view:cache
    # php artisan event:cache # If you use event discovery
else
    echo "Skipping Laravel optimization (OPTIMIZE_LARAVEL is not 'true')."
fi

# Execute the CMD passed to the Docker container (e.g., php-fpm, octane:start, etc.)
echo "Executing command: $@"
exec "$@"
