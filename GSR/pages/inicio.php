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
    <main class="container">
        <div class="section">
            <div class="row">
                <?php
include_once "../controller/pagina.php";
entradas_inicio($conexion, $pagina);
?>

                <!-- <aside class="col-md-4 blog-sidebar">
                    <?php
// cuadro_busqueda(null);
// cuadro_categoria($conexion, true, null);
// cuadro_recomendados();
// cuadro_redes();
?>
                </aside>/.blog-sidebar -->

            </div><!-- /.row -->
            <div class="row">
                <?php
paginacion($pagina, $total_paginas, null, null);
?>
            </div>
        </div><!-- /.container -->
    </main>
    <?php
footer();
load_scripts();
?>
</body>

</html>