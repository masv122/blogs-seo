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
    <main role="main" class="container-fluid mb-3">
        <div class="row">
            <aside class="col-md-2 bg-light">
                <?php
nav_lateral();
?>
            </aside>
            <div class="col-md-10 pt-3">
                <?php
nav_bar();
?>
                <div class="row">
                    <div class="col-md-9 blog-main">
                        <?php
include_once "../controller/pagina.php";
entradas_inicio($conexion, $pagina);
paginacion($pagina, $total_paginas, null, null);
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