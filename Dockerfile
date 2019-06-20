FROM php:7.3.6-cli
RUN apt-get update && apt-get install git -y
RUN curl -s https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer
WORKDIR /var/www/
COPY . ./
RUN composer install
# ENTRYPOINT [ "php", "./vendor/bin/phpunit" ]

