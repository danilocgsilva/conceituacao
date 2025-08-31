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

Acesse a aplicação no endereço: http://localhost:8000.

## clean.sh

Limpa os arquivos criados pela compilação da aplicão, removendo `vendor`, `node_modules`, `package-lock.json` e `composer.lock`.
