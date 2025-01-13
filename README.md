# Portfolio Interactif

## 📖 Description du projet

**Portfolio Interactif** est un projet développé avec le framework **Symfony**. Il s'agit d'une application web permettant à un graphiste de présenter ses 
œuvres de manière interactive et captivante. L'objectif est de fournir une plateforme élégante et fonctionnelle qui met en valeur le travail artistique 
tout en offrant une expérience utilisateur fluide.

## 🚀 Fonctionnalités principales

- **Présentation des œuvres** : Galerie dynamique des créations du graphiste avec des descriptions détaillées.
- **Gestion de contenu** : Interface d'administration complète permettant d'ajouter, de modifier et de supprimer des œuvres facilement, de gérer utilisateurs commentaires et autres.
- **Responsive design** : Interface optimisée pour une navigation fluide sur tous les types d'appareils (desktop, tablette, mobile).
- **Formulaire de contact** : Système permettant aux visiteurs de contacter le graphiste directement via le site.
- **Sécurité** : Système de sécurité avec hashages des mot de passe, fire-wall et reCaptcha v3 pour les formulaires.

## 🛠️ Technologies utilisées

- **Symfony** : Framework PHP robuste et flexible pour le développement web.
- **Twig** : Moteur de templates pour une gestion simplifiée de l'affichage.
- **Doctrine** : ORM (Object-Relational Mapping) pour la gestion des bases de données.
- **Bootstrap** : Framework CSS pour un design moderne et responsive.

## 📋 Prérequis

- **PHP** 8.x ou supérieur
- **Composer** (pour la gestion des dépendances)
- **Serveur Web** (Apache, Nginx, etc.)
- **Base de données** (MySQL etc.)

## 📦 Installation et utilisation

1. Clonez le projet depuis le dépôt GitHub :
   ```bash
   git clone https://github.com/votreutilisateur/portfolio-interactif.git
   ```

2. Naviguez dans le dossier du projet :
   ```bash
   cd portfolio-interactif
   ```

3. Installez les dépendances via Composer :
   ```bash
   composer install
   ```

4. Configurez votre base de données dans le fichier `.env`.

5. Exécutez les migrations pour créer les tables de la base de données :
   ```bash
   php bin/console doctrine:migrations:migrate
   ```

6. Lancez le serveur local Symfony :
   ```bash
   symfony server:start
   ```

7. Accédez à l'application à l'adresse [http://localhost:8000](http://localhost:8000) 🌟.

