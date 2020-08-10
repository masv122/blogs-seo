<?php
if (!isset($indexphp) and $indexphp !== true) {
    header('Location: /index.php');
    exit;
}
function entrada_recomendada($entrada)
{
    ?>
<div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
        <h4 class="display-5 font-italic">Te recomendamos leer</h4>
        <h1 class="display-4 font-italic"><?php echo $entrada["titulo"] ?></h1>
        <small><?php echo $entrada["fecha"] ?></small>
        <p class="lead my-3"><?php echo $entrada["resumen"] ?></p>
        <p class="lead mb-0"><a href="<?php echo $entrada["direccion"] ?>" class="text-white font-weight-bold">Seguir
                leyendo...</a></p>
    </div>
</div>
<?php }