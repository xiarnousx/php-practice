FROM php:8.4-cli


RUN apt-get update && apt-get install -y \
zip \
unzip \
curl \
libfreetype-dev \
libjpeg62-turbo-dev \
libpng-dev \
libwebp-dev \
libicu-dev \
libzip-dev \
&& pecl install redis \
&& docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp \
&& docker-php-ext-install -j$(nproc) gd \
bcmath \
ctype  \
pdo_mysql \
mysqli \
intl \
zip


COPY --from=composer:latest /usr/bin/composer /usr/bin/composer