<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://psicoalianza.com/images/social-media-psa.png" width="400"></a></p>


## Test PsicoAlianza

La empresa Alianza requiere una aplicación web que permita registrar empleados, asociarlos a
uno o varios cargos y definir cuál es su jefe inmediato.

## Proceso de instalación y configuración

#### 1 - Dependencias de Composer

```composer install```

#### 2 - Crear archivo .env

Este archivo contiene todas las variables de entorno del sistema y debe estar creado en la raíz del proyecto basado en el archivo de ejemplo **.env.example**

#### 3 - Dependencias de npm

```npm install```

#### 4 - Crear base de datos

Vamos a la carpeta **/database** y creamos el archivo **database.sqlite**

#### 5 - Ejecutar migraciones

Las migraciones son básicamente la estructura de la base de datos que ya esta construida en el código para pasarla a SQLITE, esto lo podemos hacer con el siguiente comando.

```php artisan migrate```

si en este punto tenemos problemas ejecutando las migraciones, seguramente sera por las relaciones entre las tablas, en este caso podemos ejecutar cada migracion por separado ```php artisan migrate --path=/database/migrations/2022_07_30_223147_create_positions_table.php```

#### 6 - Subir datos de prueba 

Para este ejercicio se subiran datos de prueba para la lista de cargos y para el listado de empleados 

```php artisan db:seed --class=PositionSeeder```
```php artisan db:seed --class=EmployeeSeeder```

#### 7 - Ejecutar proyecto

```php artisan serve```
```npm run dev```


NOTAS: 

- El listado de ciudades y países se hizo con un api externa para simular las peticiones asincronas, algunas veces esta api se demora en responder o no trae las ciudades correspondientes de cada país
- Se agrego un **middleware** que permite realizar peticiones http evitando problemas de CORS

