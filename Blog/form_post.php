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
                <h2 class="display-4 text-primary">Nueva entrada</h2>
                <form action="insert_content.php" method="post" enctype="multipart/form-data" name="fomrsd">
                    <!--div class="form-group" -->
                        <label for="">Título de la entrada</label>
                        <input type="text" name="title" placeholder="Título de la entrada" class="form-control">
                        <small class="form-text text-muted">Introduxca el título que desea visualizar.</small>
                    <!-- /div -->
                    <div class="form-group">
                        <label for="">Texto de la entrada</label>
                        <textarea name="content" id="" cols="30" rows="4" placeholder="Texto de la entrada" class="form-control"></textarea>
                        <small class="form-text text-muted">Exprese todo lo que sienta.</small>
                    </div>
                    <div class="form-group">
                        <small class="text-danger">* Seleccione un archivo no mayor a 2Mb</small>
                        <input type="file" name="imaged" class="form-control-file form-control-sm"> 
                    </div>
                    <input type="submit" value="Publicar" class="btn btn-primary">
                </form> <br>
                <a href="blog_view.php" class="text-primary"><strong>Ver Blog</strong></a>
                <br>
                <br>
                <br>
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
