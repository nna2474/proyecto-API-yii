# Proyecto API Yii2

#### Conectar a la base de datos
- Ir al archivo `proyecto-API-yii/API/common/config/main-local.php`
- Sustituir los datos para conectar a la BD
    ```php
    'db' => [
      'class' => 'yii\db\Connection',
      'dsn' => 'mysql:host=ip del server;dbname=Nombre de la Base de Datos',
      'username' => 'usuario de la base de datos',
      'password' => 'clave de la base de datos',
      'charset' => 'utf8',
    ],
    ```
#### Ruta de acceso al CRUD y Api de cada tabla

|Nombre de la Tabla |Ruta|
|---|---|
|t00040_servicio|index.php?r=t00040-servicio|
|t00060_funcion|index.php?r=t00060-funcion|
|t00070_funcion_servicio|index.php?r=t00070-funcion-servicio|
|t00100_usuario|index.php?r=t00100-usuario|
|t99999_auditoria|index.php?r=t99999-auditoria|
|t99999_bitacora|index.php?r=t99999-bitacora|

## Acceso a la interfaz gráfica del CRUD

```
http://localhost/proyecto-API-yii/api/frontend/web/index.php?r=<nombre de la tabla>
```
Ejemplo con la tabla `t00100-usuario`:

```
http://localhost/proyecto-API-yii/api/frontend/web/index.php?r=t00100-usuario
```    


## Acceso a la API

```
http://localhost/proyecto-API-yii/api/backend/web/index.php?r=<nombre de la tabla>
```

Ejemplo con la tabla `t00100-usuario`: 

```
http://localhost/proyecto-API-yii/api/backend/web/index.php?r=t00100-usuario
```    
### Métodos y funciones:

- `'PUT,PATCH t00100-usuario/<id>' => 't00100-usuario/update'`: 
    - actualiza un usuario. Ejemplo: `index.php?r=t00100-usuario/update&id=1`

- `'DELETE t00100-usuario/<id>' => 't00100-usuario/delete'`: 
    - eliminar un usuario. Ejemplo: `index.php?r=t00100-usuario/delete&id=1`

- `'GET,HEAD t00100-usuario/<id>' => 't00100-usuario/view'`: 
    - devuelve los detalles / descripción general / opciones de un usuario. Ejemplo: `index.php?r=t00100-usuario/view&id=1`

- `'POST t00100-usuario' => 't00100-usuario/create'`:
    - crea un nuevo usuario. Ejemplo: `index.php?r=t00100-usuario/create`

- `'GET,HEAD t00100-usuario' => 't00100-usuario/index'`:
    - devuelve una lista / descripción general / opciones de usuarios. Ejemplo: `index.php?r=t00100-usuario/index`

- `'t00100-usuario/<id>' => 't00100-usuario/options'`:
    - procesa todos los verbos no manejados de un usuario

- `'t00100-usuario' => 't00100-usuario/options'`:
    - procesa todos los verbos no manejados de la colección de usuarios 
 
 Para más información: [Class yii\rest\UrlRule](https://www.yiiframework.com/doc/api/2.0/yii-rest-urlrule)

 
