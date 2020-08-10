<?php
if (!isset($indexphp) and $indexphp !== true) {
    header('Location: /index.php');
    exit;
}
function cuadro_categoria($conexion, $miniatura, $categoria)
{
    cargar_categorias($conexion, $miniatura, $categoria);
    ?>
<?php }