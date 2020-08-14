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
    <?php
nav_bar();
?>
    <br>
    <br>
    <main class="container">
        <div class="section">
            <div class="row">
                <?php
include_once "../controller/pagina.php";
if ($categoria) {
    $categoria_objeto = categoria_cantidad($conexion, $categoria);
    categoria($categoria_objeto, false);
    entradas_categoria($conexion, $pagina, $categoria_objeto["id"]);
    ?>
            </div><!-- /.row -->
            <div class="row">
                <?php
paginacion($pagina, $total_paginas, null, null);
    ?>
            </div>
            <?php
} else {
    cuadro_categoria($conexion, false, $categoria);
}
?>
        </div><!-- /.container -->
    </main>
    <?php
footer();
load_scripts();
?>
</body>

</html>