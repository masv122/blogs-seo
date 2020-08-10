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
<nav class="navbar navbar-expand-sm navbar-dark fondo-marca">
    <a class="navbar-brand d-flex" href="#">
        <img src="../assets/PRADIANT.png" width="50" height="50" alt="" class="mr-3">
        <h3 class="d-none d-md-block">Pradiant Análisis y Consultoria</h3>
    </a>
    <form action='busqueda.php' method='get' class='ml-auto mr-2 d-md-none'>
        <button class='btn btn-success my-2 my-sm-0' type='submit'><i value='buscar' class='fa fa-search'
                aria-hidden='true'></i>
        </button>
    </form>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
        aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"><span
            class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item <?php if ($inicio_page) {
        echo "active";
    }?>">
                <a class="nav-link" href="../index.php">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"> Web </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Sobre nosotros</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contactanos</a>
            </li>
            <li class="nav-item dropdown d-md-none">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">Categorias</a>
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                    <?php cargar_categorias($conexion, true, null)?>
                </div>
            </li>
        </ul>
    </div>
</nav>
<?php }