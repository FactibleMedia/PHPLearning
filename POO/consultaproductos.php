<?php

    require "connection.php";

    class showproducts extends connection {
        
        public function showproducts() {
            
            parent::__construct();
            
        }
        
        public function get_products($data){
            
            $query = "SELECT * FROM PRODUCTOS WHERE PAÍSDEORIGEN = '" . $data . "'";
            
            $preparation = $this->bd_connection->prepare($query);
            
            $preparation-> execute(array());
            
            $result = $preparation->fetchAll(PDO::FETCH_ASSOC);
            
            $preparation->closeCursor();
            
            return $result;
            
            $this->bd_connection=null;
            
            //-------------------------------------------------------------
            
            /* $result=$this->bd_connection->query("SELECT * FROM productos WHERE PAÍSDEORIGEN = '" . $data . "'");
            
            $products=$result->fetch_all(MYSQLI_ASSOC);
            
            return $products; */
            
        }
        
    }

?>