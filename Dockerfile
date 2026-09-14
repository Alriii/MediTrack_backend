FROM php:8.4-cli

RUN apt-get update \
    && apt-get install -y libicu-dev \
    && docker-php-ext-install pdo_mysql intl \
    && rm -rf /var/lib/apt/lists/*