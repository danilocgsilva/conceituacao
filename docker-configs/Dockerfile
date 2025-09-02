FROM php:latest

RUN apt-get update
RUN apt-get upgrade -y
RUN apt-get install -y curl git zip
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin/ --filename=composer
RUN curl -sL https://deb.nodesource.com/setup_20.x | bash - 
RUN apt-get install -y nodejs
RUN docker-php-ext-configure pcntl --enable-pcntl \
    && docker-php-ext-install \
    pcntl
RUN docker-php-ext-install pdo_mysql
COPY ./build.sh /
RUN chmod +x /build.sh

CMD while : ; do sleep 1000; done
