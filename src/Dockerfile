FROM php:8.2-cli

COPY . /var/www/html/

RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

VOLUME ["/var/www/html"]
