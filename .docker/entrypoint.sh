#!/bin/sh

# Create the SQLite database file if it doesn't exist
mkdir -p /var/www/html/database
touch /var/www/html/database/database.sqlite
chmod -R 777 /var/www/html/database
chmod -R 777 /var/www/html/storage
chmod -R 777 /var/www/html/bootstrap/cache

# Run migrations
php artisan migrate --force

# Start Apache in foreground
# Railway assigns a port to $PORT, but the official apache image listens on 80.
# We'll use sed to make Apache listen on $PORT if it's provided.
if [ -n "$PORT" ]; then
    sed -i "s/Listen 80/Listen $PORT/g" /etc/apache2/ports.conf
    sed -i "s/:80/:$PORT/g" /etc/apache2/sites-available/*.conf
fi

exec apache2-foreground
