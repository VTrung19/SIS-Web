FROM php:8.2-apache

COPY apache2.conf /etc/apache2/apache2.conf

RUN apt-get update && apt-get upgrade -y \
    && docker-php-ext-install mysqli \
    && docker-php-ext-enable mysqli \
    && a2enmod rewrite
