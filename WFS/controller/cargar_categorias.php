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
<div class="row">
    <div class="col s12 m6 offset-m3 red darken-4 z-depth-1">
        <div class="card red darken-4 z-depth-0">
            <div class="card-content white-text">
                <p>
                    Sin categorias.
                </p>
            </div>
        </div>
    </div>
</div>
<?php
}
    } catch (\Throwable $th) {
        echo "ha ocurrido un error: " . $th;
    }
    ?>
<?php }