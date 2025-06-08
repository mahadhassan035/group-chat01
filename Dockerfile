# Use official PHP image with Apache
FROM php:8.1-apache

# Copy all files into Apache web directory
COPY . /var/www/html/

# Set permissions (optional)
RUN chown -R www-data:www-data /var/www/html/
