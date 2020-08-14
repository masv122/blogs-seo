<?php
if (!isset($indexphp) and $indexphp !== true) {
    header('Location: /index.php');
    exit;
}
function footer()
{
    global $busqueda_page;
    ?>
<footer class="page-footer red darken-4">
    <div class="container">
        <div class="row">
            <div class="col l3 s12">
                <?php
if (!$busqueda_page) {
        cuadro_busqueda(null);
    }
    ?>
            </div>
            <div class="col l4 s12 offset-l2">
                <h5 class="white-text">Mapa del sitio</h5>
                <ul>
                    <li><a class="white-text" href="#!">Acerca de</a></li>
                    <li><a class="white-text" href="#!">Equipo</a></li>
                </ul>
            </div>
            <div class="col l3 s12">
                <?php
cuadro_redes();
    ?>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            Copyright by <a class="orange-text text-lighten-3" href="http://materializecss.com">GSR, todos los
                derechos reservados</a>
            <a class="grey-text text-lighten-4 right" href="#">ir arriba</a>
        </div>
    </div>
</footer>
<?php }