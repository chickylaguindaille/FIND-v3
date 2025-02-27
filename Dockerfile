# Utiliser PHP avec Apache
FROM php:8.1-apache

# Installer les dépendances nécessaires
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libxml2-dev \
    unzip \
    git \
    curl \
    libcurl4-openssl-dev \
    pkg-config \
    libssl-dev \
    zlib1g-dev \
    libonig-dev \
    libicu-dev \
    libssl-dev \
    libz-dev \
    build-essential \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Installer PDO MySQL
RUN docker-php-ext-install pdo pdo_mysql

# Activer mod_rewrite pour gérer .htaccess
RUN a2enmod rewrite

# Ajouter ServerName pour éviter le warning
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Copier le code source dans le conteneur
WORKDIR /var/www/html
COPY . /var/www/html

# Donner les permissions nécessaires
RUN chmod -R 755 /var/www/html

# Installer Composer et les dépendances PHP
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install --no-dev --optimize-autoloader --no-scripts

# Exposer le port utilisé par Apache
EXPOSE 80

# Lancer Apache en mode foreground
CMD ["apache2-foreground"]
