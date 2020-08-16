<?php
if (!isset($indexphp) and $indexphp !== true) {
    header('Location: /index.php');
    exit;
}
function entradas_recomendadas($conexion)
{
    global $total_paginas;
    try {
        $consulta = "SELECT posts.*, categorias.nombre as nombre_categoria FROM posts LEFT JOIN categorias ON (posts.categoria = categorias.id)";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(array());
        $num_entradas = $resultado->rowCount() - 1;
        $registros = $resultado->fetchAll(PDO::FETCH_ASSOC);
        $entrada = mt_rand(0, $num_entradas);
        entrada_recomendada($registros[$entrada]);
    } catch (\Throwable $th) {
        echo "ha ocurrido un error: " . $th;
    }
}