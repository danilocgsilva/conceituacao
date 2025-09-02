#!/bin/bash

docker exec -it cadastro_usuarios composer install --working-dir=/app/
docker exec -it cadastro_usuarios npm install --prefix /app/
docker exec -it cadastro_usuarios cp /app/.env.example /app/.env
docker exec -it cadastro_usuarios /app/artisan key:generate
docker exec -it cadastro_usuarios /app/artisan migrate
docker exec -it cadastro_usuarios /app/artisan db:seed
