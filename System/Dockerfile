# Use official PHP image with Node and Composer pre-installed
FROM php:8.2-fpm

# Set working directory
WORKDIR /var/www/html

# Install dependencies
RUN apt-get update && apt-get install -y \
    unzip \
    curl \
    git \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    && docker-php-ext-install pdo mbstring exif pcntl bcmath gd

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Install Node.js and npm for Vite
RUN curl -fsSL curl -fsSL https://deb.nodesource.com/setup_23.x | bash - && \
    apt-get install -y nodejs

# Copy Laravel app files
COPY . .

# Install Laravel dependencies
RUN composer install && npm install && npm run build

# Copy environment file and generate key
RUN cp .env.example .env && php artisan key:generate

# Set permissions
RUN chmod -R 777 storage bootstrap/cache

CMD ["php-fpm"]
