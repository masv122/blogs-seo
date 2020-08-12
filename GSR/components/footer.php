<?php
if (!isset($indexphp) and $indexphp !== true) {
    header('Location: /index.php');
    exit;
}
function footer()
{
    ?>
<footer class="blog-footer p-3">
    <p>Pradiant Análisis y Consultoria, todos los derechos reservados</p>
    <p>
        <a href="#">Volver arriba</a>
    </p>
</footer>
<?php }