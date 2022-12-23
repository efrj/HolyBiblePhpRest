FROM php:7.1-apache

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Applications
RUN apt-get update
RUN apt-get install -y neofetch
RUN apt-get install -y libzip-dev
RUN apt-get install -y zip
RUN apt-get install -y sqlite3

# Extensions
RUN docker-php-ext-configure zip
RUN docker-php-ext-install zip
RUN docker-php-ext-install pdo
RUN docker-php-ext-install shmop

# Apache
RUN a2enmod rewrite
