<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Instrucciones para levantar la aplicación

- Clonar el proyecto, de la rama con el nombre "deynarMamani".
- Ejecutar "composer install" desde el CMD, en la dirección del proyecto clonado.
- Crear un archivo con el nombre ".env" en la raiz del proyecto.
- Crear una base de datos y asignar las credenciales de la misma en el archivo .env
- Ejecutar en el CMD en la dirección del proyecto el siguiente comando "php artisan key:generate"
- Ejecutar en el CMD en la dirección del proyecto el siguiente comando "php artisan jwt:secret"
- Ejecutar en el CMD en la dirección del proyecto el siguiente comando "php artisan migrate"

## Instrucciones para el uso de las API`s

- El campo C.I del registro de usuario, se toma como contraseña.
- Las ruta login y de registro de usuario, son las unicas rutas que no necesitan adjuntar el los headers de la peticición la llave "Authorization".
- Las rutas que si necesitan de autentificación, deben contener en los headers de la petición la llave "Authorization", con el valor de "Bearer " seguido del token generado al iniciar sesión.
