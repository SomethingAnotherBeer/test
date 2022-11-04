FROM php:8.1-fpm

RUN apt update \
	&& apt install -y zlib1g-dev git libicu-dev zip libzip-dev zip curl python3\
	&& docker-php-ext-install pdo pdo_mysql \ 
	&& docker-php-ext-configure zip \
	&& docker-php-ext-install zip

COPY ./app_src/ /var/www/app
COPY ./worker/ /worker

WORKDIR /var/www/app

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN git config --global user.email "eugene@example.com" \ 
    && git config --global user.name "Eugene Zarianski" \
    && useradd appu -u 1000 \
    && chown appu /var/www/app \
    && chown appu /worker
    	







