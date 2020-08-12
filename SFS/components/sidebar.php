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
<nav class="nav flex-column nav-fill pt-4 d-none" id="sidebar">
    <h3 class="text-center my-5">SFS</h3>
    <a class="nav-item nav-link mb-2 text-secondary" href="#"> Web </a>
    <a class="nav-item nav-link mb-2 text-secondary" href="#">Sobre nosotros</a>
    <a class="nav-item nav-link mb-2 text-secondary" href="#">Contactanos</a>
    <a class="nav-item nav-link mb-2 text-secondary dropdown-toggle" href="#" id="dropdownId" aria-haspopup="true"
        data-toggle="collapse" data-target="#contentId" aria-expanded="false" aria-controls="contentId">Categorias</a>
    <div class="collapse" id="contentId">
        <?php cargar_categorias($conexion, true, null)?>
    </div>
    <p class="text-center">SFS Orange, todos los derechos reservados</p>
</nav>
<?php }