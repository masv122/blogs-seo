<?php
if (!isset($indexphp) and $indexphp !== true) {
    header('Location: /index.php');
    exit;
}
require_once "../controller/cargar_categorias.php";
function sidebar()
{
    global $inicio_page, $conexion;
    ?>
<div class="d-none" id="sidebar">
    <button type="button" class="btn btn-outline-secondary border-0 mr-1 sidebar-toggler float-right"><i
            class="fa fa-chevron-left" aria-hidden="true"></i></button>
    <h3 class="text-center my-5">
        SFS</h3>
    <nav class="nav flex-column nav-fill pt-4 mb-5">
        <a class="nav-item nav-link mb-2 text-secondary" href="#"> Web </a>
        <a class="nav-item nav-link mb-2 text-secondary" href="#">Sobre nosotros</a>
        <a class="nav-item nav-link mb-2 text-secondary" href="#">Contactanos</a>
        <a class="nav-item nav-link mb-2 text-secondary dropdown-toggle" href="#" id="dropdownId" aria-haspopup="true"
            data-toggle="collapse" data-target="#contentId" aria-expanded="false"
            aria-controls="contentId">Categorias</a>
        <div class="collapse" id="contentId">
            <?php cargar_categorias($conexion, true, null)?>
        </div>
    </nav>
    <p class="text-center creditos pt-5">SFS Orange, todos los derechos reservados</p>
</div>
<?php }