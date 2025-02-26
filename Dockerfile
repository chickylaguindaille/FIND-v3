# Utiliser l'image PHP 7 officielle
FROM php:8.1-cli

# Installer les dépendances de base nécessaires pour compiler les extensions PHP
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

# Ajouter LD_LIBRARY_PATH pour résoudre les problèmes de bibliothèques partagées
# ENV LD_LIBRARY_PATH=/usr/local/lib:$LD_LIBRARY_PATH

# Définir la variable d'environnement APP_ENV
ENV APP_ENV=prod

# Installer Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Installer php-pear via PEAR
RUN curl -sS https://pear.php.net/go-pear.phar -o go-pear.phar \
    && php go-pear.phar \
    && rm -f go-pear.phar

# Installer MongoDB extension pour PHP
RUN pecl install mongodb \
    && docker-php-ext-enable mongodb

# Installer Symfony Dotenv
RUN composer require symfony/dotenv

# Définir les variable d'environnement pour MongoDB
# ENV MONGODB_DB=find_bdd
# ENV MONGODB_URL=mongodb+srv://folkloreisnotdead:Papeleroy02@find.cv25s88.mongodb.net

# Copier le code source dans le conteneur
WORKDIR /var/www/html
COPY . /var/www/html
COPY .env /var/www/html/.env
RUN chmod 644 /var/www/html/.env


# Donner les bonnes permissions
RUN chmod -R 755 /var/www/html

# Installer les dépendances PHP via Composer
RUN composer install --no-dev --optimize-autoloader

# Exposer le port sur lequel PHP écoutera
EXPOSE 9000

# Lancer le serveur PHP avec les bonnes configurations pour Railway
CMD echo "PORT is set to: $PORT" && php -S 0.0.0.0:$PORT -t public

