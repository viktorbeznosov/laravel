FROM php:7.4.5-fpm

RUN apt-get update && apt-get install -y \
    libpq-dev git zip unzip curl && \
    apt-get clean

RUN docker-php-ext-install pdo pdo_mysql

RUN curl -sS https://getcomposer.org/installer -o composer-setup.php && \
    php composer-setup.php --install-dir=/usr/local/bin --filename=composer && \
    rm composer-setup.php
