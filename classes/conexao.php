<?php
class Conexao {
  
    public static $instance;
  
    private function __construct() {
        //
    }
  
    public static function getInstance() {
        if (!isset(self::$instance)) {
        	try{
	            self::$instance = new PDO('mysql:host=localhost;dbname=mercado', 'root', '');
	            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	            self::$instance->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        	} catch (PDOExeception $e){
        			echo $e->getMessage();
        	}//final catch


        }//final if
  
        return self::$instance;
    }

	public static function prepare($sql){
	return self::getInstance()->prepare($sql);
	}
  
}



?>