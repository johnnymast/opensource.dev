# opensource.dev

```bash
composer install
cp .env.example .env // Fill in required info see Github API + 
php artisan voyager:install
php artisan storage:link
php artisan migrate

php artisan db:seed --class=ProgrammingLanguagesTableSeeder
php artisan db:seed --class=VoyagerPagesSeeder
php artisan db:seed --class=QuoteTableSeeder
php artisan voyager:admin your@email.com --create


```

## Install Github API

Create a Github Application [here](https://github.com/settings/developers) (logged in) and fill the information in .env.


## Invisible Recaptcha

Create a set of keys [here](https://www.google.com/recaptcha/) and put this information in your env file.