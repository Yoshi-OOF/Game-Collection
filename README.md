# Collection de Jeux Vidéo

Une application pour gérer et suivre votre collection de jeux vidéo.

## Structure du Projet

Le projet est organisé en répertoires suivants :

- `Controllers/` - Contient les scripts PHP gérant les interactions utilisateur et la logique métier.
- `Models/` - Contient les classes PHP interagissant avec la base de données.
- `Views/` - Contient les fichiers HTML et PHP pour l'interface utilisateur.
- `Css/` - Contient les feuilles de style CSS pour styliser l'application.
- `Classes/` - Contient des classes PHP supplémentaires utilisées dans tout le projet.
- `Assets/` - Contient les images et autres ressources utilisées dans l'application.
- `vendor/` - Contient les bibliothèques tierces installées via Composer.

## Schéma de la Base de Données

L'application utilise une base de données MySQL nommée `gamecollection` avec les tables suivantes :

- `COMPTE` - Contient les informations des comptes utilisateurs.
- `JEU` - Contient les informations des jeux.
- `PLATEFORME` - Contient les informations sur les plateformes.
- `POSSEDE` - Lie les utilisateurs aux jeux qu'ils possèdent.
- `COMPATIBLE` - Lie les jeux aux plateformes avec lesquelles ils sont COMPATIBLEs.

## Formatage des Données

Les données sont échangées entre l'application et la base de données en utilisant PHP Data Objects (PDO) pour des interactions sécurisées et efficaces. Les entrées utilisateur sont nettoyées et validées pour prévenir les injections SQL et autres problèmes de sécurité.

## Connexion à la Base de Données

La connexion à la base de données est gérée par une classe `DataConstructor`, qui établit la connexion via PDO. Les identifiants de connexion sont stockés de manière sécurisée, et des variables d'environnement peuvent être utilisées pour protéger les informations sensibles hors du code source.

## Mise en Route

Pour configurer le projet sur votre machine locale :

1. Clonez le dépôt dans le répertoire de votre serveur local (par exemple, `c:/xampp/htdocs/`).
2. Importez le fichier `db.sql` dans votre base de données MySQL pour créer les tables requises.
3. Configurez les paramètres de connexion à la base de données dans la classe `DataConstructor`.
4. Installez les dépendances en utilisant Composer :
    ```bash
    composer install
    ```
5. Démarrez le serveur Apache et rendez-vous sur `http://localhost../index.php` pour utiliser l'application.

## Dépendances

Le projet repose sur les bibliothèques PHP suivantes :

- `vlucas/phpdotenv` - Charge les variables d'environnement à partir d'un fichier `.env`.
- `graham-campbell/result-type` - Fournit une implémentation des types de résultats.

## Licence

Ce projet est sous licence MIT.
