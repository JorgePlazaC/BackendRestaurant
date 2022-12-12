# BackendRestaurant

Requisitos:
-Node.js
-Xampp
-composer

Pasos:
- Acceder a la carpeta del backend mediante CMD
- Ejecutar "composer install"
- Crear base de datos desde mysql
- Verificar que exista el archivo .env en la carpeta de laravel
- Ejecutar "php artisan key:generate"
- Acceder al archivo .env y en el parametro "DB_DATABASE", colocar el nombre de la base de datos que se utilizará
- Ejecutar "php artisan migrate:fresh"
- Ejecutar "php artisan db:seed"
- Ejecutar "php artisan serve"
