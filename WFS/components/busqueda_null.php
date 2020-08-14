<?php
if (!isset($indexphp) and $indexphp !== true) {
    header('Location: /index.php');
    exit;
}
function busqueda_null()
{
    ?>
<div class="row">
    <div class="col s12 m6 offset-m3 red darken-4 z-depth-1">
        <div class="card red darken-4 z-depth-0">
            <div class="card-content white-text">
                <span class="card-title">Inicia una busqueda</span>
                <p>En esta pagina podras buscar cualquier entrada por su titulo</p>
            </div>
        </div>
    </div>
</div>
<?php }