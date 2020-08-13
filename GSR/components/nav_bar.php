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
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="fa fa-bars" aria-hidden="true"></i></a>
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
        </ul>
    </div>
    <div class="nav-content container">
        <ul class="tabs tabs-transparent tabs-fixed-width">
            <?php cargar_categorias($conexion, true, null)?>
        </ul>
    </div>
</nav>
<?php }