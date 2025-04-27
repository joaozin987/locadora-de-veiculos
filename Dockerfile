FROM php:8.2-cli

# Instala extensões necessárias
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
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

# Instala dependências e gera a key
RUN composer install \
  && cp .env.example .env \
  && php artisan key:generate

# Dá permissão às pastas de cache e logs
RUN chmod -R 775 storage bootstrap/cache

# Expõe a porta (pode deixar 8080 mesmo)
EXPOSE 8080

# Corrige o comando para usar a porta do Railway
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=${PORT}"]
