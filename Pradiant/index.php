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
        <a class="navbar-brand" href="#">
            <img src="assets/PRADIANT.png" width="50" height="50" alt="">
            Pradiant Análisis y Consultoria
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
                $conexion = mysqli_connect("localhost", "root", "", "pradiant_blog");
                    if(!$conexion){
                        echo "la conexion ha fallado: " . mysqli_error();
                        exit();
                    }
                    $consulta = "SELECT * FROM posts ORDER BY fecha DESC";
                    $resultado = mysqli_query($conexion, $consulta);
                    if($resultado){
                        while($registro = mysqli_fetch_assoc($resultado)){
                            echo "<div class='card bg-white shadow mb-3'>
                                 <div class='card-body'>
                                    <h2 class='blog-post-title'>" . $registro["titulo"] . "</h2>
                                    <div class='d-flex'>
                                        <p class='blog-post-meta mr-3'><i class='fas fa-clock    '></i>" . $registro["resumen"] . "</p>
                                        <p class='blog-post-meta mr-3'><i class='fa fa-user' aria-hidden='true'></i> Fulanito</p>
                                        <p class='blog-post-meta mr-3'><i class='fa fa-folder' aria-hidden='true'></i>" . $registro["categoria"] . "</p>
                                        <p class='blog-post-meta mr-3'><i class='fa fa-comment' aria-hidden='true'></i> Comentarios
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
                                        Ir
                                        al
                                        post <i class='fa fa-arrow-circle-right' aria-hidden='true'></i></a>
                                </div>
                            </div>";
                        }
                    }
                } catch (\Throwable $th) {
                    echo"error";
                } 
                ?>
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
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
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="text"
                                placeholder="Escriba la entrada que desee consultar">
                            <a class="btn btn-outline-success my-2 my-sm-0" type="submit" role="button"
                                href="busqueda.html"><i class="fa fa-search" aria-hidden="true"></i> Buscar</a>
                        </form>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fa fa-folder" aria-hidden="true"></i> Categorias
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <ol class="list-unstyled mb-0">
                                    <li><a href="categoria.html"></a>Asesoria</li>
                                    <li><a href="categoria.html">-Administración</a></li>
                                </ol>
                            </div>
                            <div class="col-6">
                                <ol class="list-unstyled mb-0">
                                    <li><a href="#">Categoria 4</a></li>
                                    <li><a href="#">Categoria 5</a></li>
                                </ol>
                            </div>
                        </div>
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