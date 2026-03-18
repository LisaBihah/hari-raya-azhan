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
# Railway assigns a port to $PORT. We make Apache listen on it.
if [ -n "$PORT" ]; then
    echo "Configuring Apache to listen on port $PORT"
    sed -i "s/Listen 80/Listen $PORT/g" /etc/apache2/ports.conf
    # Replace :80 in any virtualhost config
    find /etc/apache2/sites-available -type f -name "*.conf" -exec sed -i "s/:80/:$PORT/g" {} +
fi

exec apache2-foreground
