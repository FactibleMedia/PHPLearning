<?php 
    
    class Products_model {
        
        private $database;
        
        private $products;
        
        
        public function __construct(){
            
            require_once("model/connection.php");
            
            $this->database=Connect::connection(); // Utilizamos -this- porque estaoms dentro de la clase y en la variable -database- llamamos a la clase -Conectar - con el método -connection-
            
            $this->products=array(); // Le decimos a la variable -products- que es un array
        }
        
        public function get_products() { // Método para obtener los productos.
            
            $db_query = $this->database->query("SELECT * FROM PRODUCTOS");
            
            while($rows = $db_query->fetch(PDO::FETCH_ASSOC)) {
                
                $this->products[]=$rows;
                
            }
            
            return $this->products;
            
        }
    }
    
    
?>