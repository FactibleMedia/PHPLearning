<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Operadores</title>
</head>
<body>
    <p>&nbsp;</p>
    <form name="form1" method="post" action="">
        <label for="num1"></label>
        <input type="text" name="num1" id="num1">
        <label for="num2"></label>
        <input type="text" name="num2" id="num2">
        <label for="operación"></label>
        <select name="operacion" id="operacion">
            <option>Suma</option>
            <option>Resta</option>
            <option>Multiplicación</option>
            <option>División</option>
            <option>Módulo</option>
        </select>
        <input type="submit" name="button" id="button" value="Enviar" onClick="prueba">
    </form>
    <p>&nbsp;</p>
    
    <?php
        if(isset($_POST["button"])) {
            
            $numero1=$_POST["num1"];
            $numero2=$_POST["num2"];
            $operacion=$_POST["operacion"];
            
            if(!strcmp("Suma",$operacion)) {
                echo "El resultado es: " . ($numero1+$numero2);
            }
            
            if(!strcmp("Resta",$operacion)) {
                echo "El resultado es: " . ($numero1-$numero2);
            }
            
            if(!strcmp("Multiplicación",$operacion)) {
                echo "El resultado es: " . ($numero1*$numero2);
            }
            
            if(!strcmp("División",$operacion)) {
                echo "El resultado es: " . ($numero1/$numero2);
            }
            
            if(!strcmp("Módulo",$operacion)) {
                echo "El resultado es: " . ($numero1%$numero2);
            }
        }
    ?>
</body>
</html>