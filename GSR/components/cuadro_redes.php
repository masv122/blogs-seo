<?php
if (!isset($indexphp) and $indexphp !== true) {
    header('Location: /index.php');
    exit;
}
function cuadro_redes()
{
    ?>
<h5 class="white-text">Siguenos en nuestras redes</h5>
<ul>
    <li><a href="#" class="white-text"><i class="fab fa-instagram    "></i> Instagram</a></li>
    <li><a href="#" class="white-text"><i class="fab fa-twitter    "></i> Twitter</a></li>
    <li><a href="#" class="white-text"><i class="fab fa-facebook    "></i> Facebook</a></li>
</ul>
<?php }