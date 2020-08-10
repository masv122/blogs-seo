<?php
if (!isset($indexphp) and $indexphp !== true) {
    header('Location: /index.php');
    exit;
}
require_once "../controller/entradas_recomendadas.php";
function cuadro_recomendados()
{
    global $conexion;
    entradas_recomendadas($conexion);
    ?>

<?php }