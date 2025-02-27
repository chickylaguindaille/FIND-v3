# Utiliser une image PHP officielle avec PHP CLI
FROM php:8.1-cli

# Installer les extensions nécessaires pour PHP et Nginx
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

# Copier le code de l'application Symfony dans le conteneur
WORKDIR /var/www/html
COPY . /var/www/html

# Installer Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Installer les dépendances via Composer
RUN composer install --no-dev --optimize-autoloader --no-scripts

# Configurer les permissions
RUN chmod -R 755 /var/www/html

# Copier la configuration Nginx
COPY nginx.conf /etc/nginx/nginx.conf

# Exposer le port
EXPOSE 80

# Démarrer Nginx et PHP CLI
CMD service nginx start && php -S 0.0.0.0:9000 -t public
