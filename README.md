
# Laravel Starter Project

Ce dépôt est un projet de base Laravel conçu pour démarrer rapidement de nouveaux projets. Il inclut les fonctionnalités essentielles comme l'authentification et une structure de pages de base, ainsi que la configuration initiale pour les migrations de la table `users`.


## Étape 1 : Installer les prérequis

- **PHP** >= 8.3.x
- **Composer** >= 2.0
- **Laravel** >= 11.x
- **MySQL** ou une autre base de données compatible

## Installation

### Étape 1 : Cloner le dépôt

Clonez ce dépôt sur votre machine locale :

git clone https://github.com/username/laravel-starter.git
cd laravel-starter

## Étape 2 : Installer les dépendances
Utilisez Composer pour installer les dépendances PHP :

bash
Copier le code
composer install

## Étape 3 : Configurer l'environnement
Copiez le fichier .env.example et renommez-le .env :

bash
Copier le code
cp .env.example .env
Configurez les informations de connexion à votre base de données dans le fichier .env. Par exemple :

env
Copier le code
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nom_de_la_base
DB_USERNAME=utilisateur
DB_PASSWORD=mot_de_passe

## Étape 4 : Générer la clé de l'application
Générez la clé d'application Laravel en exécutant la commande suivante :

bash
Copier le code
php artisan key:generate

## Étape 5 : Lancer les migrations
Pour créer les tables de base, exécutez les migrations :

bash
Copier le code
php artisan migrate
Étape 6 : Démarrer le serveur de développement
Vous pouvez maintenant démarrer le serveur de développement Laravel :

bash
Copier le code
php artisan serve
Votre application est maintenant accessible sur http://localhost:8000.

Fonctionnalités
Authentification de base (inscription, connexion, réinitialisation de mot de passe)
Structure de pages basique prête à être personnalisée
Prise en charge de migrations pour la table users

Contribuer
Les contributions sont les bienvenues ! Si vous souhaitez améliorer ce starter, n'hésitez pas à ouvrir une issue ou une pull request.

Licence
Ce projet est sous licence MIT. Consultez le fichier LICENSE pour plus de détails.

