<?php
if (!isset($indexphp) and $indexphp !== true) {
    header('Location: /index.php');
    exit;
}
function cuadro_redes()
{
    ?>
<div class="card mb-3 border-0">
    <div class="card-header bg-white border-bottom border-secondary">
        <h6> Buscanos en nuestras redes</h6>
    </div>
    <br>
    <div>
        <a name="" id="" class="btn btn-secondary rounded-circle" href="#" role="button"><i
                class="fab fa-facebook    "></i></a>
        <a name="" id="" class="btn btn-secondary rounded-circle" href="#" role="button"><i
                class="fab fa-twitter    "></i>
        </a></a>
        <a name="" id="" class="btn btn-secondary rounded-circle" href="#" role="button"><i
                class="fab fa-instagram    "></i>
        </a></a>
    </div>
</div>
<?php }