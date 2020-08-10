<?php
if (!isset($indexphp) and $indexphp !== true) {
    header('Location: /index.php');
    exit;
}
require_once "../controller/cargar_categorias.php";
function nav_bar()
{
    global $inicio_page, $conexion;
    ?>
<header class="blog-header bg-light py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
        <div class="col-4 pt-1">
            <a class="text-muted pl-3 <?php if ($inicio_page) {
        echo "active";
    }?>" href="../index.php">Inicio</a>
        </div>
        <div class="col-4 text-center">
            <a class="blog-header-logo text-dark" href="#">DCI</a>
        </div>
        <div class="col-4 d-flex justify-content-end align-items-center pr-4">
            <form action='busqueda.php' method='get' class='mr-2'>
                <button class='btn btn-dark my-2 my-sm-0' type='submit'><i value='buscar' class='fa fa-search'
                        aria-hidden='true'></i>
                </button>
            </form>
            <div class="dropdown open">
                <button class="btn btn-dark dropdown-toggle no-" type="button" id="triggerId" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                </button>
                <div class="dropdown-menu" aria-labelledby="triggerId">
                    <a class="nav-link" href="#"> Web </a>
                    <a class="nav-link" href="#">Sobre nosotros</a>
                    <a class="nav-link" href="#">Contactanos</a>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="nav-scroller py-1 mb-2 bg-light">
    <nav class="nav d-flex justify-content-between">
        <?php cargar_categorias($conexion, true, null)?>
    </nav>
</div>
<?php }