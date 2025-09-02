#!/bin/bash

docker compose up -d --build
echo Await 30 seconds to let database startup
sleep 30
docker exec -it cadastro_usuarios_db mysql -uroot -pstrongpassword -e "CREATE DATABASE IF NOT EXISTS cadastro_usuarios;"
docker exec -it cadastro_usuarios composer install --working-dir=/app/
docker exec -it cadastro_usuarios npm install --prefix /app/
docker exec -it cadastro_usuarios cp /app/.env.example /app/.env
docker exec -it cadastro_usuarios /app/artisan key:generate
docker exec -it cadastro_usuarios /app/artisan migrate
docker exec -it cadastro_usuarios /app/artisan db:seed
