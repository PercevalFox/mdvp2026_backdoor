FROM php:8.1-apache

RUN docker-php-ext-install mysqli

COPY . /var/www/html/
COPY entrypoint.sh /entrypoint.sh
RUN chmod +x /entrypoint.sh

ENTRYPOINT ["/entrypoint.sh"]
