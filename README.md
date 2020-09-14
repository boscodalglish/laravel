## Deployment Guide/Instructions

Install xampp and start Apache SQLite and Create .env file using .env.example

- cd laravel
- composer install
- npm install
- touch database/database.sqlite
- php artisan migrate
- php artisan key:generate

## Start Server

- php artisan serve


## Optional step to Install Bootstrap // ONLY IF SOME ERROR

- composer require laravel/ui:^2.4
- php artisan ui bootstrap
- npm install
- npm run dev



