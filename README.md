<p align="center">
	<a href="https://laravel.com" target="_blank">
		<img src="https://grupo-giga.com/wp-content/uploads/logo.svg" alt="" height="75">
	</a>
</p>


## ¡GIGA IT petshop app!

Challenge para demostrar por qué deben contratarme =)

A continuación las instrucciones para poder instalar y correr el proyecto...

## Antes de comenzar...

Asegurate de tener instalado git, composer, mysql y php >= 8.2

## Paso 1: Clonar el repo

Abrir una consola y ejecutar

```
git clone https://github.com/mcanepa/petshop
```

Luego entrar al directorio

```
cd petshop
```

## Paso 2: Instalar proyecto y dependencias

Ya dentro del directorio ejecutamos:

```
composer install
```

Y dejamos que composer haga su magia

## Paso 3: Crear archivo de entorno

En el raíz del proyecto hay un archivo ```.env.example```, el cual debes copiar como ```.env``` luego editalo para configurar la conexión a la base de datos

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=el_nombre_de_la_base
DB_USERNAME=tu_usuario
DB_PASSWORD=tu_password
```

Reemplaza ```el_nombre_de_la_base```, ```tu_usuario```, y ```tu_password``` con los datos verdaderos de conexión.

## Paso 4: Crear base de datos y tablas

El proyecto cuenta con un comando para poder crear la base

```
php artisan create-database
```

Luego ejecuta las migrations para poder crear las tablas necesarias

```
php artisan migrate
```

## Paso 5: Correr el proyecto

Ejecuta

```
php artisan serve
```

Ahora ve al navegador y dirigete a

```
http://127.0.0.1:8000/pets
```

Allí podrás ver un listado de registros y tendrás la posibilidad de crear una nueva mascota!!

## Notas finales

Puedes testear la aplicación ejecutando algunos test creados para tal fin

```
php artisan test
```

Y también se puede validar el código ejecutando

```
./vendor/bin/phpstan analyse
```

## Saludos
Feliz año nuevo y estamos en contacto!
