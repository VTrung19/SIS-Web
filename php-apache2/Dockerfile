FROM php:8.2-apache

COPY my-apache2.conf /etc/apache2/apach2.conf
RUN a2enmod rewrite

RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN apt-get update && apt-get upgrade -y

# Set proper permissions for the app directory
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html
