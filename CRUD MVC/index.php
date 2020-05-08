<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    
    <style>
        
        body {
            font-family: 'Consolas', Arial, sans-serif;
        }
        
        h1 {
            text-align: center;
            font-size: 2em;
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
        
        .campos {
            text-align: center;
            margin: 0 auto 20px auto;
        }
        
        .campos input {
            margin-bottom: 4px;
            font-family: 'Consolas', Arial, sans-serif;
        }
        
    </style> 
</head>
<body>
    <h1>CRUD MVC</h1>
    <h2>[Create, Read, Update, Delete] <br> [Model View Controller]</h2> <br>
    
    <br>
    
    <?php
    
        require_once("controller/person_controller.php");
    
    ?>
    
</body>
</html>