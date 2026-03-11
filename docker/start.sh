#!/bin/bash
set -e

# Cloud Run injects a PORT env var. Update Apache to listen on it.
PORT="${PORT:-8080}"
sed -i "s/Listen 80$/Listen ${PORT}/" /etc/apache2/ports.conf
sed -i "s/<VirtualHost \*:80>/<VirtualHost *:${PORT}>/" /etc/apache2/sites-enabled/000-default.conf

# Cache config, routes and views for faster boot
php artisan config:cache
php artisan route:cache
php artisan view:cache

exec apache2-foreground
