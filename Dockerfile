FROM php:7.4-alpine

RUN apk --no-cache add postgresql-dev && \
    docker-php-ext-install -j$(nproc) pgsql pdo_pgsql

RUN wget -qO- https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer

RUN apk add --no-cache nodejs npm
