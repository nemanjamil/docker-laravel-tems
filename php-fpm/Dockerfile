# php-fpm
# FROM php:fpm-alpine
FROM php:7.2-fpm
# FROM php:7.2-fpm-alpine

RUN apt-get update \
	&& docker-php-ext-install -j$(nproc) pdo pdo_mysql mysqli

CMD ["php-fpm"]

EXPOSE 9000