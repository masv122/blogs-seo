<?php
if (!isset($indexphp) and $indexphp !== true) {
    header('Location: /index.php');
    exit;
}
require_once "../controller/entradas_recomendadas.php";
function cuadro_recomendados()
{
    global $conexion;
    ?>
<div class="card mb-3">
    <div class="card-header text-white fondo-marca">
        <i class="fa fa-star" aria-hidden="true"></i> Te podria interesar
    </div>
    <div class="list-group">
        <?php
entradas_recomendadas($conexion);
    ?>
    </div>
</div>
<?php }