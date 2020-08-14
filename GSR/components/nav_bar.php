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
<nav class="nav-extended red darken-4">
    <div class="nav-wrapper container">
        <a href="#" data-target="slide-out" class="button-collapse sidenav-trigger"><i class="fa fa-bars"
                aria-hidden="true"></i></a>
        <a id="logo-container" href="#" class="brand-logo">GSR</a>
        <ul class="right hide-on-med-and-down">
            <li class="<?php if ($inicio_page) {
        echo "active";
    }?>">
                <a href="../index.php">Inicio</a>
            </li>
            <li>
                <a href="#"> Web </a>
            </li>
            <li>
                <a href="#">Sobre nosotros</a>
            </li>
            <li>
                <a href="#">Contactanos</a>
            </li>
            <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Categorias<i
                        class="fas fa-angle-down    "></i></a></li>
        </ul>
    </div>
</nav>
<ul id="slide-out" class="sidenav">
    <li><br></li>
    <li class="<?php if ($inicio_page) {
        echo "active";
    }?>">
        <a href="../index.php">Inicio</a>
    </li>
    <li>
        <a href="#"> Web </a>
    </li>
    <li>
        <a href="#">Sobre nosotros</a>
    </li>
    <li>
        <a href="#">Contactanos</a>
    </li>
    <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
            <li>
                <a class="collapsible-header">Categorias<i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                <div class="collapsible-body">
                    <ul>
                        <?php cargar_categorias($conexion, true, null)?>
                    </ul>
                </div>
            </li>
        </ul>
    </li>
</ul>
<ul id="dropdown1" class="dropdown-content">
    <?php cargar_categorias($conexion, true, null)?>
</ul>
<?php }