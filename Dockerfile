FROM php:8.3-apache

RUN apt-get update && apt-get install -y unzip zip sqlite3 libsqlite3-dev libzip-dev \
    && docker-php-ext-install pdo pdo_sqlite zip

RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - \
    && apt-get install -y nodejs

RUN a2enmod rewrite

ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

COPY . /var/www/html
WORKDIR /var/www/html

RUN composer install --no-dev --optimize-autoloader

RUN npm install

RUN npm run build

RUN cp .env.example .env
RUN chown www-data:www-data .env
RUN chmod 644 .env

RUN mkdir -p /data && touch /data/database.sqlite
RUN chown www-data:www-data /data/database.sqlite

RUN chown -R www-data:www-data storage bootstrap/cache
RUN chmod -R 775 storage bootstrap/cache

CMD php artisan key:generate && php artisan migrate --force && apache2-foreground
