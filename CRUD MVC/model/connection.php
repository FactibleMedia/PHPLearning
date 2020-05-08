<?php

    class Connect{
        
        public static function connection() {
            
            try {
                
                $connection = new PDO('mysql:host=localhost; dbname=phplearn_users', 'root', '');
                
                $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                $connection->exec("SET CHARACTER SET utf8");
                
            } catch(Exception $e) {
                
                die("Error " . $e->getMessage());
                
                echo "Línea del error " . $e->getLine();
                
            }
            
            return $connection;
            
        }
        
    }

?>