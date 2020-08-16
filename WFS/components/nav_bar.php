<?php
if (!isset($indexphp) and $indexphp !== true) {
    header('Location: /index.php');
    exit;
}
require_once "../controller/cargar_categorias.php";
function nav_bar()
{
    global $inicio_page, $categoria_page, $conexion;
    ?>
<div class="navbar-fixed">
    <nav class="nav-extended grey darken-4">
        <div class="nav-wrapper container">
            <a href="#" class="brand-logo">WFS</a>
            <ul id="nav-mobile" class="right">
                <li><a href="busqueda.php"><i class="fa fa-search" aria-hidden="true"></i></a></li>
            </ul>

        </div>
        <div class="nav-content container">
            <ul class="tabs tabs-transparent">
                <li class="tab"><a target="_self" class="<?php if ($inicio_page) {
        echo "active";
    }?>" href="inicio.php">Inicio</a></li>
                <li class="tab"><a target="_self" class="<?php if ($categoria_page) {
        echo "active";
    }?>" href="categoria.php">Categorias</a></li>
                <li class="tab"><a href="#test2">Acerca de</a></li>
                <li class="tab"><a href="#test3">Contacto</a></li>
            </ul>
        </div>
    </nav>
</div>
<?php }