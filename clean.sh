#!/bin/bash

sudo chown -Rv $USER:$USER app
rm -rf app/vendor
rm -rf app/node_modules
rm -rf app/composer.lock
rm -rf app/package-lock.json
docker exec -it cadastro_usuarios_db mysql -uroot -pstrongpassword -e "DROP DATABASE cadastro_usuarios;"
rm app/.env
