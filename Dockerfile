FROM php:5.6.40-cli-stretch
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
    docker-php-ext-install \
    mcrypt \
    pcntl \
    zip \
    pdo_pgsql

# Install Composer 1.6.3 (January 2018 version)
RUN curl -sS https://getcomposer.org/download/1.6.3/composer.phar -o composer.phar &&\
    mv composer.phar /usr/local/bin/composer &&\
    chmod +x /usr/local/bin/composer

WORKDIR /app

COPY ./ /app
RUN composer install
