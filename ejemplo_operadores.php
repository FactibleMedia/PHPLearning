<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Operadores</title>
</head>
<body>
    <p>&nbsp;</p>
    <form name="form1" method="post" action="">
        <label for="num1">Número 1</label>
        <input type="text" name="num1" id="num1" placeholder="0">
        <label for="num2">Número 2</label>
        <input type="text" name="num2" id="num2" placeholder="0">
        <label for="operación">Operaci&oacute;n</label>
        <select name="operacion" id="operacion">
            <option>Suma</option>
            <option>Resta</option>
            <option>Multiplicación</option>
            <option>División</option>
            <option>Módulo</option>
            <option>Incremento</option>
            <option>Decremento</option>
        </select>
        <input type="submit" name="button" id="button" value="Enviar" onClick="prueba">
    </form>
    <p>&nbsp;</p>
    
    <?php
        include("calculadora.php");
    
        if(isset($_POST["button"])) {
        
            $numero1=$_POST["num1"];
            $numero2=$_POST["num2"];
            $operacion=$_POST["operacion"];
        
            calcular($operacion);
        }
    ?>
</body>
</html>