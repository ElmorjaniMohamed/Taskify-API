
# Taskify - API de Gestion des Tâches

Taskify est une API RESTful développée avec Laravel pour la gestion efficace des tâches individuelles. Cette API offre des fonctionnalités d'authentification sécurisée, de gestion des tâches et de documentation complète pour une utilisation aisée par les développeurs.

## Fonctionnalités

- **Authentification avec Laravel Sanctum** : Sécurisez l'accès à l'API avec Laravel Sanctum pour une authentification fiable des utilisateurs.
- **Gestion des Tâches** :
  - Créer, modifier et supprimer des tâches individuelles.
  - Marquer une tâche comme complétée ou incomplète.
- **Politiques d'Accès** : Limitez l'accès aux tâches à chaque utilisateur pour assurer la confidentialité des données.
- **Tests Unitaires** : Des tests unitaires complets garantissent la fiabilité et la stabilité de l'API.
- **Tests sur Postman** : Réalisez des tests d'intégration sur Postman pour valider le fonctionnement de l'API dans différents scénarios.
- **Documentation de l'API** : Une documentation claire et complète de l'API, décrivant chaque endpoint, ses paramètres et ses réponses attendues.

## Installation

1. Clonez ce référentiel sur votre machine locale.
2. Installez les dépendances PHP avec Composer :

   ```bash
   composer install
   ```

3. Copiez le fichier `.env.example` pour créer un fichier `.env` :

   ```bash
   cp .env.example .env
   ```

4. Générez une clé d'application Laravel :

   ```bash
   php artisan key:generate
   ```

5. Configurez votre base de données dans le fichier `.env` :

   ```plaintext
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database_name
   DB_USERNAME=your_database_user
   DB_PASSWORD=your_database_password
   ```

6. Exécutez les migrations pour créer les tables de base de données :

   ```bash
   php artisan migrate
   ```

7. Lancez le serveur de développement :

   ```bash
   php artisan serve
   ```

8. L'API sera accessible à l'adresse `http://localhost:8000`.

## Utilisation

Consultez la documentation de l'API pour découvrir les endpoints disponibles et leurs fonctionnalités.
