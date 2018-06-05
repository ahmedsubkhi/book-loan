# How to install

- `composer install`
- `cp .env.example .env`
- Create database and previleges in your mysql server.
- Edit .env file, then write the database credential to this.
- `php artisan key:generate`
- `php artisan migrate`
- `php artisan serve`