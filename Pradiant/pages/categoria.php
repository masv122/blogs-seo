<?php
$indexphp = true;
$categoria_page = true;
require_once "../model/conexion.php";
require_once "../controller/cargar_componentes.php";
require_once "../controller/entradas_categoria.php";
if (isset($_GET["categoria"])) {
    $categoria = $_GET["categoria"];
} else {
    $categoria = null;
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
include_once "../controller/pagina.php";
if ($categoria) {
    categoria($categoria, false);
    entradas_categoria($conexion, $pagina, $categoria);
    paginacion($pagina, $total_paginas, null, $categoria);
} else {
    cuadro_categoria($conexion, false);
}
?>
            </div><!-- /.blog-main -->

            <aside class="col-md-4 blog-sidebar">
                <?php
cuadro_busqueda(null);
if ($categoria) {
    cuadro_categoria($conexion, true);
}
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