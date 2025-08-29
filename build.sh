#!/bin/bash

docker exec -it cadastro_usuarios composer install --working-dir=/app/
docker exec -it cadastro_usuarios npm install --prefix /app/


