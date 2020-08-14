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
    <main class="container">
        <div class="section">
            <div class="row">
                <?php
cuadro_busqueda($busqueda);
include_once "../controller/pagina.php";
if ($busqueda) {
    entradas_busqueda($conexion, $pagina, $busqueda);
    ?>
                <div class="row">
                    <?php
paginacion($pagina, $total_paginas, null, null);
    ?>
                </div>
                <?php
} else {
    busqueda_null();
}
?>
            </div><!-- /.blog-main -->

        </div><!-- /.row -->
    </main>
    <?php
footer();
load_scripts();
?>
</body>

</html>