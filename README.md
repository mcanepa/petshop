<p align="center"><a href="https://laravel.com" target="_blank"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 146.1 36.1" style="enable-background:new 0 0 146.1 36.1;" xml:space="preserve" preserveAspectRatio="xMinYMid meet">
<style type="text/css">
	.st0{fill:#3B3C43;}
	.st1{fill:#2CAD6E;}
</style>
<g id="Capa_1">
	<g>
		<path class="st0" d="M81.1,10.2c1.5-0.8,3.1-1.2,5.1-1.2c2.2,0,4.1,0.5,5.6,1.6c1.5,1.1,2.5,2.6,2.8,4.4h-2.5
			c-0.4-1.3-1.1-2.2-2.2-2.9c-1.1-0.7-2.3-1-3.9-1c-1.4,0-2.6,0.3-3.7,0.9c-1.1,0.6-1.9,1.5-2.5,2.5c-0.6,1.1-0.9,2.3-0.9,3.7
			c0,1.4,0.3,2.6,0.9,3.7c0.6,1.1,1.4,1.9,2.5,2.5c1.1,0.6,2.3,0.9,3.6,0.9c1.2,0,2.3-0.2,3.3-0.6c1-0.4,1.7-1,2.3-1.8
			c0.5-0.8,0.8-1.7,0.8-2.8v-0.6h-6.1v-2.1h8.5v2c0,1.2-0.5,5.3-4.3,7.2c-1.7,0.8-4,0.8-4.6,0.8c-1.8,0-3.5-0.4-4.9-1.2
			c-1.4-0.8-2.6-1.9-3.4-3.3c-0.8-1.4-1.2-3-1.2-4.8c0-1.8,0.4-3.4,1.2-4.8C78.6,12.1,79.7,11,81.1,10.2"></path>
		<g>
			<rect x="18.5" y="15.9" class="st1" width="17.5" height="4.3"></rect>
			<path class="st1" d="M27.6,27.9c-2.5,2.5-6,3.9-9.6,3.9c-7.6,0-13.8-6.2-13.8-13.7c0-7.6,6.2-13.7,13.8-13.7
				c3.8,0,7.5,1.6,10.1,4.4l0.4,0.4l4-1.9l-0.7-0.8C28.4,2.3,23.4,0,18.1,0C8.1,0,0,8.1,0,18.1c0,10,8.1,18.1,18.1,18.1
				c5.1,0,9.9-2.1,13.3-5.9l0.7-0.8l-4.1-2L27.6,27.9z"></path>
		</g>
		<rect x="123.7" y="9" class="st0" width="2.3" height="18.6"></rect>
		<polygon class="st0" points="136,27.5 136,11.2 128.3,11.2 128.3,9.1 146.1,9.1 146.1,11.2 138.3,11.2 138.3,27.5 		"></polygon>
		<rect x="69.8" y="9.2" class="st0" width="2.5" height="18.2"></rect>
		<path class="st0" d="M51.9,10.2c1.5-0.8,3.2-1.2,5.1-1.2c2.2,0,4.1,0.5,5.6,1.6c1.5,1.1,2.5,2.6,2.8,4.4H63
			c-0.4-1.3-1.1-2.2-2.2-2.9c-1.1-0.7-2.3-1-3.9-1c-1.4,0-2.6,0.3-3.7,0.9c-1.1,0.6-1.9,1.5-2.5,2.5c-0.6,1.1-0.9,2.3-0.9,3.7
			c0,1.4,0.3,2.6,0.9,3.7c0.6,1.1,1.4,1.9,2.5,2.5c1.1,0.6,2.3,0.9,3.6,0.9c1.2,0,2.3-0.2,3.3-0.6c1-0.4,1.7-1,2.3-1.8
			c0.5-0.8,0.8-1.7,0.8-2.8v-0.6h-6.1v-2.1h8.5v2c0,1.2-0.5,5.3-4.3,7.2c-1.7,0.8-4,0.8-4.6,0.8c-1.8,0-3.5-0.4-4.9-1.2
			c-1.4-0.8-2.6-1.9-3.4-3.3c-0.8-1.4-1.2-3-1.2-4.8c0-1.8,0.4-3.4,1.2-4.8C49.4,12.1,50.5,11,51.9,10.2"></path>
		<polygon class="st0" points="107.6,9.2 104.6,9.2 96.9,27.4 99.5,27.4 106,11.7 112.6,27.4 115.2,27.4 		"></polygon>
	</g>
</g>
<g id="Capa_2">
</g>
</svg></a></p>


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
