<?php 
namespace Models;

   class Editorial{

   	  private $id;
   	  private $nombre;
   	  private $sede;
   	  private $con;

   	  public function __construct(){
   	  	$this -> con = new Conexion();

   	  }
        public function hola(){
          echo "hola mundo";
        }

        public function set($atributo, $contenido){
         $this -> $atributo = $contenido;

        }

        public function get($atributo){
         return $this -> $atributo ;

        }

   	  public function listar(){
   	  	$sql = "SELECT * FROM editoriales";

   	  	$datos = $this -> con -> consultaRetorno($sql);
   	  	return $datos;
   	  }
         
        public function add(){
         $sql = "INSERT editoriales(id, nombre, sede) VALUES (null,'{$this -> nombre}','{$this -> sede}')";
         $this -> con -> consultaSimple($sql);
        }

        public function delete(){
         $sql = "DELETE FROM editoriales WHERE id = '{$this -> id}'";
         $this -> con -> consultaSimple($sql);
        }

        public function edit(){
         $sql = "UPDATE editoriales SET nombre = '{$this -> nombre}', sede ='{$this -> sede}' 
         WHERE id = '{$this -> id}'";
         $this -> con -> consultaSimple($sql);
        }

        public function view(){
          
                 $sql = "SELECT * FROM editoriales WHERE id = '{$this -> id}'";
                 $datos = $this -> con -> consultaRetorno($sql);
                 $row = mysqli_fetch_assoc($datos);
                 return $row;


        }
        
        
   }