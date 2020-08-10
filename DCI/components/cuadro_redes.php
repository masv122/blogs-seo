<?php
if (!isset($indexphp) and $indexphp !== true) {
    header('Location: /index.php');
    exit;
}
function cuadro_redes()
{
    ?>
<div class="card mb-3">
    <div class="card-header text-white fondo-marca">
        <i class="fa fa-heart" aria-hidden="true"></i> Buscanos en nuestras redes
    </div>
    <div class="card-body">
        <ol class="list-unstyled">
            <li><a href="#"><i class="fab fa-instagram    "></i> Instagram</a></li>
            <li><a href="#"><i class="fab fa-twitter    "></i> Twitter</a></li>
            <li><a href="#"><i class="fab fa-facebook    "></i> Facebook</a></li>
        </ol>
    </div>
</div>
<?php }