<?php
$indexphp = true;
$inicio_page = true;
require_once "../model/conexion.php";
require_once "../controller/cargar_componentes.php";
require_once "../controller/entradas_inicio.php";
include_once "../controller/pagina.php";
?>
<!DOCTYPE html>
<html lang="es">
<?php
head();
?>

<body>
    <main role="main" class="container">
        <?php
nav_bar();
cuadro_recomendados();
?>
        <div class="row mb-2">
            <?php
entradas_inicio($conexion, $pagina);
?>
        </div>
        <?php
paginacion($pagina, $total_paginas, null, null);
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
            <aside class="col-md-4 blog-sidebar">
            </aside><!-- /.blog-sidebar -->

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