<?php
if (!isset($indexphp) and $indexphp !== true) {
    header('Location: /index.php');
    exit;
}
require_once "../controller/cargar_categorias.php";
function nav_bar()
{
    global $inicio_page, $categoria_page, $busqueda_page, $conexion;
    ?>
<nav class="navbar navbar-expand-sm navbar-light mb-4">
    <button type="button" class="btn btn-outline-secondary border-0 mr-3 d-lg-none sidebar-toggler"><i
            class="fa fa-bars" aria-hidden="true"></i></button>
    <a class="navbar-brand d-flex">
        <h4>
            <?php
if ($inicio_page) {
        echo "Inicio";
    } else if ($busqueda_page) {
        echo "Busqueda";
    } else {
        echo "Categoria";
    }

    ?>
        </h4>
    </a>
    <ul class="navbar-nav ml-auto mt-1 mt-lg-0">
        <li class="nav-item <?php if ($inicio_page) {
        echo "active";
    }?>">
            <a class="nav-link text-secondary" href="../index.php"><i class="fa fa-home" aria-hidden="true"></i></a>
        </li>
    </ul>
</nav>
<?php }