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
sidebar();
?>
    <main role="main" class="container-fluid mb-3" id="main">
        <div class="row">
            <aside class="d-none d-lg-block col-md-2 bg-light" id="sidebar-left">
                <?php
nav_lateral();
?>
            </aside>
            <div class="col-12 col-lg-10 pt-1" id="content-pane">
                <?php
nav_bar();
?>
                <div class="row">
                    <div class="col-md-9 blog-main">
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

                    <aside class="col-md-3 blog-sidebar pt-5">
                        <?php
cuadro_recomendados();
cuadro_redes();
?>
                    </aside><!-- /.blog-sidebar -->
                </div>

            </div>

        </div><!-- /.row -->

        </div><!-- /.container -->

    </main>
    <?php
load_scripts();
?>
</body>

</html>