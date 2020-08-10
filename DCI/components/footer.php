<?php
if (!isset($indexphp) and $indexphp !== true) {
    header('Location: /index.php');
    exit;
}
function footer()
{
    ?>
<footer class="pt-3 px-3 bg-dark text-white">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p>DCI, todos los derechos reservados</p>
                <p>
            </div>

        </div>
    </div>
    </p>
</footer>
<?php }