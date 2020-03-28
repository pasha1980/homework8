FROM php:7.1-apache
RUN docker-php-ext-install pdo pdo_mysql;
#COPY . /var/www/html/
RUN pecl install xdebug \
    && docker-php-ext-enable xdebug
COPY php /usr/local/etc/php/conf.d/xdebug.ini