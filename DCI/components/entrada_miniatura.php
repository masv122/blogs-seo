<?php
if (!isset($indexphp) and $indexphp !== true) {
    header('Location: /index.php');
    exit;
}
function entrada_miniatura($registro)
{
    ?>
<div class="col-md-6">
    <div
        class="row no-gutters border rounded overflow-hidden bg-white flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-primary"><?php echo $registro["nombre_categoria"] ?></strong>
            <h3 class="mb-0"><?php echo $registro["titulo"] ?></h3>
            <div class="mb-1 text-muted"><?php echo $registro["fecha"] ?></div>
            <p class="card-text mb-auto"><?php echo $registro["resumen"] ?></p>
            <a href="<?php echo $registro["direccion"] ?>" class="stretched-link">Seguir leyendo.</a>
        </div>
        <div class="col-auto d-none d-lg-block">
            <img src="assets/placeholder.svg"
                class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
        </div>
    </div>
</div>
<?php }