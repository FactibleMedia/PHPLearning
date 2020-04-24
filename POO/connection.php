<?php

    require ("config.php");

    class connection {
        
        protected $bd_connection;
        
        public function connection() {
            
            try {
                
                $this->bd_connection = new PDO('mysql:host=localhost; dbname=phplearn_users', 'root', '');
                
                $this->bd_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                $this->bd_connection->exec("SET CHARACTER SET UTF8");
                
                return $this->bd_connection;
                
            } catch(Exception $e) {
                
                echo "La línea del error es: " . $e->getLine();
                
            }
            
            //-------------------------------------------------------------
            
            /*$this->bd_connection = new mysqli(bd_host, bd_user, bd_pass, bd_name);
            
            if($this->bd_connection->connect_errno) {
                
                echo "Fallo al conectar con la base de datos: " . $this->bd_connection->connect_error;
                
                return;
     
            }
            
            $this->bd_connection->set_charset(bd_charset); */
        }
    }
?>