<p align="center"><img src="https://raw.githubusercontent.com/laravel/breeze/1.x/art/logo.svg" alt="Logo Laravel Breeze"></p>

## Usage

```bash
git clone https://github.com/mariio46/breeze-starter.git

cd breeze-starter

composer install

cp .env.example .env

php artisan key:generate

npm install && npm run build

php artisan migrate

php artisan serve
```

> This project using Laravel `v10.10` and Laravel Breeze `v1.24.1`

### Laravel Breeze

This project has come with some features like:

-   Authentication
-   User Profile (Name, Email)
-   User Avatar using [Gravatar](gravatar.com)
-   User Change Password
-   Use Icons from [ryangjchandler](https://github.com/ryangjchandler/blade-tabler-icons)

### Tips

If you feel this application run so lagging in development its because the icons

here some tips

```bash
php artisan icons:cache
```

for details go to [Blade-Icons](https://github.com/blade-ui-kit/blade-icons#caching)
