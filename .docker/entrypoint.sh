#!/bin/sh

# Set the port in Nginx config
sed -i "s/LISTEN_PORT/${PORT:-80}/g" /etc/nginx/sites-available/default

# Configure PHP-FPM to listen on a socket
sed -i 's|listen = 9000|listen = /var/run/php-fpm.sock|' /usr/local/etc/php-fpm.d/www.conf
sed -i 's|;listen.owner = www-data|listen.owner = www-data|' /usr/local/etc/php-fpm.d/www.conf
sed -i 's|;listen.group = www-data|listen.group = www-data|' /usr/local/etc/php-fpm.d/www.conf
sed -i 's|;listen.mode = 0660|listen.mode = 0660|' /usr/local/etc/php-fpm.d/www.conf

# Create the SQLite database file if it doesn't exist
mkdir -p /var/www/database
touch /var/www/database/database.sqlite
chmod -R 777 /var/www/database
chmod -R 777 /var/www/storage
chmod -R 777 /var/www/bootstrap/cache

# Start PHP-FPM in background
php-fpm -D

# Run migrations
php artisan migrate --force

# Start Nginx in foreground
nginx -g "daemon off;"
