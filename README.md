
# SheRise Plateforme d'Autonomisation des Femmes Entrepreneures

## Description

**SheRise** est une plateforme digitale innovante construite avec **PHP et Laravel** pour accompagner les femmes entrepreneures
dans le développement de leurs activités. Elle offre un écosystème complet incluant la vente en ligne, la formation, le financement et la mise en réseau.

## Objectifs

- ✅ Faciliter la vente de produits et services
- ✅ Offrir des formations entrepreneuriales de qualité
- ✅ Créer une communauté dynamique de femmes entrepreneurs
- ✅ Aider à accéder à des financements et opportunités d'investissement

## Utilisateurs

| Profil | Rôle |
|--------|------|
| **Entrepreneures** | Vendre, gérer et développer leur activité |
| **Clients** | Acheter produits et services |
| **Mentors/Formateurs** | Proposer et animer des formations |
| **Administrateurs** | Gérer et modérer la plateforme |

## Fonctionnalités Principales

### Marketplace
- Publication et gestion de produits/services
- Gestion complète des commandes
- Paiement Mobile Money intégré
- Système de promotions et codes promo
- Galerie multi-média

### Formations
- Accès à des cours en ligne et vidéos
- Webinaires en direct avec experts
- Certificats de completion (selon abonnement)
- Ressources téléchargeables
- Suivi de progression

### Financement
- Accès à des opportunités de financement
- Dépôt et suivi de projets
- Mise en relation avec investisseurs
- Ressources et outils de business plan
- Accompagnement financier personnalisé

### Communauté
- Forum d'échange et d'entraide
- Réseautage entre entrepreneures
- Système de mentorat structuré
- Événements et ateliers
- Partage d'expériences et bonnes pratiques

### Gestion du Business
- Tableau de bord analytique complet
- Suivi en temps réel des ventes
- Statistiques et rapports détaillés
- Gestion des clients et contacts
- Export de données

## Offres d'Abonnement

### Plan Starter
- **Produits** : 5 max
- **Formations** : 2 offertes
- **Paiement** : Mobile Money
- **Communauté** : Accès complet
- **Support** : Email

### Plan Pro
- **Produits** : Illimité
- **Formations** : Illimité
- **Fonctionnalités** : Codes promo, Webinaires
- **Mentorat** : 2 sessions/mois
- **Support** : Prioritaire

### Plan Business
- **Produits** : Illimité
- **Multi-boutiques** : 3 boutiques
- **Formations** : Illimité avec certificats
- **Mentorat** : Illimité
- **Financement** : Accompagnement dédié
- **Manager** : Dédié
- **Collaborateurs** : 3 comptes

## Stack Technologique

### Backend
- **Framework** : Laravel (dernière version)
- **PHP** : 8.1+
- **API** : RESTful API

### Frontend
- **Desktop** : React.js / Next.js
- **Mobile** : Flutter

### Base de Données
- **SGBD** : MySQL 8.0+
- **ORM** : Eloquent (Laravel)
- **Cache** : Redis (optionnel)

### Hébergement & Infrastructure
- **Cloud** : AWS / DigitalOcean / OVH
- **CDN** : CloudFlare
- **Paiement** : Intégration Mobile Money

## Architecture

```
SheRise Architecture
│
├── Frontend (React.js / Next.js)
│   ├── Pages & Components
│   ├── State Management
│   └── UI/UX
│
├── Mobile (Flutter)
│   ├── iOS
│   └── Android
│
├── Backend (Laravel PHP)
│   ├── Routes (API)
│   ├── Controllers
│   ├── Models (Eloquent)
│   ├── Migrations
│   ├── Services
│   ├── Middleware
│   └── Authentification
│
├── Database (MySQL)
│   ├── Users
│   ├── Products
│   ├── Orders
│   ├── Formations
│   ├── Transactions
│   └── Community
│
└── Infrastructure (AWS/DigitalOcean/OVH)
    ├── Serveurs
    ├── Storage
    ├── CDN
    └── Monitoring
```

## Structure du Projet Laravel

```
sherise-laravel/
├── app/
│   ├── Models/
│   │   ├── User.php
│   │   ├── Product.php
│   │   ├── Order.php
│   │   ├── Formation.php
│   │   └── ...
│   ├── Http/
│   │   ├── Controllers/
│   │   ├── Requests/
│   │   └── Middleware/
│   ├── Services/
│   └── Jobs/
├── database/
│   ├── migrations/
│   ├── seeders/
│   └── factories/
├── routes/
│   ├── api.php
│   └── web.php
├── resources/
├── config/
├── tests/
└── ...
```

## Sécurité

- Authentification JWT/Token Bearer
- Validation des données côté serveur
- Protection CSRF
- Chiffrement des données sensibles
- Rate limiting
- Logs d'audit complets

## Installation & Setup

### Prérequis
- PHP 8.1+
- Composer
- MySQL 8.0+
- Node.js (pour le frontend)

### Installation Backend
```bash
# Cloner le repository
git clone https://github.com/Djennhya/sherise.git
cd sherise

# Installation des dépendances PHP
composer install

# Configuration
cp .env.example .env
php artisan key:generate

# Base de données
php artisan migrate --seed

# Démarrer le serveur
php artisan serve
```

## Contribution

Les contributions sont bienvenues ! Consultez notre guide de contribution.

## Licence

Ce projet est sous licence propriétaire.

## Contact & Support

Pour toute question ou support : **support@sherise.com**

---

**SheRise** - Empowering Women Entrepreneurs | Plateforme d'Autonomisation des Femmes Entrepreneures 🚀
