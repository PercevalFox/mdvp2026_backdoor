FROM php:8.1-apache

RUN docker-php-ext-install mysqli

RUN mkdir /var/www/html/uploads \
    && chown -R www-data:www-data /var/www/html/uploads \
    && chmod -R 755 /var/www/html/uploads

COPY . /var/www/html/
