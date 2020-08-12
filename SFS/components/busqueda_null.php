<?php
if (!isset($indexphp) and $indexphp !== true) {
    header('Location: /index.php');
    exit;
}
function busqueda_null()
{
    ?>
<div class="jumbotron bg-white">
    <h1 class="display-3">Inicia una busqueda</h1>
    <p class="lead">En esta pagina podras buscar cualquier entrada por su titulo</p>
    <hr class="my-2">
</div>
<?php }