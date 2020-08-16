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
<h4 class="center white-text show-on-medium-and-down">Te recomendamos leer</h4>
<h1 class="center white-text hide-on-med-and-down">Te recomendamos leer</h1>
<?php
entradas_recomendadas($conexion);
}