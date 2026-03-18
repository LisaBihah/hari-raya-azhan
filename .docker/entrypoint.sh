#!/bin/sh

# 1. Fix Apache MPM Conflict at Runtime (Mandatory for PHP)
echo "Fixing Apache MPM configuration..."
a2dismod mpm_event mpm_worker || true
a2enmod mpm_prefork || true

# 2. Configure Dynamic Port
if [ -n "$PORT" ]; then
    echo "Configuring Apache to listen on port $PORT"
    sed -i "s/Listen 80/Listen $PORT/g" /etc/apache2/ports.conf
    find /etc/apache2/sites-available -type f -name "*.conf" -exec sed -i "s/:80/:$PORT/g" {} +
fi

# 3. Initialize Database & Permissions
echo "Initializing database and permissions..."
mkdir -p /var/www/html/database
touch /var/www/html/database/database.sqlite
chmod -R 777 /var/www/html/database
chmod -R 777 /var/www/html/storage
chmod -R 777 /var/www/html/bootstrap/cache

# 4. Run Migrations
echo "Running migrations..."
php artisan migrate --force

# 5. Start Apache
echo "Starting Apache..."
exec apache2-foreground
