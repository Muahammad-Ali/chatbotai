# Use an official PHP runtime as a parent image
FROM php:7.4-apache

# Copy the current directory contents into the container at /var/www/html
COPY . /var/www/html/

# Install necessary PHP extensions (adjust based on your project needs)
RUN apt-get update && apt-get install -y \
    libzip-dev \
    && docker-php-ext-install zip

# Enable Apache mod_rewrite for friendly URLs, if needed
RUN a2enmod rewrite

# Expose port 80 to the outside world
EXPOSE 80

# Start the Apache server in the foreground
CMD ["apache2-foreground"]
