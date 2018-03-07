FROM php:5.6-cli

RUN apt-get update \
    && apt-get install -y \
      # for mcrypt extension
      mcrypt \
      libmcrypt-dev \
      # for zip extension
      libzip-dev \
      # for pdo_pgsql
      libpq-dev \
    && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-configure pcntl --enable-pcntl

RUN docker-php-ext-install \
    mcrypt \
    pcntl \
    zip \
    pdo_pgsql

RUN curl -sS https://getcomposer.org/installer | php &&\
    mv composer.phar /usr/local/bin/composer &&\
    chmod +x /usr/local/bin/composer

# Install laravel
RUN composer global require "laravel/installer"

# Set up the application directory
VOLUME ["/app"]
WORKDIR /app
