<?php

    class Compra_vehiculo {
        
        private $precio_base;
        
        static $descuento=450000;
        
        function Compra_vehiculo($gama) { // Constructor
            
            if($gama=="urbano") {
                
                $this->precio_base=1000000;
                
            }else if($gama=="compacto") {
                
                $this->precio_base=2000000;
                
            }else if($gama=="berlina") {
                
                $this->precion_base=3000000;
            }
        } // Fin constructor
        
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
                
                $this->precio_base+=500000;
                
            }
        }
        
        function precio_final(){
            
            $valor_final=$this->precio_base - self::$descuento;
            
            return $valor_final;
            
        }
    }




?>