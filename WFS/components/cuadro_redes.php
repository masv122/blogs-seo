<?php
if (!isset($indexphp) and $indexphp !== true) {
    header('Location: /index.php');
    exit;
}
function cuadro_redes()
{
    ?>
<a href="#" class="white-text right pr-3"><i class="fab fa-instagram    "></i></a>
<a href="#" class="white-text right pr-3"><i class="fab fa-twitter    "></i></a>
<a href="#" class="white-text right pr-3"><i class="fab fa-facebook    "></i></a>
<?php }