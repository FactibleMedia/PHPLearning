<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MySQL - Insertando Registros</title>
    <style>
        body {
            font-family: 'Consolas', Arial, sans-serif;
            color: #fff;
        }
        div {
            margin-left: -200px;
            position: relative;
            left: 50%;
            width: 400px;
            background-color: darkblue;
            padding: 20px;
            border-radius: 5px;
        }
        h1 { font-size: 1.4em; margin: 0 0 10px; 0; }
        label {
            text-align: left;
            font-size: 0.8em;
            font-weight: 600;
        }
        input[type=text] {
            margin: 2px 0 3px; 0;
            border-radius: 5px;
            border: none;
            padding: 2px 6px;
            font-family: 'Consolas', Arial, sans-serif;
            width: 380px;
        }
        input[type=reset] {
            font-family: 'Consolas', Arial, sans-serif;
            border: none;
            border-radius: 5px;
            padding: 4px 10px;
            margin: 10px 0 0 0;
            background-color: red;
            color: #fff;
        }
        
        input[type=submit] {
            font-family: 'Consolas', Arial, sans-serif;
            border: none;
            border-radius: 5px;
            padding: 4px 10px;
            margin: 10px 0 0 0;
            background-color: forestgreen;
            color: #fff;
        }
        
        
    </style>
</head>
<body>
    <div>
    <h1>Registro de Ítems</h1>
        <form name="Form" method="GET"  action="MySQL_insertpage.php">
            <label for="cod_art">Código</label> </br>
            <input type="text" name="id" id="id"> </br>
            <label for="section">Sección &nbsp;</label> </br>
            <input type="text" name="sec" id="sec"> </br>
            <label for="item">Nombre &nbsp;</label> </br>
            <input type="text" name="art" id="art"> </br>
            <label for="price">Precio &nbsp;</label> </br>
            <input type="text" name="price" id="price"> </br>
            <label for="date">Fecha &nbsp;</label> </br>
            <input type="text" name="date" id="date"> </br>
            <label for="import">Importado?</label> </br>
            <input type="text" name="imp" id="imp"> </br>
            <label for="country">Origen &nbsp;</label> </br>
            <input type="text" name="origin" id="origin"> </br>
            <input type="submit" name="send" id="send" value="Registrar">
            <input type="reset" name="erase" id="erase" value="Borrar">
        </form>
    </div>
</body>
</html>