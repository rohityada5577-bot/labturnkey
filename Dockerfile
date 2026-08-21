FROM php:8.2-apache

RUN docker-php-ext-install pdo pdo_mysql

RUN a2enmod rewrite

WORKDIR /var/www/html

COPY composer.json composer.lock ./

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php composer-setup.php --install-dir=/usr/local/bin --filename=composer \
    && rm composer-setup.php

RUN composer install --no-dev --optimize-autoloader

COPY . .

RUN chown -R www-data:www-data /var/www/html

EXPOSE 80