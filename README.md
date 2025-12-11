# E-CCC
A web-based enrollment and academic records management system.

## Setup Instructions

1. Clone the repo.
2. Remove `composer.lock`.
3. In `php.ini`, enable the following by removing the semicolon:
   - extension=fileinfo
   - extension=intl
4. Install dependencies:
   composer install
5. Start XAMPP (Apache + MySQL).
6. Run the app:
   php artisan serve
7. Copy `.env.example`, paste it, and rename to `.env`.
8. Update your `.env` database settings:

   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=sms_ccc
   DB_USERNAME=root
   DB_PASSWORD=

9. Install frontend packages:
   npm install
10. Build assets:
    npm run build
11. Run dev:
    npm run dev
12. Run Laravel again if needed:
    php artisan serve

## Troubleshooting Commands

php artisan config:clear
php artisan cache:clear
php artisan config:cache
php artisan session:table
php artisan migrate

## PHP Version

8.3.13
