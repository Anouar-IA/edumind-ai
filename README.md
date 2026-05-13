<![CDATA[<div align="center">

# 🧠 EduMind AI

### Plateforme Intelligente de Gestion Pédagogique

[![PHP](https://img.shields.io/badge/PHP-8.0+-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://php.net)
[![Laravel](https://img.shields.io/badge/Laravel-10.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)](https://laravel.com)
[![Bootstrap](https://img.shields.io/badge/Bootstrap-5.3-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white)](https://getbootstrap.com)
[![AI Powered](https://img.shields.io/badge/AI-Powered-00D4AA?style=for-the-badge&logo=openai&logoColor=white)](#)
[![License](https://img.shields.io/badge/License-MIT-yellow?style=for-the-badge)](LICENSE)

**Une plateforme éducative moderne propulsée par l'Intelligence Artificielle pour transformer l'expérience d'enseignement et d'apprentissage.**

[Démo en ligne](#) · [Documentation](#) · [Signaler un bug](../../issues)

---

</div>

## 📋 Table des matières

- [À propos](#-à-propos)
- [Fonctionnalités](#-fonctionnalités)
- [Technologies](#-technologies)
- [Installation](#-installation)
- [Configuration](#-configuration)
- [Utilisation](#-utilisation)
- [Architecture](#-architecture)
- [Captures d'écran](#-captures-décran)
- [Auteur](#-auteur)
- [Licence](#-licence)

---

## 🎯 À propos

**EduMind AI** est une solution complète de gestion pédagogique développée pour répondre aux besoins modernes de l'éducation. En intégrant l'Intelligence Artificielle au cœur de la plateforme, EduMind AI offre une expérience personnalisée pour chaque utilisateur — enseignants comme étudiants.

### Pourquoi EduMind AI ?

- 🎓 **Gestion simplifiée** — Gérez étudiants, cours et évaluations en un seul endroit
- 🤖 **IA intégrée** — Assistant intelligent, correction automatique, génération de quiz
- 📊 **Analytics avancés** — Visualisez les performances en temps réel
- 🔒 **Sécurisé** — Authentification robuste avec gestion des rôles
- 📱 **Responsive** — Interface adaptée à tous les écrans

---

## ✨ Fonctionnalités

### 🏠 Landing Page Premium
- Design moderne avec animations CSS3
- Présentation des fonctionnalités avec effets parallax
- Section témoignages et statistiques

### 🤖 Assistant IA (Chatbot)
- Chatbot intelligent intégré sur toutes les pages
- Réponses contextuelles sur les cours et exercices
- Suggestions personnalisées pour chaque étudiant

### 📊 Dashboard Analytique
- Tableau de bord interactif avec Chart.js
- Statistiques en temps réel (étudiants, cours, taux de réussite)
- Graphiques de performance et tendances

### 👨‍🎓 Gestion des Étudiants
- CRUD complet (Créer, Lire, Modifier, Supprimer)
- Profils détaillés avec historique académique
- Recherche et filtrage avancés

### 📚 Gestion des Cours
- Création et organisation de cours par catégorie
- Attribution de cours aux étudiants
- Suivi de progression

### 📝 Quiz IA
- Génération automatique de questions par l'IA
- Correction automatique intelligente
- Analyse des résultats et recommandations

### 🔐 Authentification
- Login/Register sécurisé
- Gestion des rôles (Admin, Professeur, Étudiant)
- Protection CSRF et middleware

---

## 🛠 Technologies

| Couche | Technologie | Version |
|--------|------------|---------|
| **Backend** | PHP | 8.0+ |
| **Framework** | Laravel | 10.x |
| **Frontend** | HTML5, CSS3 | - |
| **UI Framework** | Bootstrap | 5.3 |
| **JavaScript** | Vanilla JS, Chart.js | ES6+ |
| **Base de données** | MySQL | 8.0+ |
| **IA** | API OpenAI / NLP local | - |
| **Serveur** | Apache (XAMPP) | - |

---

## 🚀 Installation

### Prérequis
- PHP >= 8.0
- Composer
- MySQL >= 8.0
- XAMPP / Laragon / Serveur Apache
- Git

### Étapes d'installation

```bash
# 1. Cloner le repository
git clone https://github.com/nadir-mohamed-anouar/edumind-ai.git

# 2. Accéder au répertoire
cd edumind-ai

# 3. Installer les dépendances PHP
composer install

# 4. Copier le fichier d'environnement
cp .env.example .env

# 5. Générer la clé d'application
php artisan key:generate

# 6. Configurer la base de données dans .env
# DB_DATABASE=edumind_ai
# DB_USERNAME=root
# DB_PASSWORD=

# 7. Exécuter les migrations
php artisan migrate --seed

# 8. Lancer le serveur
php artisan serve
```

---

## ⚙️ Configuration

### Variables d'environnement (.env)

```env
APP_NAME="EduMind AI"
APP_ENV=local
APP_DEBUG=true
APP_URL=http://localhost:8000

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=edumind_ai
DB_USERNAME=root
DB_PASSWORD=

AI_API_KEY=your-api-key-here
AI_MODEL=gpt-3.5-turbo
```

---

## 🏗 Architecture

```
edumind-ai/
├── app/
│   ├── Http/Controllers/     # Contrôleurs MVC
│   ├── Models/               # Modèles Eloquent
│   └── Http/Middleware/       # Middleware
├── config/                    # Configuration
├── database/migrations/       # Migrations BDD
├── public/                    # Assets publics
│   ├── css/style.css         # Design system
│   ├── js/app.js             # Logique frontend
│   └── images/               # Images
├── resources/views/           # Templates Blade
│   ├── layouts/              # Layout principal
│   ├── students/             # Vues étudiants
│   ├── courses/              # Vues cours
│   ├── quiz/                 # Vues quiz IA
│   └── auth/                 # Authentification
├── routes/web.php            # Routes
├── .env.example              # Config exemple
├── composer.json             # Dépendances PHP
└── README.md                 # Documentation
```

---

## 👤 Auteur

<div align="center">

**Prof. NADIR MOHAMED ANOUAR**

Enseignant-Chercheur en Informatique

[![GitHub](https://img.shields.io/badge/GitHub-nadir--mohamed--anouar-181717?style=for-the-badge&logo=github)](https://github.com/nadir-mohamed-anouar)

</div>

---

## 📄 Licence

Ce projet est sous licence MIT. Voir le fichier [LICENSE](LICENSE) pour plus de détails.

---

<div align="center">

**⭐ Si ce projet vous plaît, n'hésitez pas à lui donner une étoile !**

Fait avec ❤️ par **Prof. NADIR MOHAMED ANOUAR**

</div>
]]>
