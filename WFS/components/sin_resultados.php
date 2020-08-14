<?php
if (!isset($indexphp) and $indexphp !== true) {
    header('Location: /index.php');
    exit;
}
function inicio_sin_entradas()
{
    ?>
<p>
    No se han subido post aun...
</p>
<?php
}
function categoria_sin_entradas()
{
    ?>
<p>
    Esta categoria esta vacia... Por ahora.
</p>
<?php
}
function busqueda_sin_resultados()
{
    ?>
<span class="card-title">Upss... Nada por aqui.</span>
<p>Intenta con otra palabra clave.</p>
<?php
}
function sin_resultados($tipo)
{
    ?>
<div class="row">
    <div class="col s12 m6 offset-m3 red darken-4 z-depth-1">
        <div class="card red darken-4 z-depth-0">
            <div class="card-content white-text">
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
        </div>
    </div>
</div>
<?php }