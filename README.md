# viajemos.com
Test Cindy Sanchez

El proyecto esta elaborado en Symfony 5.2  con PHP 7.2 

Una vez descargado el proyecto es necesario correr en la consola
- composer install
- php bin/console doctrine:database:create (para crear la bd)
- php bin/console doctrine:schema:update --force (para crear tablas y  columnas)
- php bin/console doctrine:fixtures:load (para crear data en las tablas)
- yarn install

para correr el proyecto
- symfony server:start
