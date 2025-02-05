# Laravel Forum Starter Pack
this is a starterpack for a forum website made with laravel 11. it's include a basic functionality like login, register, navbar, etc.

## Dependencies
- [laravel-forum by TeamTeaTime](https://github.com/Team-Tea-Time/laravel-forum)
- [breeze](https://github.com/laravel/breeze)
- [livewire](https://github.com/livewire/livewire)

## Installation
```bash
git clone https://github.com/fauzymadani/laravel-forum-starterkits.git
cd laravel-forum-starterkits
cp .env.example .env
composer update # run this if there's an error
composer install
php artisan key:generate
npm install @melloware/coloris alpinejs date-fns laravel-echo nested-sort tailwindcss
php artisan forum:preset-install blade-tailwind
php artisan migrate
npm install
```
