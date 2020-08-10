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
    <main role="main" class="container mb-3">
        <?php
nav_bar();
cuadro_recomendados();
?>
        <div class="row">
            <div class="col-12 blog-main">
                <?php
cuadro_busqueda($busqueda);
include_once "../controller/pagina.php";
?>
            </div><!-- /.blog-main -->

        </div><!-- /.row -->
        <div class="row mb-2">
            <?php
if ($busqueda) {
    entradas_busqueda($conexion, $pagina, $busqueda);
} else {
    busqueda_null();
}
?>
        </div>
        <?php
paginacion($pagina, $total_paginas, $busqueda, null);
?>
        <div class="row">
            <div class="col-md-6">
                <?php
cuadro_redes();
?>
            </div>
            <div class="col-md-6">
                <?php
cuadro_acerca();
?>
            </div>

        </div><!-- /.row -->
        <?php
footer();
?>
        </div><!-- /.container -->
    </main>
    <?php
load_scripts();
?>
</body>

</html>