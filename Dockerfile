FROM php:fpm-alpine

# Fix Security Vulnerabilities by upgrading Alpine Linux
RUN apk add --upgrade apk-tools && \
    apk upgrade --available

# https://laravel.com/docs/10.x/deployment#server-requirements
RUN apk --update --no-cache add --upgrade \
    postgresql-dev

RUN docker-php-ext-install \
    pdo pdo_pgsql

RUN curl -sS https://getcomposer.org/installer | php -- \
     --install-dir=/usr/local/bin --filename=composer

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /app
COPY . .
RUN composer install
#RUN composer install --optimize-autoloader --no-dev
#RUN php artisan config:cache
#RUN php artisan route:cache
#RUN php artisan view:cache

EXPOSE 8000

ENTRYPOINT ["php"]
CMD ["artisan", "serve", "--port=8000"]