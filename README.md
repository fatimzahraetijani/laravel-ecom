# 🛍️ Plateforme E-Commerce — Laravel & Jetstream

[![Laravel](https://img.shields.io/badge/Laravel-9.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-8.0%2B-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://www.php.net)
[![TailwindCSS](https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white)](https://tailwindcss.com/)
[![Livewire](https://img.shields.io/badge/Livewire-2.x-4E56A6?style=for-the-badge&logo=livewire&logoColor=white)](https://laravel-livewire.com)
[![License](https://img.shields.io/badge/Licence-MIT-green.svg?style=for-the-badge)](LICENSE)

Une application web e-commerce moderne, robuste et complète développée avec le framework **Laravel 9**, intégrant **Laravel Jetstream** pour l'authentification et la sécurité, ainsi qu'un système innovant de **carte et points de fidélité** pour les clients.

---

## 📌 Sommaire

- [Aperçu du Projet](#-aperçu-du-projet)
- [Fonctionnalités Principales](#-fonctionnalités-principales)
  - [Espace Client (Front-Office)](#-espace-client-front-office)
  - [Panneau d'Administration (Back-Office)](#-panneau-dadministration-back-office)
- [Technologies & Dépendances](#-technologies--dépendances)
- [Structure du Projet](#-structure-du-projet)
- [Guide d'Installation](#-guide-dinstallation)
  - [1. Prérequis](#1-prérequis)
  - [2. Cloner le Projet](#2-cloner-le-projet)
  - [3. Installation des Dépendances](#3-installation-des-dépendances)
  - [4. Configuration de l'Environnement](#4-configuration-de-lenvironnement)
  - [5. Base de Données & Migrations](#5-base-de-données--migrations)
  - [6. Compilation des Assets & Lancement](#6-compilation-des-assets--lancement)
- [Comptes & Rôles Utilisateurs](#-comptes--rôles-utilisateurs)
- [Licence](#-licence)

---

## 📖 Aperçu du Projet

Cette plateforme permet de gérer une boutique en ligne avec une interface utilisateur élégante et réactive ainsi qu'un panneau de contrôle administrateur complet. Elle intègre la gestion des stocks, la publication d'offres promotionnelles (soldes), un système de fidélisation de la clientèle et un module de messagerie directe.

---

## ✨ Fonctionnalités Principales

### 👤 Espace Client (Front-Office)

- **Catalogue Interactif** : Consultation des articles avec pagination fluide et carrousels d'images.
- **Détails des Produits** : Fiches descriptives détaillées incluant les prix, stocks disponibles, catégories et remises.
- **Section Soldes & Offres Spéciales** : Espace dédié aux promotions et articles à prix réduits (`Product_sold`).
- **Recherche & Filtrage Avancés** : Recherche en temps réel par mots-clés (titre) et filtrage par catégories de produits.
- **Programme de Fidélité** :
  - Consultation de son numéro de carte de fidélité personnalisé (`numcarte`).
  - Suivi en temps réel de ses points de fidélité cumulés (`points`).
- **Formulaire de Contact & Messagerie** : Envoi de messages directement à l'équipe avec notifications interactives via **SweetAlert**.
- **Sécurité & Profil (Laravel Jetstream)** :
  - Inscription, connexion sécurisée et réinitialisation de mot de passe.
  - Authentification à deux facteurs (2FA).
  - Gestion du profil utilisateur, mise à jour des informations et sessions actives.

---

### 🛡️ Panneau d'Administration (Back-Office)

- **Tableau de Bord Dédié** : Accès réservé aux administrateurs (`usertype = 1`) avec redirection automatique post-authentification.
- **Gestion des Catégories** : Création, affichage et suppression dynamique des catégories d'articles.
- **Gestion des Produits (CRUD)** :
  - Ajout de nouveaux produits avec upload et redimensionnement d'images.
  - Modification des informations (titre, description, quantité, prix normal et prix remisé, catégorie).
  - Suppression de produits avec nettoyage automatique des fichiers multimédias.
- **Gestion des Produits Soldés** : Gestion autonome des articles sous promotion.
- **Gestion de la Fidélité Client** :
  - Attribution et création de numéros de carte de fidélité pour chaque utilisateur.
  - Ajout et ajustement des points de fidélité clients.
  - Suppression ou réinitialisation des cartes de fidélité.
- **Boîte de Réception des Messages** : Consultation de l'ensemble des requêtes et messages transmis par les utilisateurs.

---

## 🛠️ Technologies & Dépendances

| Composant | Technologie / Librairie |
| :--- | :--- |
| **Framework Backend** | [Laravel 9.x](https://laravel.com) |
| **Langage** | [PHP 8.0+](https://www.php.net) |
| **Authentification & Rôles** | [Laravel Jetstream](https://jetstream.laravel.com) & [Sanctum](https://laravel.com/docs/sanctum) |
| **Composants Réactifs** | [Livewire 2.x](https://laravel-livewire.com) |
| **Styles & UI** | [Tailwind CSS](https://tailwindcss.com), Bootstrap, StellarNav, IconMoon |
| **Alertes & Modales** | [RealRashid SweetAlert](https://sweetalert2.github.io/) |
| **Outils de Build** | Vite & Laravel Mix / PostCSS |
| **Base de Données** | MySQL / MariaDB (support PostgreSQL / SQLite) |

---

## 📂 Structure du Projet

```text
Ecom/
├── app/
│   ├── Http/Controllers/
│   │   ├── AdminController.php      # Gestion du back-office (produits, catégories, fidélité, messages)
│   │   └── HomeController.php       # Gestion du front-office (boutique, recherche, profil, carte fidélité)
│   └── Models/
│       ├── Catagory.php             # Modèle des catégories
│       ├── Message.php              # Modèle des messages de contact
│       ├── Product.php              # Modèle des produits
│       ├── Product_sold.php         # Modèle des produits en promotion
│       └── User.php                 # Modèle utilisateur enrichi (points, carte fidélité, rôles)
├── database/
│   └── migrations/                  # Schémas et tables de base de données
├── public/                          # Fichiers publics (assets, CSS, JS, images produits)
├── resources/
│   └── views/
│       ├── admin/                   # Vues Blade de l'administration
│       ├── home/                    # Vues Blade de la boutique publique
│       └── layouts/                 # Modèles et squelettes Jetstream / Blade
├── routes/
│   └── web.php                      # Définition des routes de l'application
├── .env.example                     # Modèle des variables d'environnement
├── .gitignore                       # Fichiers ignorés par Git
└── composer.json                    # Dépendances PHP
```

---

## 🚀 Guide d'Installation

### 1. Prérequis

Assurez-vous que les éléments suivants sont installés sur votre machine :
- **PHP** >= 8.0 (avec extensions PDO, OpenSSL, Mbstring, Tokenizer, XML, Ctype, JSON, BCMath)
- **Composer** (gestionnaire de paquets PHP)
- **Node.js** (version 16+ recommandée) & **NPM**
- Un serveur de base de données **MySQL** (ex: via XAMPP, WampServer ou Docker)

---

### 2. Cloner le Projet

```bash
git clone https://github.com/votre-nom-utilisateur/nom-du-repo.git
cd nom-du-repo
```

---

### 3. Installation des Dépendances

Installez les dépendances PHP et JavaScript :

```bash
# Dépendances PHP
composer install

# Dépendances Front-End (Node.js)
npm install
```

---

### 4. Configuration de l'Environnement

Dupliquez le fichier `.env.example` en `.env` :

```bash
# Sur Windows PowerShell
copy .env.example .env

# Ou sur Bash / Linux / macOS
cp .env.example .env
```

Générez la clé unique de l'application :

```bash
php artisan key:generate
```

Ouvrez le fichier `.env` et adaptez les paramètres de connexion à votre base de données :

```dotenv
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ecom
DB_USERNAME=root
DB_PASSWORD=
```

---

### 5. Base de Données & Migrations

Créez une base de données MySQL nommée `ecom` (ou le nom spécifié dans `.env`), puis exécutez les migrations :

```bash
php artisan migrate
```

Liez le répertoire de stockage public pour l'accès aux images téléversées :

```bash
php artisan storage:link
```

---

### 6. Compilation des Assets & Lancement

Dans un premier terminal, compilez les ressources front-end :

```bash
npm run dev
# Ou pour la production : npm run build
```

Dans un second terminal, démarrez le serveur local Laravel :

```bash
php artisan serve
```

L'application est désormais accessible à l'adresse : **[http://127.0.0.1:8000](http://127.0.0.1:8000)**

---

## 👥 Comptes & Rôles Utilisateurs

L'application distingue deux types d'utilisateurs via le champ `usertype` de la table `users` :

| Rôle | `usertype` | Accès & Privilèges |
| :--- | :---: | :--- |
| **Client / Utilisateur** | `0` *(par défaut)* | Accès à la boutique, historique de points, carte de fidélité, envoi de messages. |
| **Administrateur** | `1` | Accès complet au tableau de bord `/redirect` ou `/view_product`, gestion des stocks, clients, catégories et promotions. |

> 💡 **Astuce** : Pour promouvoir un utilisateur au rôle d'administrateur, modifiez directement la colonne `usertype` à `1` dans la table `users` de votre base de données.

---

## 📄 Licence

Ce projet est sous licence [MIT](LICENSE).
