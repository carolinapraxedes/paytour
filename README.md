## Comandos para rodar pelo Docker:

- ```docker-compose down``` - para os containers
- ```docker-compose build``` - build da imagem
- ```docker-compose up -d``` - para subir os containers
- ```mysql -u root -p``` - comando para acessar o MySQL dentro do bash

## Passos para rodar localmente:

1. Conecte ao banco desejado.
2. Execute ```composer install``` ou ```composer update```.
3. Execute ```php artisan migrate```.
4. Execute ```php artisan serve```.

## Comando para rodar os testes:

```./vendor/bin/phpunit tests/Feature/ResumeControllerTest.php
