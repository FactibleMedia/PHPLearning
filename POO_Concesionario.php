<?php

    class Compra_vehiculo {
        
        private $precio_base;
        private static $descuento=0; // Un método es estático cuando pertenece únicamente a la clase donde se ha creado. Las subclases u instancias/objetos creados a partir de la clase No tienen copia de este método. En cambio el metodo pasa a ser compartido con todos los objetos; es decir no hace una copia del método por herencia a ningùn objeto sino que se los comparte.
        
        function Compra_vehiculo($gama) { // Constructor
            
            if($gama=="urbano") {
                
                $this->precio_base=1000000;
                
            }else if($gama=="compacto") {
                
                $this->precio_base=2000000;
                
            }else if($gama=="berlina") {
                
                $this->precion_base=3000000;
            }
        } // Fin constructor
        
        static function descuentoGob(){
            
            if(date("m-d-y")>"01-01-2020") {
                self::$descuento=450000;    
            }
        }
        
        function climatizador(){
            
            $this->precio_base+=200000;
            
        }
        
        function gps(){
            
            $this->precio_base+=350000;
        }
        
        function tapiceria($color){
            
            if($color=="blanco") {
                
                $this->precio_base+=300000;
                
            }else if($color=="beige") {
                
                $this->precio_base+=350000;
                
            }else{
                
                $this->precio_base+=100000;
                
            }
        }
        
        function precio_final(){
            
            $valor_final=$this->precio_base - self::$descuento; // El self:: es un método que te ayuda a referenciar una variable estática.
            
            return $valor_final;
            
        }
    }

?>