FROM php:8.3-fpm-alpine
#Use a versão do PHP que preferir (ex: php:8.3-fpm ou php:8.2-fpm-alpine)

# Instalar extensões PHP comuns que você possa precisar
RUN docker-php-ext-install pdo_mysql opcache \
    && docker-php-ext-enable opcache

# Se precisar de outras extensões, adicione aqui. Por exemplo, para mysqli:
# RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

WORKDIR /var/www/html