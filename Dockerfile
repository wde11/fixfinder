FROM php:8.2-apache

# Install system dependencies and PHP extensions
RUN apt-get update && apt-get install -y \
    git curl unzip libzip-dev libpng-dev \
    && docker-php-ext-install zip pdo pdo_sqlite \
    && a2enmod rewrite headers \
    && rm -rf /var/lib/apt/lists/*

# Install Node.js 20
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs \
    && rm -rf /var/lib/apt/lists/*

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Copy project files
COPY . .

# Install PHP dependencies (production only)
RUN composer install --no-dev --optimize-autoloader --no-interaction --prefer-dist

# Build Vite assets and remove node_modules afterward to keep image small
RUN npm ci && npm run build && rm -rf node_modules

# Create .env from example — real secrets injected via Cloud Run env vars at runtime
RUN cp .env.example .env \
    && sed -i 's/APP_NAME=Laravel/APP_NAME=FixFinder/' .env \
    && sed -i 's/APP_ENV=local/APP_ENV=production/' .env \
    && sed -i 's/APP_DEBUG=true/APP_DEBUG=false/' .env \
    && sed -i 's/LOG_CHANNEL=stack/LOG_CHANNEL=stderr/' .env \
    && sed -i 's/LOG_LEVEL=debug/LOG_LEVEL=error/' .env \
    && sed -i 's/SESSION_DRIVER=database/SESSION_DRIVER=cookie/' .env \
    && sed -i 's/CACHE_STORE=database/CACHE_STORE=array/' .env \
    && sed -i 's/QUEUE_CONNECTION=database/QUEUE_CONNECTION=sync/' .env

# Storage and cache permissions
RUN chown -R www-data:www-data storage bootstrap/cache \
    && chmod -R 755 storage bootstrap/cache

# Apache virtual host config
COPY docker/apache.conf /etc/apache2/sites-available/000-default.conf

# Startup script — sets dynamic PORT injected by Cloud Run
COPY docker/start.sh /usr/local/bin/start.sh
RUN chmod +x /usr/local/bin/start.sh

EXPOSE 8080

CMD ["/usr/local/bin/start.sh"]
