<?php
if (!isset($indexphp) and $indexphp !== true) {
    header('Location: /index.php');
    exit;
}
function paginacion($pagina, $total_paginas, $busqueda, $categoria)
{
    ?>
<ul class="pagination center">
    <li class="<?php if ($pagina == 1) {echo "disabled";} else {echo "waves-effect";}?>">
        <a class="<?php if ($pagina != 1) {echo "white-text";}?>"
            href="?pagina=<?php echo ($pagina - 1) ?><?php if ($busqueda) {echo "&busqueda=" . $busqueda . "";} else if ($categoria) {echo "&categoria=" . $categoria . "";}?>"><i
                class="fa fa-chevron-left" aria-hidden="true"></i></a></li>
    <?php
for ($i = 1; $i <= $total_paginas; $i++) {
        ?>
    <li class="<?php if ($pagina == $i) {echo "active";} else {echo "waves-effect";}?>"><a class="white-text"
            href="?pagina=<?php echo $i ?><?php if ($busqueda) {echo "&busqueda=" . $busqueda . "";} else if ($categoria) {echo "&categoria=" . $categoria . "";}?>"><?php echo $i ?></a>
    </li>
    <?php
echo "\n";
    }
    ?>
    <li
        class="<?php if ($pagina == $total_paginas || $total_paginas == 0) {echo "disabled";} else {echo "waves-effect";}?>">
        <a class="<?php if (!($pagina == $total_paginas || $total_paginas == 0)) {echo "white-text";}?>"
            href="?pagina=<?php echo ($pagina + 1) ?><?php if ($busqueda) {echo "&busqueda=" . $busqueda . "";} else if ($categoria) {echo "&categoria=" . $categoria . "";}?>"><i
                class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
</ul>
<?php }