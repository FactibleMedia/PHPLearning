<?php
    if(isset($_POST["enviar"])) {
        
        $nombre=$_POST["name"];
        $edad=$_POST["age"];
        
        /* if($edad <= 18) {
            echo "Eres menor de edad";
        }else if($edad <= 40){
            echo "Eres jóven";
        }else if($edad <= 65){
            echo "Eres maduro";
        }else{
            echo "Cu&iacutedate";
        } */
        
        /* echo $nombre=="Fez" && $edad=="lalilulelo" ? "Puedes acceder" : "No Puedes acceder"; */  // Línea de trabajo del condicional ternario
        
        /* switch (true) { // Cuando es con llaves
            
            case $nombre=="Fez" && $edad=="lalilulelo":
                echo "Usuario Autorizado. Hola Fez";
                break;
                
            default:
                echo "No puedes entrar, no estás autorizado";
                // No hace poner el "break;" en éste caso!!
        } */
        
        switch (true) : // Cuando es con dos puntos
            
            case $nombre=="Fez" && $edad<=18:
                echo "Usuario NO Autorizado. Eres menor";
                break;
        
            case $nombre=="Fez" && $edad<=35:
                echo "Usuario Autorizado. Eres jóven bienvenido";
                break;
        
            case $nombre=="Fez" && $edad<=65:
                echo "Usuario Autorizado. Eres maduro, ya eres vieja guadia";
                break;
                
            default:
                echo "No puedes entrar, no estás autorizado";
                // No hace poner el "break;" en éste caso!!
        endswitch;
        
    }

    
    

?>