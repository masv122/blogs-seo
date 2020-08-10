<?php
$indexphp = true;
$categoria_page = true;
require_once "../model/conexion.php";
require_once "../model/categoria_cantidad.php";
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
    <main role="main" class="container mb-3">
        <?php
nav_bar();
cuadro_recomendados();
?>
        <?php
include_once "../controller/pagina.php";
if ($categoria) {
    $categoria_objeto = categoria_cantidad($conexion, $categoria);
    ?>
        <div class="row">
            <div class="col-12 blog-main">
                <?php
categoria($categoria_objeto, false);
    ?>
            </div><!-- /.blog-main -->
        </div><!-- /.row -->
        <div class="row">
            <?php
entradas_categoria($conexion, $pagina, $categoria_objeto["id"]);
    ?>
        </div><!-- /.row -->
        <div class="row">
            <div class="col-12 blog-main">
                <?php
paginacion($pagina, $total_paginas, null, $categoria);
    ?>
            </div><!-- /.blog-main -->
        </div><!-- /.row -->
        <?php
} else {
    cargar_categorias($conexion, false, $categoria);
}
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