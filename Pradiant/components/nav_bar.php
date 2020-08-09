<?php
if (!isset($indexphp) and $indexphp !== true) {
    header('Location: /index.php');
    exit;
}
function nav_bar()
{
    ?>
<nav class="navbar navbar-expand-sm navbar-dark fondo-marca">
    <a class="navbar-brand d-flex" href="#">
        <img src="assets/PRADIANT.png" width="50" height="50" alt="" class="mr-3">
        <h2>Pradiant Análisis y Consultoria</h2>
    </a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
        aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"></button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"> Web <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Sobre nosotros</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contactanos</a>
            </li>
        </ul>
    </div>
</nav>
<?php }