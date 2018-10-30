FROM php:7.1.8-apache

MAINTAINER Otim Fredrick <fredrickot@gmail.com>

COPY . /srv/app
COPY .docker/vhost.conf /etc/apache2/sites-available/000-default.conf

RUN chown -R www-data:www-data /srv/app \
    && a2enmod rewrite