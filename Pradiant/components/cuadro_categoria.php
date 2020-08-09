<?php
if (!isset($indexphp) and $indexphp !== true) {
    header('Location: /index.php');
    exit;
}
function cuadro_categoria($conexion, $miniatura)
{
    ?>
<div class="card mb-3">
    <?php
if ($miniatura) {
        ?>
    <div class="card-header text-white fondo-marca">
        <i class="fa fa-folder" aria-hidden="true"></i> Categorias
    </div>

    <?php
}?>
    <div class="card-body">
        <ol class="list-unstyled mb-0">
            <?php
try {
        $consulta = "SELECT * FROM categorias";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(array());
        if ($resultado->rowCount() > 0) {
            while ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) {
                if ($miniatura) {
                    categoria_miniatura($registro);
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
        </ol>
    </div>
</div>
<?php }