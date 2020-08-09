<?php
if (!isset($indexphp) and $indexphp !== true) {
    header('Location: /index.php');
    exit;
}
function cuadro_recomendados()
{
    ?>
<div class="card mb-3">
    <div class="card-header text-white fondo-marca">
        <i class="fa fa-star" aria-hidden="true"></i> Recomendados
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">Post 1</li>
        <li class="list-group-item">Post 2</li>
        <li class="list-group-item">Post 3</li>
    </ul>
</div>
<?php }