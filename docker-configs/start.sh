#!/bin/bash

cd /app
composer install --working-dir=/app/
npm install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan db:seed
composer dev