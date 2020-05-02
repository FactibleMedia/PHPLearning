<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login con password encriptado</title>
    <style>
        
        body{ font-family: sans-serif; }
        
        h1 { text-align: center; }
        
        table {
            width: 300px;
            margin: auto;
            background-color: aqua;
            padding: 10px;
            border-radius: 6px;
        }
        
        input[type=text],[type=password] {
            border: none;
            border-radius: 4px;
            padding: 4px 10px;
            width: 90%;
        }
        
        input[type=submit] {
            text-align: center;
            background-color: black;
            color: aliceblue;
            border: none;
            border-radius: 4px;
            padding: 6px 10px;
            font-weight: 600;
            margin-top: 10px;
        }
        
        .submit {
            text-align: center;
        }
    
    </style>
</head>
<body>
   
    <h1>Login</h1>
    
    <form action="validate_log.php" method="post">
        <table>
            <tr>
                <td>User</td>
                <td><input type="text" name="user"></td>
            </tr>
            <tr>
                <td>Pass</td>
                <td><input type="password" name="pass"></td>
            </tr>
            <tr class="submit">
                <td colspan="2"><input type="submit" name="send" value="Acceder"></td>
            </tr>
        </table>
    </form>
    
</body>
</html>