FROM php:8.0.2-fpm

# ARG UID
# ARG GID

# ENV UID=${UID}
# ENV GID=${GID}

# RUN addgroup -g ${GID} --system php-course
# RUN adduser -G php-course --system -D -s /bin/sh -u ${UID} laravel

RUN apt-get update && apt-get install -y \
    git \
    curl \
    zip \
    vim \
    unzip

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN usermod -u 1001 www-data \
&& groupmod -g 1001 www-data \
&& chgrp -R www-data /var/www

WORKDIR /var/www
