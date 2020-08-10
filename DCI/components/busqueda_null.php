<?php
if (!isset($indexphp) and $indexphp !== true) {
    header('Location: /index.php');
    exit;
}
function busqueda_null()
{
    ?>
<div class="col-md-12">
    <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
            <h1 class="display-3">Inicia una busqueda</h1>
            <p class="lead">En esta pagina podras buscar cualquier entrada por su titulo</p>
            <hr class="my-2">
        </div>
    </div>
</div>
<?php }