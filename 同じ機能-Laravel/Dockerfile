# Use the official PHP with Apache image as the base image
FROM php:8.2-apache

# Install system dependencies and PHP extensions required by Laravel
RUN docker-php-ext-install pdo pdo_mysql

# Copy the Laravel project files into the container
COPY . /var/www/html

RUN a2enmod rewrite
COPY ./vhost.conf /etc/apache2/sites-available/000-default.conf

# Set the working directory to /var/www/html (default for Apache)
WORKDIR /var/www/html

RUN apt-get update && apt-get install -y