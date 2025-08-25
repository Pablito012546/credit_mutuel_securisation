# Utilise l'image officielle de PHP
FROM php:8.1-apache

# Copie les fichiers de votre projet dans le répertoire par défaut du serveur web
COPY . /var/www/html/

# Rend le répertoire www-data propriétaire des fichiers
RUN chown -R www-data:www-data /var/www/html

# Rend le port 80 accessible
EXPOSE 80