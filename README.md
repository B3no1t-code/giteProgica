# giteProgica
---
### Exercice
---
- Installer un projet Symfony
- Mettre en place la première page (Controller/Route)
- Mettre en place la base de donnée (Config)
- Créer une entité Gite
- Ajouter un Gite via l'apppication (EntityManager)
- Créer un Dashboard pour l'administrateur
- Mettre en place un CRUD pour les Gites dans la partie Admin
- Mettre en place les contraintes de Validation pour les formulaires
- Mettre en place un système de pagination pour tous les Gites
- Mettre en place un formulaire de recherche de Gite avec la possibilité de rechercher
     - Par surface min
     - Par Chambre max
     - Si les animaux sont accepté 
     - Par Ville
     - Par équipement 
---
### Istallation
---
-Git clone https://github.com/B3no1t-code/giteProgica.git
-composer update
-npm install
-Vérifier fichier .env faire les modifs nécessaire (DATABASE_URL)
-php bin/console doctrine:database:create
-php bin/console doctrine:migration:migrate
-php bin/console doctrine:fixtures:load

### Lancer le site
-php -S localhost:8000 -t public
-npm run dev-server

### Lancer le server SMTP
- maildev
