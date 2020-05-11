<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Subir Imágenes</title>
    
    <style>
        
        body {
            font-family: 'Consolas', Arial, sans-serif;
        }
        
        h1 {
            text-align: center;
            font-size: 1.6em;
            letter-spacing: 3px;
            margin-bottom: 0;
        }
        
        h2 {
            text-align: center;
            font-size: 1em;
            margin: 0;
        }
        
        input[type=submit] {
            background-color: green;
            color: #ffffff;
            font-weight: 600;
            border: none;
            border-radius: 4px;
            padding: 4px 10px;
        }
        
        table { background-color: darkblue; margin: auto; border-collapse: collapse; }
        td, th { border: 1px solid green; color: #fff; font-family: 'Consolas', Arial, sans-serif;font-size: 14px; padding: 4px 10px; background-color: darkblue; border-collapse: collapse; }
        
        td .act, .del {
            background-color: green;
            color: #ffffff;
            border: none;
            border-radius: 4px;
            padding: 2px 10px;
            box-shadow: #000 2px 2px 2px;
            font-weight: 600;
            cursor: pointer;
        }
        
        td .del {
            background-color: red;
        }
        
        td .act:hover, .del:hover {
            box-shadow: #000 -2px -2px 2px;
        }
        input[type=file] {
            border-radius: 6px;
            border: none;
            font-size: 0.9em;
            font-weight: 600;
        }
        
    </style> 
</head>
<body>
    <h1>Carga de archivos e imágenes</h1><br>
    
    <form action="files_data.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td><label for="image">Imagen</label></td>
                <td><input type="file" name="file" size="20"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Cargar Archivo"></td>
            </tr>
        </table>
    </form>
</body>
</html>