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
include_once "../controller/pagina.php";
if ($categoria) {
    $categoria_objeto = categoria_cantidad($conexion, $categoria);
    categoria($categoria_objeto, false);
    entradas_categoria($conexion, $pagina, $categoria_objeto["id"]);
    paginacion($pagina, $total_paginas, null, $categoria);
} else {
    cuadro_categoria($conexion, false, $categoria);
}
?>
                        </div><!-- /.blog-main -->

                        <aside class="col-md-3 blog-sidebar pt-5">
                            <?php
cuadro_busqueda(null);
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