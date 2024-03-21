# Use the official PHP image
FROM php:8.2.12-apache

# Install MySQL extension for PHP
RUN docker-php-ext-install mysqli pdo_mysql

# Copy your PHP files into the container
COPY . /var/www/html/

# Set working directory
WORKDIR /var/www/html/
