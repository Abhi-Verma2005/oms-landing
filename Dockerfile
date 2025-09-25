FROM wordpress:6.4-php8.2-apache

# Install additional system and PHP dependencies (including Node.js/npm for optional theme builds)
RUN apt-get update && apt-get install -y \
    libzip-dev \
    unzip \
    git \
    curl \
    ca-certificates \
    nodejs \
    npm \
    && docker-php-ext-install zip \
    && rm -rf /var/lib/apt/lists/*

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Install latest WP-CLI
RUN curl -fsSL https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar -o /usr/local/bin/wp \
    && chmod +x /usr/local/bin/wp

# Set working directory
WORKDIR /var/www/html

# Copy custom configuration
COPY docker/wordpress/uploads.ini /usr/local/etc/php/conf.d/uploads.ini

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Set proper permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Optional: Build theme assets if a Node project exists in the theme directory
# This block is safe to run even if package.json is missing; it will no-op
ARG THEME_DIR=/var/www/html/wp-content/themes/stellar-theme
RUN if [ -f "$THEME_DIR/package.json" ]; then \
      echo "Building theme assets in $THEME_DIR" && \
      cd "$THEME_DIR" && \
      npm ci || npm install --legacy-peer-deps && \
      if npm run build; then echo "Theme build completed"; else echo "No build script, skipping"; fi; \
    else \
      echo "No package.json found in $THEME_DIR, skipping theme build"; \
    fi

# Expose port 80
EXPOSE 80
