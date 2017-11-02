# opensource.dev

```bash
composer install
php artisan voyager:install
php artisan storage:link
php artisan migrate

php artisan db:seed --class=ProgrammingLanguagesTableSeeder
php artisan db:seed --class=QuoteTableSeeder
php artisan voyager:admin your@email.com --create


```