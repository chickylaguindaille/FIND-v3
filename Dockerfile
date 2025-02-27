# Étape 1 : Installer PHP-FPM avec les extensions nécessaires
FROM php:8.1-fpm

# Installer les extensions PHP nécessaires
RUN apt-get update && apt-get install -y \
    nginx \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libxml2-dev \
    unzip \
    git \
    curl \
    libonig-dev \
    libicu-dev \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Installer PDO MySQL
RUN docker-php-ext-install pdo pdo_mysql

# Installer Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copier les fichiers de l'application Symfony
WORKDIR /var/www/html
COPY . /var/www/html

# Installer les dépendances PHP
RUN composer install --no-dev --optimize-autoloader --no-scripts

# Donner les bonnes permissions
RUN chmod -R 755 /var/www/html

# Copier la configuration Nginx
COPY nginx.conf /etc/nginx/nginx.conf

# Exposer le port que Railway va utiliser
EXPOSE 80

# Lancer PHP-FPM et Nginx
CMD service php8.1-fpm start && nginx -g 'daemon off;'
