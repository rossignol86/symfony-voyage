# 🌍  symfony-voyage

**Voyagez.com** est une application web développée avec le framework PHP **Symfony**. Elle permet aux utilisateurs de découvrir, planifier et gérer leurs voyages à travers une interface intuitive, rapide et sécurisée.

## 🚀 Fonctionnalités principales
- 📸 Galerie photo des lieux visités
- 🌐 Responsive design compatible mobile & tablette
- 🌐 Page Formulaire contact
- 🌐 Page Formulaire reservation

## 🛠️ Technologies utilisées
- PHP 8.x
- Symfony 6.x
- Twig (moteur de template)

## 📦 Installation du projet
symfony new voyage --webapp

### 1. Cloner le dépôt
git clone https://github.com/rossignol86/symfony-voyage.git

Pour générer un CRUD
php bin/console make:crud

Créer la base de données et les tables
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate
php bin/console make:entity

Lancer le serveur local
symfony server:start
Accède au projet via http://localhost:8000



📁 Structure du projet
├── src/               # Code source (contrôleurs, entités, services)
├── templates/         # Fichiers Twig pour le rendu HTML
├── public/            # Fichiers accessibles publiquement (CSS, JS, images)
├── migrations/        # Fichiers de migration Doctrine
├── config/            # Configuration Symfony
├── .env               # Variables d’environnement
└── README.md          # Ce fichier


✅ À faire / améliorations futures
 Ajout d’un moteur de recommandations de voyages
 Intégration API météo / change monnaie
 Système de réservation d’hébergement et de transport
 Application mobile avec Symfony UX ou API Platform + React Native

🧑‍💻 Auteur
Franck Rossignol
Développeur web & web mobile | Poitiers
📫 ff.rossignol@yahoo.fr
🌐 https://rossignol86.github.io/FranckRossignol/

Ce projet a été réalisé dans le cadre de ma formation de Développeur Web & Web Mobile. Il illustre l'intégration complète d'une application Symfony, de la base de données au rendu graphique responsive.



npm install file-loader@^6.0.0 --save-dev
# file-loader est un loader Webpack qui permet de gérer les fichiers statiques (images, polices, vidéos, etc.) dans une application Webpack.
# Il prend en charge des fichiers comme :
# .png, .jpg, .gif, .svg (images)
# .woff, .ttf, .eot (polices)
# .mp4, .webm (vidéos)
# Il copie le fichier dans ton dossier de sortie (dist/, par exemple) et renvoie son chemin d’accès dans ton JavaScript ou CSS.


npm install postcss-loader@^8.1.0 --save-dev
# Ce loader Webpack permet de traiter les fichiers CSS avec PostCSS.
# PostCSS est un outil de transformation CSS via des plugins. Il permet, entre autres :
# d’utiliser des fonctionnalités CSS modernes (grâce à postcss-preset-env par exemple) ;
# d’ajouter automatiquement les préfixes navigateurs (autoprefixer) ;
# de compresser/minifier ton CSS ;
# d’utiliser des variables, des mixins, des fonctions CSS personnalisées, etc.

npm install webpack-notifier@^1.15.0 --save-dev
# webpack-notifier est utile quand tu travailles avec Webpack en mode développement, car il te prévient immédiatement via une notification système (genre pop-up en bas de l’écran) :
# si la compilation s’est bien passée ;
# s’il y a une erreur dans le code.
# Cela t'évite de rester scotché au terminal ou au navigateur pendant que tu développes.
