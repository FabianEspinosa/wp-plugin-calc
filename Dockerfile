# Use the official PHP 7.4 image as a parent image
FROM php:8.1-fpm

# Install system dependencies
RUN apt-get update && \
    apt-get install -y \
    git \
    curl \
    unzip \
    libicu-dev \
    libpq-dev \
    libzip-dev

# Install PHP extensions
RUN docker-php-ext-install pdo pdo_mysql intl zip

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set working directory
WORKDIR /var/www/html

# Copy the source code into the container
COPY . .

RUN echo 'deb [trusted=yes] https://repo.symfony.com/apt/ /' | tee /etc/apt/sources.list.d/symfony-cli.list
RUN apt update
RUN apt install symfony-cli
# Install project dependencies
RUN composer install

# Set permissions for cache and log directories
RUN chown -R www-data:www-data var/cache var/log

# Expose port 8000 and start the Symfony server
EXPOSE 8000
CMD ["symfony", "server:start", "--no-tls"]
