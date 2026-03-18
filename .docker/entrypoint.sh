#!/bin/sh

# Set the port in Nginx config
sed -i "s/LISTEN_PORT/${PORT:-80}/g" /etc/nginx/sites-available/default

# Configure PHP-FPM to listen on a socket
# We use the standard path for PHP-FPM config in the official image
FPM_CONF="/usr/local/etc/php-fpm.d/www.conf"
if [ -f "$FPM_CONF" ]; then
    sed -i 's|listen = 127.0.0.1:9000|listen = /var/run/php-fpm.sock|' "$FPM_CONF"
    sed -i 's|listen = 9000|listen = /var/run/php-fpm.sock|' "$FPM_CONF"
    echo "listen.owner = www-data" >> "$FPM_CONF"
    echo "listen.group = www-data" >> "$FPM_CONF"
    echo "listen.mode = 0660" >> "$FPM_CONF"
fi

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
