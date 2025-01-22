<<<<<<< HEAD
FROM php:8.2.12
WORKDIR /var/www/html
RUN apt-get update && apt-get upgrade \libzip-def\unzip\ && docker-php-ext-install zip pdo pdo_mysql \ && pecl install -o -f redis-5.1.1\ && docker-php-ext-enable redis 
COPY --from=composer /user/bin/composer /user/bin/composer
RUN groupadd --gid 1000 appuser \ && useradd --uid 1000 -g appuser \ -G www-data,root --shell /bin/bash \ --create-home appuser
USER appuser
=======
FROM php:8.0-fpm

# Set working directory
WORKDIR /var/www

# Install dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    git \
    curl

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring zip exif pcntl
RUN docker-php-ext-configure gd --with-freetype --with-jpeg
RUN docker-php-ext-install gd

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copy existing application directory contents
COPY . /var/www

# Copy existing application directory permissions
COPY --chown=www-data:www-data . /var/www

# Expose port 9000 and start php-fpm server
EXPOSE 9000
CMD ["php-fpm"]
>>>>>>> 2b0aed28a164977693e6a1d1110f0cdb44145deb
