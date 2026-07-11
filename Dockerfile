FROM php:8.2-apache

# Enable Apache rewrite module
RUN a2enmod rewrite

# Copy project files to web root
COPY . /var/www/html/

# Set proper permissions
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 755 /var/www/html

# Copy Apache configuration
COPY .docker/apache.conf /etc/apache2/sites-available/000-default.conf

# Enable the site configuration
RUN a2ensite 000-default

EXPOSE 80

CMD ["apache2-foreground"]
