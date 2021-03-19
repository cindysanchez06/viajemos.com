# viajemos.com
Test Cindy Sanchez

El proyecto esta elaborado en Symfony 5.2  con PHP 7.2 y node 12.14.1

Una vez descargado el proyecto es necesario correr en la consola
- composer install
- php bin/console doctrine:database:create (para crear la bd)
- php bin/console doctrine:schema:update --force (para crear tablas y  columnas)
- php bin/console doctrine:fixtures:load (para crear data en las tablas)
- yarn install --force o npm install --force
- yarn encore dev-server o npm run dev

para correr el proyecto es necesario instalar symfony https://symfony.com/download
- luego, en la consola correr: symfony server:start
