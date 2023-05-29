FROM php:8.2-apache

RUN apt-get update && \
    apt-get install -y git && \
    apt-get install -y zip && \
    apt-get install -y build-essential libssl-dev zlib1g-dev libpng-dev libjpeg-dev libfreetype6-dev && \
    apt-get install -y exiftool && \
    docker-php-ext-configure gd --with-freetype=/usr/include/ --with-jpeg=/usr/include/ && docker-php-ext-install gd && \
    docker-php-ext-configure exif && docker-php-ext-install exif && \
    php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && php composer-setup.php && rm composer-setup.php && mv composer.phar /usr/local/bin/composer && chmod a+x /usr/local/bin/composer