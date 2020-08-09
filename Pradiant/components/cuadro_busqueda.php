<?php
if (!isset($indexphp) and $indexphp !== true) {
    header('Location: /index.php');
    exit;
}
function cuadro_busqueda()
{
    ?>
<div class="card mb-3">
    <div class="card-header text-white fondo-marca">
        <i class="fa fa-search" aria-hidden="true"></i> Busqueda
    </div>
    <div class="card-body">
        <form action="./pages/busqueda.php" method="get" class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" name="busqueda"
                placeholder="Escriba la entrada que desee consultar">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i value="buscar" class="fa fa-search"
                    aria-hidden="true"></i>
                Buscar</button>
        </form>
    </div>
</div>
<?php }