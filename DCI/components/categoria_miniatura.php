<?php
if (!isset($indexphp) and $indexphp !== true) {
    header('Location: /index.php');
    exit;
}
function categoria_miniatura($categoria_registro, $categoria)
{
    ?>
<a href="categoria.php?categoria=<?php echo $categoria_registro["nombre"]; ?>"
    class="p-2 text-muted <?php if ($categoria == $categoria_registro["nombre"]) {?>active<?php }?>"><?php echo $categoria_registro["nombre"]; ?>
</a>
<?php }