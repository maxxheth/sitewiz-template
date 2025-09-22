# Use an official PHP image as a parent image
FROM php:8.3-fpm as php

# Set working directory
WORKDIR /var/www/html

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    curl \
    libzip-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd zip pdo pdo_mysql

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Install Bun
RUN curl -fsSL https://bun.sh/install | bash
ENV PATH="/root/.bun/bin:${PATH}"

# Copy existing application directory contents
COPY . .

# Install dependencies
RUN composer install --no-interaction --no-plugins --no-scripts
RUN bun install

# Build assets
RUN bun run build

# Build the Hyde site
RUN php hyde build

# --- Apache Stage ---
FROM httpd:2.4

# Copy the generated site from the build stage
COPY --from=php /var/www/html/_site/ /usr/local/apache2/htdocs/

# Copy custom Apache configuration if it exists
COPY docker/apache-site.conf /usr/local/apache2/conf/extra/httpd-vhosts.conf
RUN echo "Include conf/extra/httpd-vhosts.conf" >> /usr/local/apache2/conf/httpd.conf && \
    sed -i -e 's/#LoadModule rewrite_module/LoadModule rewrite_module/' /usr/local/apache2/conf/httpd.conf