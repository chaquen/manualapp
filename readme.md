<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>


## Acerca de ManualApp
ManualApp es una aplicación desarrollada con [Laravel 5.5](https://laravel.com/docs/5.5), la cual tiene como finalidad crear manuales de usuario de manera mas sencilla y almacenados en una base de datos.


Pasos para su instalación localmente.

## Paso 1. Clonar repositorio
  
    git clone https://github.com/chaquen/manualapp.git

## Paso 2. Intalar paquetes
  
    composer install

## Paso 3. Crear archivo .env 

## Paso 4. Crear key del proyecto
   
    php artisan key:generate

## Paso 5. Dar permisos a las carpetas storage y storage/logs (solo linux)
	
    sudo chmod 777 -R storage	

    cd storage	
	
    sudo chmod 777 -R logs

    cd ..	

## Paso 6. Cree la base de datos

## Paso 7. Ejecuta las migraciones
	
    php artisan migrate --seed

   

	
