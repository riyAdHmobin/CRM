FROM php:8.1.0-apache

# Enable Mod Rewrite
RUN a2enmod rewrite

# Install Linux Libraries
RUN apt-get update -y && apt-get install -y \
    libicu-dev \
    libmariadb-dev \
    unzip \
    zip \
    zlib1g-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev 

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Install PHP Extensions
RUN docker-php-ext-install gettext intl pdo_mysql

# Install GD extension with freetype and jpeg support
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd

# Install zip extension
RUN pecl install zip \
    && docker-php-ext-enable zip

# Set working directory
WORKDIR /var/www/html
