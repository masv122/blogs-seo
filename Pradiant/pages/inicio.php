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
nav_bar();
?>
    <br>
    <br>
    <main role="main" class="container mb-3">
        <div class="row">
            <div class="col-md-8 blog-main">
                <?php
include_once "../controller/pagina.php";
entradas_inicio($conexion, $pagina);
paginacion($pagina, $total_paginas, null, null);
?>
            </div><!-- /.blog-main -->

            <aside class="col-md-4 blog-sidebar">
                <?php
cuadro_busqueda(null);
cuadro_categoria($conexion, true);
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