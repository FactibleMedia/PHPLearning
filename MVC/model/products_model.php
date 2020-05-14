<?php 
    
    class Products_model {
        
        private $database;
        
        private $products;
        
        
        public function __construct(){
            
            require_once("model/connection.php");
            
            $this->database=Connect::connection(); // Utilizamos -this- porque estaoms dentro de la clase y en la variable -database- llamamos a la clase -Conectar - con el método -connection-
            
            $this->products=array(); // Le decimos a la variable -products- que es un array para almacenar todos datos de la consulta de productos que se hizo con el método get_products.
        }
        
        public function get_products() { // Método para obtener todos los productos.
            
            $db_query = $this->database->query("SELECT * FROM PRODUCTOS"); // Consulta
            
            while($rows = $db_query->fetch(PDO::FETCH_ASSOC)) { // Mientras que leemos el array asociativo...
                
                $this->products[]=$rows; // El array productos es igual a cada fila de la consulta a cada vuelta de bucle.
                
            }
            
            return $this->products; // Nos devuelva el array productos.
            
        }
    }
    
    
?>