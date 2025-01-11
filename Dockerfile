# Use an official PHP runtime as a parent image
FROM php:7.4-apache

# Set working directory
WORKDIR /var/www/html

# Copy the current directory contents into the container
COPY . .

# Install necessary PHP extensions
RUN apt-get update && apt-get install -y \
    libzip-dev \
    && docker-php-ext-install zip

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Install Composer dependencies
COPY --from=composer:2 /usr/bin/composer /usr/local/bin/composer
RUN composer install

# Expose port 80
EXPOSE 80

# Start the Apache server
CMD ["apache2-foreground"]
