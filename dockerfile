FROM php:8.2.12
WORKDIR /var/www/html
RUN apt-get update && apt-get upgrade \libzip-def\unzip\ && docker-php-ext-install zip pdo pdo_mysql \ && pecl install -o -f redis-5.1.1\ && docker-php-ext-enable redis 
COPY --from=composer /user/bin/composer /user/bin/composer
RUN groupadd --gid 1000 appuser \ && useradd --uid 1000 -g appuser \ -G www-data,root --shell /bin/bash \ --create-home appuser
USER appuser
