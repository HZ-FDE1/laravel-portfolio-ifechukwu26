FROM php:8.2-apache


RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd \
    && docker-php-ext-install pdo_mysql


COPY --from=composer:latest /usr/bin/composer /usr/bin/composer


RUN a2enmod rewrite


COPY site.conf /etc/apache2/sites-available/000-default.conf


WORKDIR /var/www/html


COPY entrypoint.sh /usr/local/bin/
RUN chmod +x /usr/local/bin/entrypoint.sh


COPY . .


ENTRYPOINT ["entrypoint.sh"]
CMD ["apache2-foreground"]
