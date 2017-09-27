<?php
    namespace Controllers;


    use Models\Libro as Libro;
    use Models\Editorial as Editorial;
    use Models\Autor as Autor;
    use Models\AutorHasLibro as AHL;


    class librosController{

    	private $libros;
        private $ahl;
        private $editoriales;
        private $autores;

    	public function __construct(){
    		$this -> libros = new Libro();
            $this -> editoriales = new Editorial();
            $this -> autores = new Autor(); 
            $this -> ahl = new AHL(); 


    	} 

    	public function index(){
    		//print "Hola soy el index de libros";
    		$datos = $this -> libros -> listar();
    		return $datos;
    	}

         public function agregar(){
            if(!$_POST){
                $datos1 = $this -> autores ->listar();
                $datos2 = $this -> editoriales ->listar();
                $datos = array($datos1, $datos2);

                return $datos;  

            }else{
                $this -> libros -> set("ISBN",$_POST['ISBN']);
                $this -> libros -> set("editoriales_id",$_POST['editoriales_id']);
                $this -> libros -> set("titulo",$_POST['titulo']);
                $this -> libros -> set("sinopsis",$_POST['sinopsis']);
                $this -> libros -> set("n_paginas",$_POST['n_paginas']);
                $this -> libros -> add();

                $this -> ahl -> set("autores_id",$_POST['autores_id']);
                $this -> ahl -> set("libros_ISBN",$_POST['ISBN']);
                $this -> ahl -> add();

                header("location:" . URL . "libros");

            }
        }

        public function editar($ISBN){
           if(!$_POST){
                $this -> libros -> set("ISBN", $ISBN);
                $datos = $this -> libros -> view();
                return $datos;

           }else{
                $this -> libros -> set("ISBN",$_POST['ISBN_edit']);
                $this -> libros -> set("ISBN",$_POST['libros_ISBN']);
                $this -> libros -> set("editoriales_id",$_POST['editoriales_id']);
                $this -> libros -> set("titulo",$_POST['titulo']);
                $this -> libros -> set("sinopsis",$_POST['sinopsis']);
                $this -> libros -> set("n_paginas",$_POST['n_paginas']);
                $this -> libros -> edit();

                $this -> ahl -> set("libros_ISBN",$_POST['ISBN_edit']);
                $this -> ahl -> set("autores_id",$_POST['autores_id']);
                $this -> ahl -> set("libros_ISBN",$_POST['ISBN_edit']);
                $this -> ahl -> edit();

                header("location:" . URL . "libros");


           }
            

        }

        public function listar(){
            $datos1 = $this -> autores ->listar();
            $datos2 = $this -> editoriales ->listar();
            $datos = array($datos1, $datos2);

            return $datos;

        }

        public function eliminar($ISBN){
            $this -> libros -> set("ISBN", $ISBN);
            $this -> libros -> delete();

            header("location:" . URL . "libros");

        }


    }

   $listar = new librosController();
?>