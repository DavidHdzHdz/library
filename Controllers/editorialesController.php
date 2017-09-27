<?php

    namespace Controllers;

    use Models\Editorial as Editorial;

    class editorialesController{


    	private $editoriales;

    	public function __construct(){
    		$this -> editoriales = new Editorial(); 

    	} 

    	public function index(){
    		
    		$datos = $this -> editoriales -> listar();
    		return $datos;
    	}

        public function agregar(){
            if($_POST){
                
                $this -> editoriales -> set("nombre",$_POST['nombre']);
                $this -> editoriales -> set("sede",$_POST['sede']);
                $this -> editoriales -> add();
                
                header("location:" . URL . "editoriales");
            }

        }

        public function editar($id){
            if(!$_POST){
                $this -> editoriales -> set("id", $id);
                $datos = $this -> editoriales -> view();
                return $datos;
            }else{
                $this -> editoriales -> set("id", $id);
                $this -> editoriales -> set("nombre",$_POST['nombre']);
                $this -> editoriales -> set("sede",$_POST['sede']);
                
                $this -> editoriales -> edit();

                header("location:" . URL . "editoriales");
            }    

        }

        public function eliminar($id){

            $this -> editoriales -> set("id", $id);
            $this -> editoriales -> delete();

            header("location:" . URL . "editoriales");


        }

    }

?>