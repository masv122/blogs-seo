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
    <nav class="navbar navbar-expand-sm navbar-dark fondo-marca">
        <a class="navbar-brand" href="#">
            <img src="assets/PRADIANT.png" width="50" height="50" alt="">
            Pradiant Análisis y Consultoria
        </a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
            aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="#"> Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"> Web <span class="sr-only">(current)</span></a>
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
                <div class="card bg-white shadow mb-3">
                    <div class="card-body">

                        <?php
require "modelo/conexion.php";
$categoria = $_GET["categoria"];
echo "<h2 class='blog-post-title mb-3'>Categoria: " . $categoria . "</h2>
<p class='blog-post-meta mr-2'><i class='fas fa-list    '></i> Entradas en esta categoria: #</p>
<p class='blog-post-meta mr-2'><i class='fa fa-comments' aria-hidden='true'></i> Comentarios en
    esta categoria: #</p>
</div>

</div>";
try {
    $consulta = "SELECT * FROM categorias WHERE nombre = '$categoria'";
    if (isset($_GET["pagina"])) {
        if ($_GET["pagina"] == 1) {
            header("Location:categoria.php?categoria=" . $categoria . "");
        } else {
            $pagina = $_GET["pagina"];
        }
    } else {
        $pagina = 1;
    }
    $consulta = "SELECT * FROM posts";
    $resultado = $conexion->prepare($consulta);
    $resultado->execute(array());
    $num_filas = $resultado->rowCount();
    $tamagno_paginas = 3;
    $empezar_desde = ($pagina - 1) * $tamagno_paginas;
    $total_paginas = ceil($num_filas / $tamagno_paginas);
    $consulta = "SELECT posts.*, categorias.nombre FROM posts LEFT JOIN categorias ON (posts.categoria = categorias.id) WHERE nombre = '$categoria' ORDER BY fecha DESC LIMIT $empezar_desde,$tamagno_paginas";
    $resultado = $conexion->prepare($consulta);
    $resultado->execute(array());
    if ($num_filas > 0) {
        while ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) {
            echo "<div class='card bg-white shadow mb-3'>
            <div class='card-body'>
               <h2 class='blog-post-title'>" . $registro["titulo"] . "</h2>
               <div class='d-flex'>
                   <p class='blog-post-meta mr-2'><i class='fas fa-clock    '></i> " . $registro["fecha"] . "</p>
                   <p class='blog-post-meta mr-2'><i class='fa fa-user' aria-hidden='true'></i> Fulanito</p>
                   <p class='blog-post-meta mr-2'><i class='fa fa-folder' aria-hidden='true'></i> " . $categoria . "</p>
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
                         <div class='card-footer text-muted fondo-marca'>
                                    <a name='asdasd' id='asdasd' class='btn btn-info float-right' href='" . $registro["direccion"] . "'
                                        role='button'>
                                        Leer mas <i class='fa fa-arrow-circle-right' aria-hidden='true'></i></a>
                                </div>
       </div>";
        }
    } else {
        echo "<div class='jumbotron bg-white shadow'>
            <h1 class='display-4'>Esta categoria esta vacia... Por ahora.</h1>
        </div>";
    }
} catch (\Throwable $th) {
    echo "ha ocurrido un error: " . $th;
}
?>

                        <nav aria-label="Page navigation">
                            <ul class="pagination justify-content-center">
                                <?php
echo "<li class='page-item ";
if ($pagina == 1) {
    echo "disabled";
}
echo "'>
                            <a class='page-link' href='?pagina=" . ($pagina - 1) . "&categoria=" . $categoria . "' aria-label='Anterior'>
                                <span aria-hidden='true'>&laquo;</span>
                                <span class='sr-only'>Anterior</span>
                            </a>
                        </li>";
for ($i = 1; $i <= $total_paginas; $i++) {
    echo "<li class='page-item ";
    if ($pagina == $i) {
        echo "active";
    }
    echo "'><a class='page-link' href='?pagina=" . $i . "&categoria=" . $categoria . "'>" . $i . "</a></li>";
    echo "\n";
}
echo "<li class='page-item ";
if ($pagina == $total_paginas) {
    echo "disabled";
}
echo "'>
    <a class='page-link' href='?pagina=" . ($pagina + 1) . "&categoria=" . $categoria . "' aria-label='Siguiente'>
        <span aria-hidden='true'>&raquo;</span>
        <span class='sr-only'>Siguiente</span>
    </a>";
?>
                                </li>
                            </ul>
                        </nav>
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
                            <div class="card mb-3">
                                <div class="card-header text-white fondo-marca">
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
        <p>Pradiant Análisis y Consultoria, todos los derechos reservados</p>
        <p>
            <a href="#">Volver arriba</a>
        </p>
    </footer>
    <script src="js/jquery-3.4.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>