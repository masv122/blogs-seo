<?php
if (!isset($indexphp) and $indexphp !== true) {
    header('Location: /index.php');
    exit;
}
function cuadro_categoria($conexion, $miniatura, $categoria)
{
    ?>
<div class="card mb-3 border-0 d-none d-md-block">
    <?php
if ($miniatura) {
        ?>
    <div class="card-header text-white fondo-marca">
        <i class="fa fa-folder" aria-hidden="true"></i> Categorias
    </div>

    <?php
}?>
    <div class="list-group">
        <?php
cargar_categorias($conexion, $miniatura, $categoria);
    ?>
    </div>
</div>
<?php }