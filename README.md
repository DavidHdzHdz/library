# library
 this project consists of a platform to manage books in a database

Maual de instalacion de la wabApp bookstore.


los pasos a seguir son los siguientes:

1.-descomprimir el archivo:

$ unzip proyecto_examen.zip

2.- en el servidor donde se instalará la webapp ejecutar
el script de sql: 

$ mysql -u nom-usuario -p contraseña

$ \. /rutadelarchivo/booStoreScript.sql

3.-Modificar la clase conexion del proyecto la cual se encontrá en la
carpeta bookstore.

$ cd /rutadelarchivo/proyecto_examen/bookstore/Models

abrir el archivo Conexion.php y modificar el array con los valores del servidor sql, el nombre de la db no se cambiará.


private $datos = array(
    		               'host' => "direccion_host",  //ingresa el host
    		               'user' => "user_db",       //ingresa el usuario
    		               'pass' => "pass_db",   //ingresa la contraseña
    		               'db'   => "bookstore",   //ingresa la database
    		             );

3.-En el archivo index.php ubicado en la ruta /rutadelarchivo/bookstore
modificar la linea 5:

index.php
 
1
.
.
.
5 define('URL', "http/https://direccionweb.servidor/bookstore/"); 
//ingresar la direccion web del servidor en la parte "direccionwe.servidor" especificar http o https si el servidor es local se puede poner 
localhost/bookstore.


4.copiar la carpeta bookstore a la carpeta de aplicaciones del servidor
ejemplo:

$ cp /rutadelarchivo/bookstore/  /var/www/html  

o si el servidor no es local subir el archivo via ftp mediante algun programa ftp
como filezilla en la carpeta de las webApps.


por último buscar la direccion url en firefox, crome o cualquier otro:

http://direccion.url.aqui/bookstore

y se tendra ya instalada la aplicacion. 





 
