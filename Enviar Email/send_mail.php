<?php

    if($_POST["name"]=="" || $_POST["lname"]=="" || $_POST["email"]=="" || $_POST["message"]=="") {
        
        echo "Revisa los campos";
        
    }
    
        $message = $_POST["message"];

        $receiver = $_POST["email"];

        $subject = $_POST["subject"];

        $headers = 'MIME-Version: 1.0' . "/r/n";

        $headers.= 'Content-type: text/html; charset=iso-8859-1' . "/r/n";

        $headers.= 'From: Prueba FM < fedrmax@gmail.com >' . "/r/n";

        $success = mail($receiver, $subject, $message, $headers);

        if($success) {

            echo "Mensaje enviado con exito";

        } else {

            echo "Se ha encontrado un error";

        }
        
?>