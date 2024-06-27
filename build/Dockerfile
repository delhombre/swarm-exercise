FROM php:8.2.20-apache-bookworm AS php

WORKDIR /var/www/html

RUN apt-get update && \
  apt-get install -y libpng-dev && \
  docker-php-ext-install pdo pdo_mysql gd

EXPOSE 80

CMD [ "apache2-foreground" ]