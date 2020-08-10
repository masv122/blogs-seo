<?php
if (!isset($indexphp) and $indexphp !== true) {
    header('Location: /index.php');
    exit;
}
function cuadro_acerca()
{
    ?>
<div class="p-4 mb-3 bg-light rounded">
    <h4 class="font-italic">Acerca de</h4>
    <p class="mb-0">Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit
        amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
</div>
<?php }