<?php 
namespace Models;
    /*Esta clase controla la conexión a nuestra base de datos, para configurarla simplemente
    modificar los valores correspondientes en el atributo datos que son host,user,pass y db */
    class Conexion{    	
    	//Atributos
    	private $datos = array(
    		               'host' => "localhost",  //ingresa el host
    		               'user' => "root",       //ingresa el usuario
    		               'pass' => "sistemas",   //ingresa la contraseña
    		               'db'   => "bookstore",   //ingresa la database
    		             );
    	private $con;

    	//Métodos
    	public function __construct(){ 
            /*la  clase mysqli es global de php se le pone la barra invertida para evitar que el namespace no la busque como una clase local esta barra indica clase global*/
            $this -> con = new \mysqli(                   
            	                  $this -> datos['host'],
            	                  $this -> datos['user'],
            	                  $this -> datos['pass'],
            	                  $this -> datos['db']
            	                );
                        
        }

        public function consultaSimple($sql){
        	$this -> con -> query($sql);
        }

        public function consultaRetorno($sql){
        	$datos = $this -> con -> query($sql);
        	return $datos;

        }
    }

    
    


?>    