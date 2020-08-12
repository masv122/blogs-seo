<?php
if (!isset($indexphp) and $indexphp !== true) {
    header('Location: /index.php');
    exit;
}
function entrada_recomendada($entrada)
{
    ?>
<a href="<?php echo $entrada["direccion"] ?>"
    class="list-group-item list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
        <h5 class="mb-1"><?php echo $entrada["titulo"] ?></h5>
        <small><?php echo $entrada["fecha"] ?></small>
    </div>
    <!-- <p class="mb-1">Paragraph</p> -->
    <small><?php echo $entrada["nombre_categoria"] ?></small>
</a>
<?php }