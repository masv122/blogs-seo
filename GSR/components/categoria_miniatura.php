<?php
if (!isset($indexphp) and $indexphp !== true) {
    header('Location: /index.php');
    exit;
}
function categoria_miniatura($categoria_registro, $categoria)
{
    ?>
<li class="tab <?php if ($categoria == $categoria_registro["nombre"]) {?>active<?php }?>"><a
        href="#test1"><?php echo $categoria_registro["nombre"] ?></a>
</li>
<?php }