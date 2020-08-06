<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/all.min.css">
    <title>Pradiant blog</title>
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-light bg-white">
        <a class="navbar-brand d-flex" href="#">
            <img src="assets/PRADIANT.png" width="50" height="50" alt="" class="mr-3">
            <h2>Pradiant Análisis y Consultoria</h2>
        </a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
            aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="#"><i class="fa fa-home" aria-hidden="true"></i> Inicio <span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-external-link-alt    "></i> Web <span
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
    <main role="main" class="container mb-3">
        <div class="row">
            <div class="col-md-8 blog-main">
                <?php
try {
    require "modelo/conexion.php";
    $consulta = "SELECT posts.*, categorias.nombre FROM posts LEFT JOIN categorias ON (posts.categoria = categorias.id) ORDER BY fecha DESC LIMIT 0,3";
    $resultado = $conexion->prepare($consulta);
    echo $resultado;
    $resultado->execute(array());
    $num_filas = $resultado->rowCount();
    if ($num_filas > 0) {
        while ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) {
            echo "<div class='card bg-white shadow mb-3'>
                                 <div class='card-body'>
                                    <h2 class='blog-post-title'>" . $registro["titulo"] . "</h2>
                                    <div class='d-flex'>
                                        <p class='blog-post-meta mr-2'><i class='fas fa-clock    '></i> " . $registro["fecha"] . "</p>
                                        <p class='blog-post-meta mr-2'><i class='fa fa-user' aria-hidden='true'></i> Fulanito</p>
                                        <p class='blog-post-meta mr-2'><i class='fa fa-folder' aria-hidden='true'></i> " . $registro["nombre"] . "</p>
                                        <p class='blog-post-meta mr-2'><i class='fa fa-comment' aria-hidden='true'></i> Comentarios
                                        </p>
                                    </div>

                                    <div class='container'>
                                        <div class='row'>
                                            <div class='col-6 border'>
                                                <h6>Imagen</h6>
                                            </div>
                                            <div class='col-6'>
                                                <p class='card-text'>" . $registro["resumen"] . "</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class='card-footer text-muted'>
                                    <a name='asdasd' id='asdasd' class='btn btn-dark float-right' href='" . $registro["direccion"] . "'
                                        role='button'>
                                        Leer mas
                                        post <i class='fa fa-arrow-circle-right' aria-hidden='true'></i></a>
                                </div>
                            </div>";
        }
    } else {
        echo "<div class='jumbotron'>
            <h1 class='display-3'>Sin publicaciones</h1>
            <p class='lead'>Jumbo helper text</p>
            <hr class='my-2'>
            <p>More info</p>
            <p class='lead'>
                <a class='btn btn-primary btn-lg' href='Jumbo action link' role='button'>Jumbo action name</a>
            </p>
        </div>";
    }
} catch (\Throwable $th) {
    echo "ha ocurrido un error: " . $th;
}
?>
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" aria-label="Anterior">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Anterior</span>
                            </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Siguiente">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Siguiente</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div><!-- /.blog-main -->

            <aside class="col-md-4 blog-sidebar">
                <div class="card mb-3">
                    <div class="card-header">
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
                    <div class="card-header">
                        <i class="fa fa-folder" aria-hidden="true"></i> Categorias
                    </div>
                    <div class="card-body">
                        <ol class="list-unstyled mb-0">
                            <?php
try {
    require "modelo/conexion.php";
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
                    <div class="card-header">
                        <i class="fa fa-star" aria-hidden="true"></i> Recomendados
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Post 1</li>
                        <li class="list-group-item">Post 2</li>
                        <li class="list-group-item">Post 3</li>
                    </ul>
                </div>

                <div class="card mb-3">
                    <div class="card-header">
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
        <p>Pradiant Análisis y Consultoria, todos los derechos reservados</p>
        <p>
            <a href="#">Volver arriba</a>
        </p>
    </footer>
    <script src="js/jquery-3.4.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>