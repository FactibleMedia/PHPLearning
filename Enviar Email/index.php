<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Envio de Correos</title>
    
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
        
        table { margin: auto; border-collapse: collapse; }
        
        td { color: #fff; font-family: 'Consolas', Arial, sans-serif;font-size: 14px; padding: 4px 10px; border-collapse: collapse; }
        
        input[type=submit] {
            background-color: green;
            color: #ffffff;
            font-weight: 600;
            border: none;
            border-radius: 4px;
            padding: 4px 10px;
            cursor: pointer;
        }
        
        input[type=submit]:hover {
            background-color: darkblue;
        }
        
        input[type=text], textarea {
            border-radius: 6px;
            border: 1px solid #ccc;
            padding: 4px 12px;
            font-size: 0.9em;
            font-weight: 600;
            font-family: 'Consolas', Arial, sans-serif;
        }
        
    </style> 
</head>
<body>
    <h1>Envío de correo</h1> <br>
   
    <form action="send_mail.php" method="post">
        
        <table>
            <tr>
                <td><input type="text" name="name" maxlength="50" size="25" placeholder="Nombre *"></td>
            </tr>
            <tr>
                <td><input type="text" name="lname" maxlenght="50" size="25" placeholder="Apellidos *"></td>
            </tr>
                <td><input type="text" name="email" maxlength="80" size="35" placeholder="correo *"></td>
            </tr>
            <tr>
                <td><input type="text" name="phone" maxlength="28" size="15" placeholder="Teléfono"></td>
            </tr>
            <tr>
                <td><input type="text" name="subject" id="subject" placeholder="Asunto"></td>
            </tr>
            <tr>
                <td><textarea name="message" id="message" cols="30" rows="5" maxlength="500" placeholder="Mensaje"></textarea></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Enviar"></td>
            </tr>
        </table>
        
    </form>
</body>
</html>