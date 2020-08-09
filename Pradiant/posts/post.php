<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <title>Pradiant blog</title>
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-dark fondo-marca">
        <a class="navbar-brand d-flex" href="#">
            <img src="../assets/PRADIANT.png" width="50" height="50" alt="" class="mr-3">
            <h2>Pradiant Análisis y Consultoria</h2>
        </a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
            aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#">   Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">   Web <span
                            class="sr-only">(current)</span></a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="#">Categoria 1</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">Categoria 2</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="#">Accion 1</a>
                        <a class="dropdown-item" href="#">Accion 2</a>
                    </div>
                </li> -->
            </ul>
        </div>
    </nav>
    <br>
    <br>
    <main role="main" class="container mb-5">
        <div class="row">
            <div class="col-md-8 blog-main bg-white p-5 shadow">
                <div class="blog-post">
                    <h2 class="blog-post-title">Blog post</h2>
                    <p class="blog-post-meta">3 de agosto del 2010, por <a href="#">Fulanito</a></p>
                    <hr>
                    <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur
                        ridiculus mus.
                        Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere
                        consectetur est
                        at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
                    <blockquote>
                        <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong>
                            ornare vel eu
                            leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </blockquote>
                    <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit
                        amet fermentum.
                        Aenean lacinia bibendum nulla sed consectetur.</p>
                    <h2>Encabezado</h2>
                    <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non
                        commodo luctus,
                        nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac
                        consectetur ac,
                        vestibulum at eros.</p>
                    <h3>Sub-encabezado</h3>
                    <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                    <p>Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis
                        euismod. Fusce
                        dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
                    <h3>Sub-encabezado</h3>
                    <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean
                        lacinia
                        bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce
                        dapibus, tellus ac
                        cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                    <ul>
                        <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
                        <li>Donec id elit non mi porta gravida at eget metus.</li>
                        <li>Nulla vitae elit libero, a pharetra augue.</li>
                    </ul>
                    <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra
                        augue.</p>
                    <ol>
                        <li>Vestibulum id ligula porta felis euismod semper.</li>
                        <li>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                        </li>
                        <li>Maecenas sed diam eget risus varius blandit sit amet non magna.</li>
                    </ol>
                    <p>Cras mattis consectetur purus sit amet fermentum. Sed posuere consectetur est at lobortis.
                    </p>
                </div><!-- /.blog-post -->


            </div><!-- /.blog-main -->

            <aside class="col-md-4 blog-sidebar">
                <div class="card mb-3">
                  <div class="card-header text-white fondo-marca">
                        <i class="fa fa-search" aria-hidden="true"></i> Busqueda
                    </div>
                    <div class="card-body">
                        <form action="busqueda.php" method="get" class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="text" name="busqueda"
                                placeholder="Escriba la entrada que desee consultar">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i value="buscar"
                                    class="fa fa-search" aria-hidden="true"></i>
                                Buscar</button>
                        </form>
                    </div>
                </div>

                <div class="card mb-3">
                  <div class="card-header text-white fondo-marca">
                        <i class="fa fa-folder" aria-hidden="true"></i> Categorias
                    </div>
                    <div class="card-body">
                        <ol class="list-unstyled mb-0">
                            <?php
try {
    require "../model/conexion.php";
    $consulta = "SELECT * FROM categorias";
    $resultado = $conexion->prepare($consulta);
    $resultado->execute(array());
    if ($resultado->rowCount() > 0) {
        while ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) {
            echo "
                <li>
                <form action='categoria.php' method='get' class='form-inline my-2 my-lg-0'>
                <button name='categoria' value='" . $registro["nombre"] . "' class='btn btn-block btn-outline-info mb-1' type='submit'>
                        " . $registro["nombre"] . "</button>
                </form>
                </li>
            ";
        }
    } else {
        echo "<div class='alert alert-success' role='alert'>
          <h4 class='alert-heading'>Sin categorias</h4>
        </div>";
    }
} catch (\Throwable $th) {
    echo "ha ocurrido un error: " . $th;
}
?>
                        </ol>
                    </div>
                </div>
                <div class="card mb-3">
                  <div class="card-header text-white fondo-marca">
                        <i class="fa fa-star" aria-hidden="true"></i> Recomendados
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Post 1</li>
                        <li class="list-group-item">Post 2</li>
                        <li class="list-group-item">Post 3</li>
                    </ul>
                </div>

                <div class="card mb-3">
                  <div class="card-header text-white fondo-marca">
                        <i class="fa fa-heart" aria-hidden="true"></i> Buscanos en nuestras redes
                    </div>
                    <div class="card-body">
                        <ol class="list-unstyled">
                            <li><a href="#"><i class="fab fa-instagram    "></i> Instagram</a></li>
                            <li><a href="#"><i class="fab fa-twitter    "></i> Twitter</a></li>
                            <li><a href="#"><i class="fab fa-facebook    "></i> Facebook</a></li>
                        </ol>
                    </div>
                </div>
            </aside><!-- /.blog-sidebar -->

        </div><!-- /.row -->

        </div><!-- /.container -->

    </main>
    <footer class="blog-footer p-3">
        <p>Pradiant, todos los derechos reservados</p>
        <p>
            <a href="#">Volver arriba</a>
        </p>
    </footer>
    <script src="../js/jquery-3.4.1.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>

</html>