## Prerequisites
1. XAMPP (PHP development environment)
2. Composer (Dependency manager for PHP)
3. Laravel (PHP development framework)

## Setting up a new project
To create new *Laravel* project, run `composer create-project laravel/laravel ProjectName`.

## Setup of this repository
1. Clone the repository.
2. Start `MySQL` server from XAMPP.
3. In MySQL console, run `create database db_name` to create new database.
4. Run `php artisan migrate` to setup the database.
5. Run `php artisan migrate:status` to check status of each migration file.
