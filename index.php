<?php
    //definicion de variables para llama url's
    define('DS', DIRECTORY_SEPARATOR);
    define('ROOT', realpath(dirname(__FILE__)) . DS);
    define('URL', "http://localhost/bookstore/");

    require_once "Config/Autoload.php";

    Config\Autoload::run(); 

    require_once "Views/Template.php";
    Config\Enrutador::run(new Config\Request()); 

   // new Config\Request();

    //$objeto = new Models\Autor();

    //$objeto -> set('id',1); 
    //$consulta = $objeto -> get('id');
    //$consulta2 = $objeto -> view();
    //echo $consulta;
    //echo $consulta2['id'] . $consulta2['nombre_autor'];
 

?>