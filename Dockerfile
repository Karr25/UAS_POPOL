# Gunakan base image PHP dengan FPM
FROM php:8.2-fpm

# Set working directory
WORKDIR /var/www

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    nginx

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy project files
COPY . /var/www

# Install project dependencies
RUN composer install --no-interaction --optimize-autoloader --no-dev

# Set permissions
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

# Generate application key
RUN php artisan key:generate

# Clear config and cache
RUN php artisan config:clear
RUN php artisan cache:clear

# Configure nginx
COPY nginx.conf /etc/nginx/sites-available/default

# Expose port 8000
EXPOSE 8000

# Start PHP-FPM and Nginx
CMD service nginx start && php-fpm