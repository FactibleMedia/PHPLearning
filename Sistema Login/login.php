<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Acceso</title>
    
    <style>
        
        body {
            font-family: 'Montserrat', sans-serif;
            font-size: 12px;
        }
        
        h1 {
            text-align: center;
        }
        
        table {
            width: 25%;
            background-color: blue;
            margin: auto;
            padding: 20px;
            border-radius: 6px;
            color: lawngreen;
        }
        
        input {
            border-radius: 4px;
            border: none;
            padding: 4px 6px;
            font-family: 'Montserrat', sans-serif;
        }
        
        input[type=submit] {
            background-color: greenyellow;
            border: none;
            padding: 4px 10px;
            margin: 10px 0 0 30%;
            font-family: 'Montserrat', sans-serif;
            font-weight: 600;
        }
    </style>
</head>
<body>
    <h1>Introduce tus datos</h1>
    <form action="validatelog.php" method="post">
        <table>
            <tr>
                <td>User</td>
                <td><input type="text" name="user"></td>
            </tr>
            <tr>
                <td>Pass</td>
                <td><input type="password" name="pass"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="send" value="Acceder"></td>
            </tr>
        </table>
    </form>
</body>
</html>