FROM php:7.4-apache

# Install and enable necessary PHP extensions
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN a2enmod rewrite
RUN apt-get update && docker-php-ext-install pdo_mysql

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

COPY . /var/www


# Enable additional Apache modules
RUN a2enmod proxy proxy_http proxy_balancer lbmethod_byrequests

# Install and enable MongoDB extension
RUN pecl install mongodb && docker-php-ext-enable mongodb