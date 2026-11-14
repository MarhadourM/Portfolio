# Portfolio

Portfolio de **Matthieu Marhadour**, étudiant en BUT Informatique.

Ce site présente mon parcours, mes projets et les compétences du référentiel du BUT Informatique que j'ai validées au fil des semestres, avec pour chacune des preuves concrètes tirées de mes projets.

## Contenu du site

- **Accueil** : présentation, qualités personnelles, analyse de profil (points à progresser et actions mises en place) et accès au CV
- **Compétences** : les 6 compétences du BUT Informatique, détaillées par semestre (S3 → S6) et par apprentissage critique, illustrées de captures (architecture MVC, MLD, sécurité, déploiement, Git…)
- **Projets** : mes réalisations, dont
  - [EcoGestUM](https://github.com/MarhadourM/EcoGestUM) : application web de gestion du recyclage pour l'Université du Mans
  - CrepeRiz : application réalisée pour pratiquer les méthodes agiles
  - Machine Learning : apprentissage du ML pour un logiciel de maintenance prévisionnelle (programme *Les Entrep'*)
- **Parcours** : formation et expériences
- **Contact**

## Stack technique

- **PHP** (routeur simple dans `index.php`, templates header/footer)
- **HTML / CSS / JavaScript** (sans framework)
- Apache (`.htaccess` pour la réécriture des URL)

## Structure

```
├── index.php        # Routeur : ?page=home|competences|projets|parcours|contact
├── templates/       # header.php, footer.php
├── pages/           # Pages du site
│   └── semestres/   # Compétences détaillées par semestre (S3 à S6)
├── css/  js/
└── assets/          # Images, CV, référentiel BUT
```

## Lancer en local

Avec PHP installé :

```bash
git clone https://github.com/MarhadourM/Portfolio.git
cd Portfolio
php -S localhost:8000
```

Puis ouvrir http://localhost:8000.
