<?php
    if(isset($_POST["enviar"])) {
        
        $nombre=$_POST["name"];
        $edad=$_POST["age"];
        
        if($edad <= 18) {
            
            echo "Eres menor de edad";
            
        }else if($edad <= 40){
            
            echo "Eres jóven";
            
        }else if($edad <= 65){
            
            echo "Eres maduro";
        }else{
            
            echo "Cu&iacutedate";
            
        }
        
    }

    
    

?>