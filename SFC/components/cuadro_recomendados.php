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
<div class="card mb-3 border-0">
    <div class="card-header bg-white border-bottom border-secondary">
        <h6>Te podria interesar</h6>
    </div>
    <br>
    <?php
entradas_recomendadas($conexion);
    ?>
</div>
<?php }