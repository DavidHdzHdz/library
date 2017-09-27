<?php
    namespace Controllers;

    use Models\AutorHasLibro as AHL;

    class ahlController{

    	private $ahl;

    	public function __construct(){
    		$this -> autores = new AHL(); 

    	} 

    	public function index(){
    		
    		$datos = $this -> autores -> listar();
    		return $datos;
    	}
    }
?>