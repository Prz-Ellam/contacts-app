FROM php:8.2-apache

COPY ./src/ /var/www/html/

RUN docker-php-ext-install pdo pdo_mysql

RUN a2enmod ssl && a2enmod rewrite

EXPOSE 80
EXPOSE 443

# Restart Apache
RUN service apache2 restart