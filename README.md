# Repot to test and reproducte on export bug

## Steps to reproduce

1. Clone the repo
2. Run `composer install`
3. Copie `.env.example` to `.env` and configure the database variables
4. Run `php artisan migrate --seed`
5. Run `php artisan serve`
6. Go to http://127.0.0.1:8000/admin and login with `test@example.com` and `password`
7. Go to http://127.0.0.1:8000/admin/users and clique the "export" button
8. Run `php artisan queue:work`
9. The job in the queue fail that is the bug

It happens when in the ressource you hase a request base on the `auth()->user()` and a filter with a relation
