<?php
if (!isset($indexphp) and $indexphp !== true) {
    header('Location: /index.php');
    exit;
}
function load_scripts()
{
    ?>
<script src="../js/jquery-3.4.1.js"></script>
<script src="../js/materialize.js"></script>
<script src="../js/prism.js"></script>
<script src="../js/init.js"></script>
<?php }