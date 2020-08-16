<?php
if (!isset($indexphp) and $indexphp !== true) {
    header('Location: /index.php');
    exit;
}
function footer()
{
    global $busqueda_page;
    ?>
<footer class="page-footer grey darken-3">
    <div class="container">
        <div class="row">
            <div class="col center s12">
                <a href="#" class="grey-text">Ir arriba <i class="fa fa-angle-up" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            Copyright by <a class="orange-text text-lighten-3" href="http://materializecss.com">WFS, todos los
                derechos reservados</a>
            <div class="grey-text text-lighten-4 right"> <?php
cuadro_redes();
    ?></div>
        </div>
    </div>
</footer>
<?php }