<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Envío de correo electrónico</title>
    </head>
    <body>
        <form method="post" action="enviar.php" name="enviar" enctype="ultipart/form-data">
            <label for="">Correo"</label>
            <input name="correo" id="correo" type="text" />
            <br>
            
            <label for="">Asunto</label>
            <input name="asunto" id="asunto" type="text" />
            <br>
    
            <label for="">Mensaje</label>
            <br />
            <textarea name="mensaje" id="message" rows="15" cols="40"></textarea>
            <br />
            
            <input type="file" name="archivo">
            
            <input type="submit" value="Enviar Correo" />
        </form>

    </body>
</html>