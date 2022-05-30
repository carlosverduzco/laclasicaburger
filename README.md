## Nombre del proyecto
laclasicaburger

## Descripción del objetivo del proyecto
El objetivo principal del proyecto es el de desarrollar una página web para el restaurante de hamburguesas la clásica burger, en la que los clientes habituales puedan acceder de forma rápida al menú y a su vez atraer nuevos clientes con un diseño muy característico del restaurante. 

El objetivo secundario es el que la página web se convierta en una aplicación web que también sirva para que los clientes hagan sus pedidos a domicilio desde ella, obtengan promociones exclusivas y se sientan más identificados con el restaurante.

## Integrante
Carlos Ernesto Verduzco González

##Enlace al video demostración 
https://youtu.be/bKDei15Mn2A

## Especificaciones
- PHP 8.0.6
- Laravel 8
- Composer 2.3.5
## Instrucciones de instalación con Laragon
1. Clonamos el repositorio "git clone https://github.com/Catoras/laclasicaburger.git"
2. Copiar el archivo de env "cp .env.example .env"
3. Instalamos las dependecias de laravel con "composer install"
4. Generamos la key de la app "php artisan key:generate"
5. Actualizamos el archivo .env con la info de la conexion a la base de datos
6. Una vez lista la base de datos, corremos las migraciones "php artisan migrate"
7. Sembramos algunos datos para probar la app "php artisan db:seed"
	- Crea un usuario de tipo administrador con las credenciales:
	  - Correo: carlos@test.com
	  - Contraseña: laclasicaburgersafepassword
	- Crea 6 categorias para utilizar en el CRUD de productos.
	- Crea 20 productos hecho con faker.
	- Crea 4 agregados  para utilizar en el CRUD de productos.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
