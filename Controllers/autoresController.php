<?php
    namespace Controllers;

    use Models\Autor as Autor;

    class autoresController{

    	private $autores;

    	public function __construct(){
    		$this -> autores = new Autor(); 

    	} 

    	public function index(){
    		
    		$datos = $this -> autores -> listar();
    		return $datos;
    	}

         public function agregar(){
            if($_POST){
                
                $this -> autores -> set("nombre",$_POST['nombre']);
                $this -> autores -> set("apellidos",$_POST['apellidos']);
                $this -> autores -> add();
                
                header("location:" . URL . "autores");
            }

        }

        public function editar($id){
            if(!$_POST){
                $this -> autores -> set("id", $id);
                $datos = $this -> autores -> view();
                return $datos;
            }else{
                $this -> autores -> set("id", $id);
                $this -> autores -> set("nombre",$_POST['nombre']);
                $this -> autores -> set("apellidos",$_POST['apellidos']);
                
                $this -> autores -> edit();

                header("location:" . URL . "autores");
            }    

        }

        public function eliminar($id){

            $this -> autores -> set("id", $id);
            $this -> autores -> delete();

            header("location:" . URL . "autores");


        }

       
    }
?>