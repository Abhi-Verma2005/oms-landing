FROM wordpress:6.4-php8.2-apache

# Install additional PHP extensions
RUN apt-get update && apt-get install -y \
    libzip-dev \
    unzip \
    git \
    && docker-php-ext-install zip \
    && rm -rf /var/lib/apt/lists/*

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Install WP-CLI
RUN curl -O https://raw.githubusercontent.com/wp-cli/wp-cli/v2.8.1/php/wp-cli.phar \
    && chmod +x wp-cli.phar \
    && mv wp-cli.phar /usr/local/bin/wp

# Set working directory
WORKDIR /var/www/html

# Copy custom configuration
COPY docker/wordpress/uploads.ini /usr/local/etc/php/conf.d/uploads.ini

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Set proper permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Expose port 80
EXPOSE 80
