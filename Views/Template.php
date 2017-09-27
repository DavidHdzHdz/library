<?php namespace Views;
  $template = new Template();
  class Template{
    public function __construct(){
?>
  <!DOCTYPE html>
  <html lang="es">
  <head>
    <meta charset="UTF-8">
    <title>Administración de Libros</title>
    <link rel="stylesheet" href="<?php echo URL; ?>Views/template/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo URL; ?>Views/template/css/general.css">
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
            <span class="sr-only"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo URL; ?>">Administración de Libros</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo URL; ?>">Inicio</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">libros <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="<?php echo URL; ?>libros">Listado</a></li>
                <li><a href="<?php echo URL; ?>libros/agregar">Agregar</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">autores <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="<?php echo URL; ?>autores">Listado</a></li>
                <li><a href="<?php echo URL; ?>autores/agregar">Agregar</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">editoriales <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="<?php echo URL; ?>editoriales">Listado</a></li>
                <li><a href="<?php echo URL; ?>editoriales/agregar">Agregar</a></li>
              </ul>
            </li>
          </ul>
          
          <ul class="nav navbar-nav navbar-right">
            <li>David Hernández</li>
          </ul>
        </div>
      </div>
    </nav>
<?php
    }
    public function __destruct(){
?>
  <footer class="navbar-fixed-bottom">
    Todos los derechos reservados &copy 2017 <br>
    David Hernández Hernández | <b>Warrior</b>
  </footer>
  <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
  <script src="<?php echo URL; ?>Views/template/js/bootstrap.js"></script>
  </body>
  </html>
<?php
    }
  }
?>