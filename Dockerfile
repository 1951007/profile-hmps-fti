

FROM php:8.1-fpm

RUN apt-get update -y \
    && apt-get install -y nginx git build-essential libzip-dev \
    locales zip unzip curl

RUN docker-php-ext-install pdo_mysql \
    && docker-php-ext-install opcache \
    && apt-get install libicu-dev -y \
    && docker-php-ext-configure intl \
    && docker-php-ext-install intl \
    && apt-get remove libicu-dev icu-devtools -y
RUN { \
        echo 'opcache.memory_consumption=512'; \
        echo 'opcache.interned_strings_buffer=64'; \
        echo 'opcache.max_accelerated_files=32531'; \
        echo 'opcache.validate_timestamps=0'; \
        echo 'opcache.fast_shutdown=1'; \
        echo 'opcache.enable_cli=1'; \
    } > /usr/local/etc/php/conf.d/php-opcache-cfg.ini

COPY docker/site.conf /etc/nginx/sites-enabled/default
COPY entrypoint.sh /etc/entrypoint.sh

COPY --chown=www-data:www-data . /var/www/html

# RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
# RUN composer install --prefer-dist --no-dev -o

WORKDIR /var/www/html

EXPOSE 80

RUN ["chmod", "+x", "/etc/entrypoint.sh"]

ENTRYPOINT ["/etc/entrypoint.sh"]
