# Cadastro de usuários

Aplicação web para gerenciamento de usuários de um sistema e seus perfis.

## Para rodar o projeto

Observação: antes de rodar o projeto, certifique-se de que as portas 8000 (aplicação), 5173 (servidor Vite) e 3306 (banco de dados) estejam livres.

```sh
chmod +x ./build.sh
chmod +x ./start.sh
./build.sh
./start.sh
```

Acesse a aplicação no endereço: http://localhost:8000, ou http://0.0.0.0:8000, ou http://127.0.0.1:8000.

## Adicionando primeiros usuários

Depois que a aplicação é iniciada com `./start.sh`, já é possível acessar a aplicação, mas ainda não é possível se logar, por não existir nenhum usuário.

O usuário primeiro, administrador, pode ser adicionado com o `seed` do banco de dados. Pode executar o seed do banco de dados:

```
docker exec -it cadastro_usuarios php artisan db:seed
```
ou pode entrar no container e executar:
```
php artisan db:seed
```



## clean.sh

Limpa os arquivos criados pela compilação da aplicacão, removendo `vendor`, `node_modules`, `package-lock.json` e `composer.lock` e remove o banco de dados.

