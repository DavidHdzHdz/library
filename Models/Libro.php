<?php 
namespace Models;

   class Libro{

   	  private $ISBN;
   	  private $editoriales_id;
   	  private $titulo;
      private $sinopsis;
      private $n_paginas;
   	  private $con;

   	  public function __construct(){
   	  	$this -> con = new Conexion();

   	  }

        public function set($atributo, $contenido){
         $this -> $atributo = $contenido;

        }

        public function get($atributo){
         return $this -> $atributo;

        }

   	  public function listar(){
   	  	$sql = "SELECT t3.*, t2.nombre as nombre_autor, t2.apellidos as apellidos_autor ,t4.*
                 FROM autores t2 INNER JOIN autores_has_libros t1 ON t2.id = t1.autores_id
                 INNER JOIN libros t3 ON t1.libros_ISBN = t3.ISBN
                 INNER JOIN editoriales t4 ON t4.id = t3.editoriales_id";

   	  	$datos = $this -> con -> consultaRetorno($sql);
   	  	return $datos;
   	  }
         
        public function add(){
         $sql = "INSERT libros(ISBN, editoriales_id, titulo, sinopsis, n_paginas) 
                 VALUES ('{$this -> ISBN}','{$this -> editoriales_id}','{$this -> titulo}',
                        '{$this -> sinopsis}','{$this -> n_paginas}')";

         $this -> con -> consultaSimple($sql);
        }

        public function delete(){
         $sql = "DELETE FROM libros WHERE ISBN = '{$this -> ISBN}'";
         $this -> con -> consultaSimple($sql);
        }

        public function edit(){
         $sql = "UPDATE libros SET ISBN = '{$this -> ISBN}', editoriales_id ='{$this -> editoriales_id}', 
                                        titulo = '{$this -> titulo}', sinopsis = '{$this -> sinopsis}',
                                        n_paginas = '{$this -> n_paginas}'
         WHERE ISBN = '{$this -> ISBN}'";
         $this -> con -> consultaSimple($sql);
        }

        public function view(){
         $sql = "SELECT t1.*, t3.*, t2.nombre as nombre_autor, t2.apellidos as apellidos_autor,t4.* 
                 FROM autores t2 INNER JOIN autores_has_libros t1 ON t2.id = t1.autores_id
                 INNER JOIN libros t3 ON t1.libros_ISBN = t3.ISBN 
                 INNER JOIN editoriales t4 ON t4.id = t3.editoriales_id
                 WHERE t3.ISBN = '{$this -> ISBN}'";
                 $datos = $this -> con -> consultaRetorno($sql);
                 $row = mysqli_fetch_assoc($datos);
                 return $row;


        }
        
        
   }