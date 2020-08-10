<?php
$indexphp = true;
$busqueda_page = true;
require_once "../model/conexion.php";
require_once "../controller/cargar_componentes.php";
require_once "../controller/entradas_busqueda.php";
if (isset($_GET["busqueda"])) {
    $busqueda = $_GET["busqueda"];
} else {
    $busqueda = null;
}
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
cuadro_busqueda($busqueda);
include_once "../controller/pagina.php";
if ($busqueda) {
    entradas_busqueda($conexion, $pagina, $busqueda);
    paginacion($pagina, $total_paginas, $busqueda, null);
} else {
    busqueda_null();
}
?>
            </div><!-- /.blog-main -->

            <aside class="col-md-4 blog-sidebar">
                <?php
cuadro_categoria($conexion, true, null);
cuadro_recomendados();
cuadro_redes();
?>
            </aside><!-- /.blog-sidebar -->

        </div><!-- /.row -->

        </div><!-- /.container -->

    </main>
    <?php
footer();
load_scripts();
?>
</body>

</html>