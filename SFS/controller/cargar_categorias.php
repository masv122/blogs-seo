<?php
if (!isset($indexphp) and $indexphp !== true) {
    header('Location: /index.php');
    exit;
}
function cargar_categorias($conexion, $miniatura, $categoria)
{
    try {
        $consulta = "SELECT
        categorias.*,
        COUNT(posts.categoria) AS cantidad
    FROM
        categorias
    LEFT JOIN posts ON(
            categorias.id = posts.categoria
        )
    GROUP BY
        categorias.id";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(array());
        if ($resultado->rowCount() > 0) {
            while ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) {
                if ($miniatura) {
                    categoria_miniatura($registro, $categoria);
                } else {
                    categoria($registro, true);
                }

            }
        } else {
            ?>
<div class='alert alert-success' role='alert'>
    <h4 class='alert-heading'>Sin categorias</h4>
</div>"
<?php
}
    } catch (\Throwable $th) {
        echo "ha ocurrido un error: " . $th;
    }
    ?>
<?php }