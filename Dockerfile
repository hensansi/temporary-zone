FROM php:7.2-cli-stretch
ENV DEBIAN_FRONTEND=noninteractive

# Replace repos in archive as release is EOL
RUN echo "deb http://archive.debian.org/debian/ stretch main contrib non-free" > /etc/apt/sources.list && \
    echo "deb http://archive.debian.org/debian/ stretch-backports main contrib non-free" >> /etc/apt/sources.list && \
    echo "deb http://archive.debian.org/debian-security/ stretch/updates main contrib non-free" >> /etc/apt/sources.list

RUN apt-get update && \
    apt-get install -y \
    # for mcrypt extension
    mcrypt \
    libmcrypt-dev \
    # for zip extension
    libzip-dev \
    # for pdo_pgsql
    libpq-dev \
    && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-configure pcntl --enable-pcntl &&\
    pecl install mcrypt-1.0.3 &&\
    docker-php-ext-enable mcrypt &&\
    docker-php-ext-install \
    pcntl \
    zip \
    pdo_pgsql

# Install Composer 2.2.24 (June 2024)
RUN curl -sS https://getcomposer.org/download/2.7.7/composer.phar -o composer.phar &&\
    mv composer.phar /usr/local/bin/composer &&\
    chmod +x /usr/local/bin/composer

WORKDIR /app

COPY ./ /app
RUN composer install
#RUN php artisan key:generate

