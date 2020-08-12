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
        $entradas = array();
        $entrada = mt_rand(0, $num_entradas);
        array_push($entradas, $entrada);
        $i = 1;
        while ($i <= 2) {
            $entrada = mt_rand(0, $num_entradas);
            if (in_array($entrada, $entradas)) {
                continue;
            } else {
                array_push($entradas, $entrada);
                $i++;
            }
        }
        for ($i = 0; $i < 3; $i++) {
            entrada_recomendada($registros[$entradas[$i]]);
        }
    } catch (\Throwable $th) {
        echo "ha ocurrido un error: " . $th;
    }
}