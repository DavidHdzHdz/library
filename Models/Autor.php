<?php 
namespace Models;

   class Autor{

   	  private $id;
   	  private $nombre;
   	  private $apellidos;
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
   	  	$sql = "SELECT t2.id as id_autor, t2.nombre as nombre_autor, t2.apellidos as apellidos_autor 
                 FROM autores t2";

   	  	$datos = $this -> con -> consultaRetorno($sql);
   	  	return $datos;
   	  }
         
        public function add(){
         $sql = "INSERT autores(id, nombre, apellidos) VALUES (null,'{$this -> nombre}','{$this -> apellidos}')";
         $this -> con -> consultaSimple($sql);
        }

        public function delete(){
         $sql = "DELETE FROM autores WHERE id = '{$this -> id}'";
         $this -> con -> consultaSimple($sql);
        }

        public function edit(){
         $sql = "UPDATE autores SET nombre = '{$this -> nombre}', apellidos ='{$this -> apellidos}' 
         WHERE id = '{$this -> id}'";
         $this -> con -> consultaSimple($sql);
        }

        public function view(){
         $sql = "SELECT t2.nombre as nombre_autor, t2.apellidos as apellidos_autor 
                 FROM autores t2  WHERE t2.id = '{$this -> id}'";
                 $datos = $this -> con -> consultaRetorno($sql);
                 $row = mysqli_fetch_assoc($datos);
                 return $row;


        }
        
        
   }