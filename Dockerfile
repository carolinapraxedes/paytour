# Use a imagem oficial do PHP
FROM php:8.2-fpm

# Instale dependências do sistema
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    git \
    curl

# Instale extensões PHP necessárias
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Instale Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Defina o diretório de trabalho
WORKDIR /var/www

# Copie os arquivos do projeto
COPY . .

# Instale as dependências do Composer
RUN composer install --prefer-dist --no-scripts --no-interaction

# Copie o arquivo de configuração do PHP-FPM
COPY ./docker/php-fpm.conf /usr/local/etc/php-fpm.d/zz-docker.conf

# Defina as permissões apropriadas
RUN chown -R www-data:www-data /var/www

# Exponha a porta 9000
EXPOSE 9000

CMD ["php-fpm"]
