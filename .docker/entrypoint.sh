#!/bin/sh

# Create the SQLite database file if it doesn't exist
touch /var/www/database/database.sqlite

# Start PHP-FPM in background
php-fpm -D

# Run migrations
php artisan migrate --force

# Start Nginx in foreground
nginx -g "daemon off;"
