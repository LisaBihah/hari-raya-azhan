#!/bin/sh

# Set the port in Nginx config
sed -i "s/LISTEN_PORT/${PORT:-80}/g" /etc/nginx/sites-available/default

# Create the SQLite database file if it doesn't exist
mkdir -p /var/www/database
touch /var/www/database/database.sqlite
chmod -R 777 /var/www/database
chmod -R 777 /var/www/storage

# Start PHP-FPM in background
php-fpm -D

# Run migrations
php artisan migrate --force

# Start Nginx in foreground
nginx -g "daemon off;"
