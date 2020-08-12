<?php
if (!isset($indexphp) and $indexphp !== true) {
    header('Location: /index.php');
    exit;
}
function inicio_sin_entradas()
{
    ?>
<h1 class='display-4'>
    No se han subido post aun...
</h1>
<?php
}
function categoria_sin_entradas()
{
    ?>
<h1 class='display-4'>
    Esta categoria esta vacia... Por ahora.
</h1>
<?php
}
function busqueda_sin_resultados()
{
    ?>
<h1 class='display-4'>Upss... Nada por aqui.</h1>
<p class='lead'>Intenta con otra palabra clave.</p>
<?php
}
function sin_resultados($tipo)
{
    ?>
<div class='jumbotron bg-white shadow'>
    <?php
switch ($tipo) {
        case 'inicio':
            inicio_sin_entradas();
            break;
        case 'busqueda':
            busqueda_sin_resultados();
            break;
        case 'categoria':
            categoria_sin_entradas();
            break;
        default:
            break;
    }
    ?>
</div>
<?php }