# Use the official PHP with Apache image as the base image
FROM php:8.2-apache

# Install system dependencies and PHP extensions required by Laravel
RUN apt-get update && apt-get install -y \
    && docker-php-ext-install pdo pdo_mysql

# Set the working directory to /var/www/html (default for Apache)
WORKDIR /var/www/html

# Copy the Laravel project files into the container
COPY . .

RUN a2enmod rewrite
COPY ./vhost.conf /etc/apache2/sites-available/000-default.conf

COPY --from=composer:2.5.8 /usr/bin/composer /usr/bin/composer

# Copy shell script into container
COPY entrypoint.sh /usr/local/bin/entrypoint.sh

ENV PORT=80

# Run entrypoint
ENTRYPOINT ["/usr/local/bin/entrypoint.sh"]