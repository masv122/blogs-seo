<?php
$indexphp = true;
$inicio_page = true;
require_once "../model/conexion.php";
require_once "../controller/cargar_componentes.php";
require_once "../controller/entradas_inicio.php";
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
                    <div class="col-md-9 blog-main" id="content-center">
                        <?php
include_once "../controller/pagina.php";
entradas_inicio($conexion, $pagina);
paginacion($pagina, $total_paginas, null, null);
?>
                    </div><!-- /.blog-main -->
                    <aside class="col-md-3 blog-sidebar pt-5" id="sidebar-right">
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