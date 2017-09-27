# library
<p><b> this project consists of a platform to manage books in a database </b></p >


Maual de instalacion de la wabApp bookstore.
los pasos a seguir son los siguientes:
<ul>
<pre><li>descomprimir el archivo:
$ unzip proyecto_examen.zip
</li></pre> 
<pre><li>En el servidor donde se instalará la webapp ejecutar
el script de sql: 
 $ mysql -u nom-usuario -p contraseña
 $ \. /rutadelarchivo/booStoreScript.sql
</pre></li>
<li>
Modificar la clase conexion del proyecto la cual se encontrá en la
carpeta bookstore.

$ cd /rutadelarchivo/proyecto_examen/bookstore/Models

abrir el archivo Conexion.php y modificar el array con los valores del servidor sql, el nombre de la db no se cambiará.


private $datos = array(
    		               'host' => "direccion_host",  //ingresa el host
    		               'user' => "user_db",       //ingresa el usuario
    		               'pass' => "pass_db",   //ingresa la contraseña
    		               'db'   => "bookstore",   //ingresa la database
    		             );
</li>
<li>
En el archivo index.php ubicado en la ruta /rutadelarchivo/bookstore
modificar la linea 5:

index.php
 
1
.
.
.
5 define('URL', "http/https://direccionweb.servidor/bookstore/"); 
//ingresar la direccion web del servidor en la parte "direccionwe.servidor" especificar http o https si el servidor es local se puede poner 
localhost/bookstore.
</li>
<li>
Copiar la carpeta bookstore a la carpeta de aplicaciones del servidor
ejemplo:

$ cp /rutadelarchivo/bookstore/  /var/www/html  

o si el servidor no es local subir el archivo via ftp mediante algun programa ftp
como filezilla en la carpeta de las webApps.


por último buscar la direccion url en firefox, crome o cualquier otro:

http://direccion.url.aqui/bookstore

y se tendra ya instalada la aplicacion. 
</li>
</ul>

<h3>Puedes ver el funcionamiento de la página <a href = "http://welectronic.byethost6.com/bookstore/" target = "_blank">presionando aquí</a><h3>

 
