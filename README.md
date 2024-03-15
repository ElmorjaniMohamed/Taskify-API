# Taskify - Task Management API

Taskify is a RESTful API developed with Laravel for efficient management of individual tasks. This API provides secure authentication, task management features, and comprehensive documentation for easy use by developers.

## Features

- **Authentication with Laravel Sanctum**: Secure API access with Laravel Sanctum for reliable user authentication.
- **Task Management**:
  - Create, modify, and delete individual tasks.
  - Mark a task as completed or incomplete.
- **Access Policies**: Restrict access to tasks for each user to ensure data confidentiality.
- **Unit Testing**: Comprehensive unit tests ensure the reliability and stability of the API.
- **Postman Testing**: Perform integration tests on Postman to validate the API's functionality in various scenarios.
- **API Documentation**: Clear and comprehensive documentation of the API, describing each endpoint, its parameters, and expected responses.

## Installation

1. Clone this repository to your local machine.
2. Install PHP dependencies with Composer:

   ```bash
   composer install
   ```

3. Copy the `.env.example` file to create a `.env` file:

   ```bash
   cp .env.example .env
   ```

4. Generate a Laravel application key:

   ```bash
   php artisan key:generate
   ```

5. Configure your database in the `.env` file:

   ```plaintext
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database_name
   DB_USERNAME=your_database_user
   DB_PASSWORD=your_database_password
   ```

6. Run migrations to create the database tables:

   ```bash
   php artisan migrate
   ```

7. Start the development server:

   ```bash
   php artisan serve
   ```


