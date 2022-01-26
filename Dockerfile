
FROM php:7.3-apache

RUN a2enmod rewrite


RUN apt-get update && \
    apt-get install -y vim \
    curl \
    unzip \
    default-mysql-client \
    libpng-dev \
    libfreetype6-dev \
    libjpeg62-turbo-dev

RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

RUN docker-php-ext-install -j$(nproc) pdo pdo_mysql \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd

RUN \
    apt-get update && \
    apt-get install libldap2-dev -y && \
    rm -rf /var/lib/apt/lists/* && \
    docker-php-ext-configure ldap --with-libdir=lib/x86_64-linux-gnu/ && \
    docker-php-ext-install ldap

