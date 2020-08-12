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
<nav class="navbar navbar-expand-sm navbar-light>
    <a class=" navbar-brand d-flex" href="#">
    <h4 class="d-none d-md-block">Inicio</h4>
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
                <a class="nav-link text-secondary" href="../index.php"><i class="fa fa-home" aria-hidden="true"></i></a>
            </li>
        </ul>
    </div>
</nav>
<?php }