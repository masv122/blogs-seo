<?php
function categoria_cantidad($conexion, $categoria)
{
    try {
        $consulta = "SELECT
        categorias.*,
        COUNT(posts.categoria) AS cantidad
    FROM
        categorias
    LEFT JOIN posts ON(
            categorias.id = posts.categoria
        ) WHERE nombre = :categoria";
        $resultado = $conexion->prepare($consulta);
        $resultado->bindValue(':categoria', "{$categoria}");
        $resultado->execute();
        if ($resultado->rowCount() > 0) {
            $registro = $resultado->fetch(PDO::FETCH_ASSOC);
            return $registro;

        } else {
            sin_resultados("categoria");
        }
    } catch (\Throwable $th) {
        echo "ha ocurrido un error: " . $th;
    }
}
