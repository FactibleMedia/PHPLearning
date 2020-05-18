<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">

                <h1 class="display-4 text-primary">Blog de Fez</h1>
                <p>A continuación las entradas de mi blog :)</p>

                <?php
    
                     $connection = mysqli_connect("localhost", "root", "", "blog_bbdd");

                    if (!$connection) {
                        echo "La conexión ha fallado" . mysqli_error();
                        exit();
                    }

                    $db_query = "SELECT * FROM content ORDER BY date DESC";

                    if($result = mysqli_query($connection, $db_query)) {

                        while ($row = mysqli_fetch_assoc($result)){
                            
                            // echo date_default_timezone_get();
                            

                            echo "<div class='card mb-3'>";
                            
                                if($row['image']!="") {
            
                                    echo "<img src='img/" . $row['image'] . "'width='100%' class='card-img-top' alt='...'>";

                                }
                            
                            echo "<div class='card-body'>
                                    <h5 class='card-title'>" . $row['title'] . "</h5>
                                    <p class='card-text'>" . $row['content'] . "</p>
                                    <p class='card-text'><small class='text-muted'>Publicado el " . $row['date'] . "</small></p>
                                </div>
                            </div>";
                            
                            echo "<hr>";

                        }

                    }

                ?>


            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
