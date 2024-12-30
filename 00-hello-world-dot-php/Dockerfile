FROM php:8.3-cli-alpine

ENV COMPOSER_ALLOW_SUPERUSER=1
ENV COMPOSER_CACHE_DIR=/app/.composer/cache
COPY --from=composer /usr/bin/composer /usr/bin/composer

RUN apk add --update --no-cache bash

WORKDIR /app
