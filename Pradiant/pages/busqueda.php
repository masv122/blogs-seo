<!DOCTYPE html>
<html lang="es">

<?php
include "components/head.php";
?>

<body>
    <?php
include "components/header.php";
?>
    <br>
    <br>
    <main role="main" class="container mb-3">
        <div class="row">
            <div class="col-md-8 blog-main">
                <div class="card bg-white shadow mb-3">
                    <div class="card-body">
                        <h2 class="blog-post-title">Busqueda</h2>
                        <?php
$busqueda = $_GET["busqueda"];
echo "<form action='busqueda.php' method='get' class='form-inline my-2 my-lg-0'>
<input class='form-control mr-sm-2' type='text' name='busqueda'
    value='" . $busqueda . "'>
<button class='btn btn-outline-success my-2 my-sm-0' type='submit'><i value='buscar'
        class='fa fa-search' aria-hidden='true'></i>
    Buscar</button>
</form>
                    </div>

                </div>";
try {
    require "modelo/conexion.php";
    require "components/sin_resultados.php";
    if (isset($_GET["pagina"])) {
        if ($_GET["pagina"] == 1) {
            header("Location:busqueda.php");
        } else {
            $pagina = $_GET["pagina"];
        }
    } else {
        $pagina = 1;
    }
    $consulta = "SELECT * FROM posts WHERE titulo LIKE '%$busqueda%'";
    $resultado = $conexion->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $resultado = $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $resultado = $conexion->prepare($consulta);
    $resultado->bindParam(':busqueda', $busqueda, PDO::PARAM_STR, 20);
    $resultado->execute(array());
    $num_filas = $resultado->rowCount();
    $tamagno_paginas = 3;
    $empezar_desde = ($pagina - 1) * $tamagno_paginas;
    $total_paginas = ceil($num_filas / $tamagno_paginas);
    $consulta = "SELECT posts.*, categorias.nombre FROM posts LEFT JOIN categorias ON (posts.categoria = categorias.id) WHERE titulo LIKE '%$busqueda%' ORDER BY fecha DESC LIMIT $empezar_desde,$tamagno_paginas";
    $resultado = $conexion->prepare($consulta);
    $resultado->execute(array());
    if ($num_filas > 0) {
        while ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) {
            echo "";
        }
    } else {
        sin_resultados("busqueda");
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
                            <a class='page-link' href='?pagina=" . ($pagina - 1) . "&busqueda=" . $busqueda . "' aria-label='Anterior'>
                                <span aria-hidden='true'>&laquo;</span>
                                <span class='sr-only'>Anterior</span>
                            </a>
                        </li>";
for ($i = 1; $i <= $total_paginas; $i++) {
    echo "<li class='page-item ";
    if ($pagina == $i) {
        echo "active";
    }
    echo "'><a class='page-link' href='?pagina=" . $i . "&busqueda=" . $busqueda . "'>" . $i . "</a></li>";
    echo "\n";
}
echo "<li class='page-item ";
if ($pagina == $total_paginas) {
    echo "disabled";
}
echo "'>
    <a class='page-link' href='?pagina=" . ($pagina + 1) . "&busqueda=" . $busqueda . "' aria-label='Siguiente'>
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