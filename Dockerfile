FROM php:8.2-fpm

# Instala extensões necessárias
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    git \
    curl \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    && docker-php-ext-install pdo pdo_mysql mbstring zip exif pcntl

# Instala Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Define o diretório de trabalho
WORKDIR /var/www

# Copia os arquivos do projeto
COPY ./backend-laravel /var/www

# Instala dependências do Laravel
RUN composer install

# Dá permissão às pastas de cache e logs
RUN chown -R www-data:www-data /var/www \
    && chmod -R 755 /var/www/storage

# Expondo a porta padrão
EXPOSE 9000

# Comando para iniciar o PHP-FPM
CMD ["php-fpm"]
