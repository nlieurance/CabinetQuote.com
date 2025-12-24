FROM php:8.2-apache

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Install mysqli
RUN docker-php-ext-install mysqli

# Set working directory
WORKDIR /var/www/html

# Copy app files
COPY . /var/www/html

# Give Apache permission to uploads
RUN chown -R www-data:www-data /var/www/html/uploads \
    && chmod -R 755 /var/www/html/uploads

# Expose port
EXPOSE 80
