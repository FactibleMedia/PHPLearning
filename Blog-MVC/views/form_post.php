
                <h2 class="display-4 text-primary">Nueva entrada</h2>
                <form action="controller/publications_controller.php" method="post" enctype="multipart/form-data" name="fomrsd">
                    <!--div class="form-group" -->
                        <label for="">Título de la entrada</label>
                        <input type="text" name="title" placeholder="Título de la entrada" class="form-control">
                        <small class="form-text text-muted">Introduzca el título que desea visualizar.</small>
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
                <a href="blog.php" class="text-primary"><strong>Ver Blog</strong></a>
                <br>
                <br>
                <br>