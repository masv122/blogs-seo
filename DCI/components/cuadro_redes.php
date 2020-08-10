<?php
if (!isset($indexphp) and $indexphp !== true) {
    header('Location: /index.php');
    exit;
}
function cuadro_redes()
{
    ?>
<div class="p-4 mb-3 bg-white">
    <h4 class="font-italic">Buscanos en</h4>
    <ol class="list-unstyled">
        <li><a href="#"><i class="fab fa-instagram    "></i> Instagram</a></li>
        <li><a href="#"><i class="fab fa-twitter    "></i> Twitter</a></li>
        <li><a href="#"><i class="fab fa-facebook    "></i> Facebook</a></li>
    </ol>
</div>
<?php }