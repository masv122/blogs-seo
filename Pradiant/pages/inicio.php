<?php
$indexphp = true;
require_once "../components/head.php";
require_once "../modelo/conexion.php";
require_once "../components/entrada_miniatura.php";
require_once "../components/sin_resultados.php";
require_once "../components/paginacion.php";
require_once "../components/cuadro_busqueda.php";
require_once "../components/nav_bar.php";
require_once "../components/cuadro_categoria.php";

?>
<!DOCTYPE html>
<html lang="es">
<?php
head();
?>

<body>
    <?php
nav_bar();
?>
    <br>
    <br>
    <main role="main" class="container mb-3">
        <div class="row">
            <div class="col-md-8 blog-main">
                <?php
try {

    if (isset($_GET["pagina"])) {
        if ($_GET["pagina"] == 1) {
            header("Location:index.php");
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
    $consulta = "SELECT posts.*, categorias.nombre FROM posts LEFT JOIN categorias ON (posts.categoria = categorias.id) ORDER BY fecha DESC LIMIT $empezar_desde,$tamagno_paginas";
    $resultado = $conexion->prepare($consulta);
    $resultado->execute(array());
    if ($num_filas > 0) {
        while ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) {
            entrada_miniatura($registro);
        }
    } else {
        sin_resultados("inicio");
    }
} catch (\Throwable $th) {
    echo "ha ocurrido un error: " . $th;
}
paginacion($pagina, $total_paginas);
?>
            </div><!-- /.blog-main -->

            <aside class="col-md-4 blog-sidebar">
                <?php
cuadro_busqueda();
cuadro_categoria($conexion);
?>


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