<?php 
namespace Models;

   class AutorHasLibro{

   	  private $autores_id;
   	  private $libros_ISBN;
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
   	  	$sql = "SELECT * FROM autores_has_libros";

   	  	$datos = $this -> con -> consultaRetorno($sql);
   	  	return $datos;
   	  }
         
        public function add(){
         $sql = "INSERT autores_has_libros(autores_id, libros_ISBN) VALUES ('{$this -> autores_id}', 
                        '{$this -> libros_ISBN}')";

         $this -> con -> consultaSimple($sql);
        }

        public function delete(){
         $sql = "DELETE FROM autores_has_libros WHERE libros_ISBN = '{$this -> libros_ISBN}'";
         $this -> con -> consultaSimple($sql);
        }

        public function edit(){
         $sql = "UPDATE autores_has_libros SET autores_id = '{$this -> autores_id}', 
                                                    libros_ISBN ='{$this -> libros_ISBN}' 
         WHERE libros_ISBN = '{$this -> libros_ISBN}'";
         $this -> con -> consultaSimple($sql);
        }

        public function view(){
                 $sql = "SELECT * FROM autores_has_libros WHERE libros_ISBN = '{$this -> libros_ISBN}'";
                 $datos = $this -> con -> consultaRetorno($sql);
                 $row = mysqli_fetch_assoc($datos);
                 return $row;


        }
        
        
   }