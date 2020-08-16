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
        <div class="divider"></div>
        <div class="section">
            <div class="row">
                <div class="col s12">
                    <?php
cuadro_recomendados();
?>
                </div>
            </div>
        </div>
        <div class="divider"></div>
        <div class="section">
            <div class="row">
                <h3 class="center white-text mb-5">Entradas</h3>
                <?php
include_once "../controller/pagina.php";
entradas_inicio($conexion, $pagina);
?>
            </div><!-- /.row -->
        </div>
        <div class="divider"></div>
        <div class="section">
            <div class="row">
                <?php
paginacion($pagina, $total_paginas, null, null);
?>
            </div>
        </div>
    </main>
    <?php
footer();
load_scripts();
?>
</body>

</html>