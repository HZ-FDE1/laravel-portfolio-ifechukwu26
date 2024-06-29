#!/bin/bash

# Exit immediately if a command exits with a non-zero status
set -e

# Ensure the storage and cache directories are writable
chmod -R 777 /var/www/html/storage /var/www/html/bootstrap/cache

# Install Composer dependencies
if [ ! -d "/var/www/html/vendor" ]; then
    composer install
fi

# Generate application key
if [ ! -f "/var/www/html/.env" ]; then
    cp /var/www/html/.env.example /var/www/html/.env
    php artisan key:generate
    php artisan migrate
    php artisan db:seed
fi

# Run migrations
php artisan migrate --force

# Start Apache
apache2-foreground
