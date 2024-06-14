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
    curl \
    npm

# Instale extensões PHP necessárias
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd


# Instala o Node.js e o npm
RUN curl -fsSL https://deb.nodesource.com/setup_lts.x | bash - \
    && apt-get install -y nodejs

# Instale Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer


# Define o diretório de trabalho
WORKDIR /var/www

# Copia os arquivos do projeto para o contêiner
COPY . .

# Instala as dependências do PHP
RUN composer install --prefer-dist --no-scripts --no-interaction

# Instala as dependências do NPM
RUN npm install 

# Build do Tailwind CSS
RUN npm run build

# Copie o arquivo de configuração do PHP-FPM
COPY ./docker/php-fpm.conf /usr/local/etc/php-fpm.d/zz-docker.conf

# Defina as permissões apropriadas
RUN chown -R www-data:www-data /var/www

# Exponha a porta 9000 e inicie o servidor PHP-FPM
EXPOSE 9000
CMD ["php-fpm"]
