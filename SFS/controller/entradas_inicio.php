<?php
if (!isset($indexphp) and $indexphp !== true) {
    header('Location: /index.php');
    exit;
}
function entradas_inicio($conexion, $pagina)
{
    global $total_paginas;
    try {
        $consulta = "SELECT * FROM posts";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(array());
        $num_filas = $resultado->rowCount();
        $tamagno_paginas = 3;
        $empezar_desde = ($pagina - 1) * $tamagno_paginas;
        $total_paginas = ceil($num_filas / $tamagno_paginas);
        $consulta = "SELECT posts.*, categorias.nombre as nombre_categoria FROM posts LEFT JOIN categorias ON (posts.categoria = categorias.id) ORDER BY fecha DESC LIMIT $empezar_desde,$tamagno_paginas";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(array());
        if ($num_filas > 0) {
            while ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) {
                entrada_miniatura($registro);
            }
        } else {
            sin_resultados("inicio");
        }
    } catch (\Throwable $th) {
        echo "ha ocurrido un error: " . $th;
    }
}
