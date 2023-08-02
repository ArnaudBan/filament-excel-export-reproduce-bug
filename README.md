# Repo to test and reproduce an export bug

## Steps to reproduce

1. Clone the repo
2. Run `composer install`
3. Copy `.env.example` to `.env` and configure the database variables
4. Run `php artisan migrate --seed`
5. Run `php artisan key:generate`
6. Run `php artisan serve`
7. Go to http://127.0.0.1:8000/admin and login with `test@example.com` and `password`
8. Go to http://127.0.0.1:8000/admin/users and click the "export" button
9. Run `php artisan queue:work`
10. The job in the queue fails <-- that is the bug

It happens when you have in the ressource a request based on the `auth()->user()` and a filter with a relation
