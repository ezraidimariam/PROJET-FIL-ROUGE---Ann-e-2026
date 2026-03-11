# 🚀 DEV↑UP – Level up your dev life

![Status](https://img.shields.io/badge/Status-In--Development-orange)
![Version](https://img.shields.io/badge/Version-1.0.0-blue)
![Stack](https://img.shields.io/badge/Stack-Laravel--React-red)

**DEV↑UP** est une plateforme web conçue pour transformer l'apprentissage de la programmation en une expérience ludique et productive. Elle aide les étudiants et les développeurs débutants à vaincre la procrastination grâce à la gamification et à une gestion rigoureuse du temps.

---

## 🎯 Le Problème
Beaucoup d'apprenants abandonnent le code à cause de :
* 📉 Manque de motivation sur le long terme.
* ⏳ Mauvaise gestion des sessions de travail.
* 📋 Absence de vision claire sur leur progression.

## ✨ La Solution DEV↑UP
Une application interactive basée sur 4 piliers :
1. **Focus Sessions :** Un timer intégré pour alterner travail profond et pauses.
2. **Gamification :** Gagnez des points, montez de niveau et dominez le classement.
3. **Challenges :** Des micro-défis quotidiens pour garder le rythme.
4. **Statistiques :** Visualisez vos efforts avec des graphiques précis.

---

## 🛠️ Stack Technologique

| Composant | Technologie |
| :--- | :--- |
| **Frontend** | React.js, Tailwind CSS, JavaScript (ES6+) |
| **Backend** | PHP 8.x, Laravel 11 (Architecture MVC) |
| **Base de données** | PostgreSQL |
| **Design** | Figma |
| **Outils** | Git, GitHub, VS Code |

---

## 🚀 Fonctionnalités Clés

### 👤 Pour l'Apprenant
* **Tableau de bord personnalisé :** Suivi des points et du niveau actuel.
* **Système de Focus :** Planification et lancement de sessions de travail (Pomodoro style).
* **Quêtes quotidiennes :** Validation de challenges pour booster son score.
* **Classement (Leaderboard) :** Comparez vos performances avec la communauté.

### ⚙️ Pour l'Administrateur
* **Gestion des utilisateurs :** Modération et suivi des comptes.
* **Content Management :** Création, modification et suppression des challenges.
* **Insights :** Statistiques globales sur l'utilisation de la plateforme.

---

## 📦 Installation & Configuration

1. **Cloner le projet**
   ```bash
   git clone [https://github.com/ezraidimariam/PROJET-FIL-ROUGE---Ann-e-2026.git]
   cd dev-up
2. **Configuration Backend (Laravel)**
composer install
cp .env.example .env # Configurez votre DB PostgreSQL ici
php artisan key:generate
php artisan migrate --seed
php artisan serve

1. **Configuration Frontend (React)**
npm install
npm start

📊 Modèle de Données (Aperçu)
Le projet s'appuie sur une structure relationnelle optimisée :

Users : Profils, XP, Niveaux.

Challenges : Titre, difficulté, récompenses.

Sessions : Historique du temps de focus.

User_Challenges : Suivi des succès individuels.

💡 Bonus & Évolutions (Roadmap)
[ ] AI Coach : Assistant intelligent pour la motivation.

[ ] Badges & Streaks : Récompenses pour la régularité.

[ ] Real-time Chat : Discussion instantanée via WebSockets.

👩‍💻 Réalisation
Réalisatrice : Mariam Ezraidi

Encadrant : Mr Achraf Chaoub

Année de formation : 2025 / 2026

⭐ Si ce projet vous aide à progresser, n'hésitez pas à laisser une étoile sur le dépôt !