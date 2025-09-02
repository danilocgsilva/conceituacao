#!/bin/bash

docker compose up -d --build
echo Await 30 seconds to let database startup
sleep 30
docker exec -it cadastro_usuarios_db mysql -uroot -pstrongpassword -e "CREATE DATABASE IF NOT EXISTS cadastro_usuarios;"
docker exec -it cadastro_usuarios chmod +x /build.sh

