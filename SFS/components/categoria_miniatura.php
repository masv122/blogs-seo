<?php
if (!isset($indexphp) and $indexphp !== true) {
    header('Location: /index.php');
    exit;
}
function categoria_miniatura($categoria_registro, $categoria)
{
    ?>
<a href="categoria.php?categoria=<?php echo $categoria_registro["nombre"]; ?>"
    class="list-group-item list-group-item-action d-flex justify-content-between align-items-center <?php if ($categoria == $categoria_registro["nombre"]) {?>active<?php }?>"><?php echo $categoria_registro["nombre"]; ?>
    <span class="badge badge-secondary"><?php echo $categoria_registro["cantidad"]; ?></span>
</a>
<?php }