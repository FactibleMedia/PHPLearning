<?php
    
    class Products_model {
        
        private $database;
        
        private $products;
        
        
        public function __construct(){
            
            require_once("connection.php");
            
            $this->database=Conectar::connection();
            
            $this->products=array();
        }
        
        public function get_products() {
            
            $db_query = $this->database->query("SELECT * FROM PRODUCTOS");
            
            while($rows = $db_query->fetch(PDO::FETCH_ASSOC)) {
                
                $this->products[]=$rows;
                
            }
            
            return $this->products;
            
        }
    }
    
    
?>