#!/bin/bash

echo "=============================================="
echo "|  script by https://github.com/fauzymadani  |"
echo "============================================="
echo "Make sure you're in the right direcry..."
cd ~ || exit

echo "Cloning from github..."
git clone https://github.com/username/repository.git my-forum-app
cd my-forum-app || exit

echo "Running composer install..."
composer install

php artisan vendor:publish

php artisan migrate

php artisan forum:preset-install livewire-tailwind

npm install @melloware/coloris alpinejs date-fns laravel-echo nested-sort tailwindcss

npm run dev

composer require livewire/livewire

php artisan serve

echo "Done, you can view http://127.0.0.1:8000"

