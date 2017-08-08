<?php
    class Coche { // Ejemplo de declaración de clases.
                
        var $llantas; // Ejemplo de propiedad o atributo de una clase.
        var $color;
        var $motor;
            
        function Coche() { // -CONSTRUCTOR- Todos los objetos en programación oriendada a objetos deben tenr un estado inicial, este estado inicial es un "constructor" que es una función especial, esta lleva el mismo nombre de la clase, por lo tanto podríamos decir que es un Método Constructor.
            
            $this->llantas=4; // "$this" es una referencia que me permite relacionar el elemento con la clase, es como si invocara la clase.
            $this->color="";
            $this->motor=1600;
        }    
            
        function arrancar() { // Cuando dentro de una clase se crea una función, se crea un método (esto es una funcionalidad del objeto).
            echo "Estoy arrancando </br><br>";
        } 
            
        function girar() {
            echo "Estoy girando </br><br>";
        }
            
        function frenar() {
            echo "Estoy frenando </br><br>";
        }
            
        function set_color($color_auto,$name_auto) {
            $this->color=$color_auto;
            echo "El color del " . $name_auto . " es " . $this->color . "</br></br>";
        }
    }

    class Camion { // Ejemplo de declaración de clases
                
        // var $llantas; // Estado Original. PHP entiende que el modificiador de acceso es "public"
        //private $llantas; // Con el modificador de acceso "private" encapsulamos la variable ruedas para que sólo sea accesible desde la propia clase.
        // public $llantas; // Con el modificador de acceso "public" encapsulamos la variable ruedas para que sea accesible desde cualquier clase, es igual si no se coloca public y se colocoa var, PHP entiende que es public.
        protected $llantas; // Con el modificador de acceso "protected" encapsulamos la variable ruedas para que sólo sea accesible desde la propia clase o clases heredadas.
        
        var $color;
        var $motor; // Ejemplo de propiedad o atributo de una clase.
            
        function Camion() {// Todos los objetos en programación oriendada a objetos deben tenr un estado inicial, este estado inicial es un "constructor" que es una función especial, esta lleva el mismo nombre de la clase, por lo tanto podríamos decir que es un Método Constructor.
            
            $this->llantas=8; // "$this" es una referencia que me permite relacionar el elemento con la clase, es como si invocara la clase.
            $this->color="";
            $this->motor=4600;
        } // Si se omite la declaración del constructor se crea un constructor por defecto o vacío.
        
        function get_llantasCam () { // Método GETTER para obtener el valor de la variable "private".
            return $this->llantas;
        }
            
        function arrancar() { // Cuando dentro de una clase se crea una función, se crea un método (esto es una funcionalidad del objeto).
            echo "Estoy arrancando </br><br>";
        } 
            
        function girar() {
            echo "Estoy girando </br><br>";
        }
            
        function frenar() {
            echo "Estoy frenando </br><br>";
        }
            
        function set_color($color_auto,$name_auto) {
            $this->color=$color_auto;
            echo "El color del " . $name_auto . " es " . $this->color . "</br></br>";
        }
    }

    class Moto extends Camion { // HERENCIA EN CLASES: Hereda de una súper clase o clase padre todos las proìedades y funcionalidades.
            
        function Moto() { // CONSTRUCTOR
            
            $this->llantas=2; 
            $this->color="";
            $this->motor=600;
        }
        
        /* function get_llantasMot () { // Método GETTER para obtener el valor de la variable "private" en la súper clase.
            return $this->llantas;
        } */
        
        function arrancar() {
            parent::arrancar(); //Se ejecuta una función desde la súper clase.
            echo "La moto arrancó! </br></br>";
        }
        
        function set_color($color_moto,$name_moto) { // Se sobreescribió una funcionalidad heredada desde la super-clase para que se acomode y/o se comporte diferente para la nueva clase e instancias. A esto se le llama sobreescritura de métodos.
            $this->color=$color_moto;
            echo "El color de la moto " . $name_moto . " es " . $this->color . "</br></br>";
        }
    }
?>