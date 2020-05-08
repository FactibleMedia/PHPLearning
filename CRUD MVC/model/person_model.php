<?php 
    
    class Personas_model {
        
        private $database;
        
        private $personas;
        
        
        public function __construct(){
            
            require_once("model/connection.php");
            
            $this->database=Connect::connection(); // Utilizamos -this- porque estaoms dentro de la clase y en la variable -database- llamamos a la clase -Conectar - con el método -connection-
            
            $this->personas=array(); // Le decimos a la variable -products- que es un array
        }
        
        public function get_personas() { // Método para obtener los productos.
            
            require("pagination_model.php");
            
            $db_query = $this->database->query("SELECT * FROM users_data LIMIT $pages_start, $pagesize");
            
            while($rows = $db_query->fetch(PDO::FETCH_ASSOC)) {
                
                $this->personas[]=$rows;
                
            }
            
            return $this->personas;
            
        }
    }
    
    
?>