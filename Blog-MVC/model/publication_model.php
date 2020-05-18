<?php

    class Publication_model  {
        
        // Propiedades del objeto blog
        private $id;        
        private $title;
        private $da_te;
        private $content;
        private $image;
        
        
        // Métodos de acceso setter y getter
        
        public function get_id(){  // Obtiene el valor de la propiedad $id      
            return $this->id;            
        }
        
        public function set_id($id) {  // Esteblece el valor de la propiedad $id          
            $this->id = $id;            
        }
        //---
        
        public function get_title(){            
            return $this->title;            
        }
        
        public function set_title($title) {            
            $this->title = $title;            
        }
        //---
        
        public function get_date(){            
            return $this->da_te;            
        }
        
        public function set_date($da_te) {            
            $this->da_te = $da_te;            
        }
        //---
        
        public function get_content(){            
            return $this->content;            
        }
        
        public function set_content($content) {            
            $this->content = $content;            
        }
        //---
        
        public function get_image(){            
            return $this->image;            
        }
        
        public function set_image($image) {            
            $this->image = $image;            
        }
        //---
    }


?>