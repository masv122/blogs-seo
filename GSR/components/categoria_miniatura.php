<?php
if (!isset($indexphp) and $indexphp !== true) {
    header('Location: /index.php');
    exit;
}
function categoria_miniatura($categoria_registro, $categoria)
{
    ?>
<li class="tab col s2 <?php if ($categoria == $categoria_registro["nombre"]) {echo "active";}?>">
    <a
        href="categoria.php?categoria=<?php echo $categoria_registro["nombre"]; ?>"><?php echo $categoria_registro["nombre"] ?></a>
</li>
<?php }