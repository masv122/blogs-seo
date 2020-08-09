<?php
if (!isset($indexphp) and $indexphp !== true) {
    header('Location: /index.php');
    exit;
}
function paginacion($pagina, $total_paginas, $busqueda, $categoria)
{
    ?>
<nav aria-label="Page navigation">
    <ul class="pagination justify-content-center">
        <li class='page-item <?php if ($pagina == 1) {echo "disabled";}?>'>
            <a class='page-link'
                href='?pagina=<?php echo ($pagina - 1) ?><?php if ($busqueda) {echo "&busqueda=" . $busqueda . "";}else if ($categoria) {echo "&categoria=" . $categoria . "";} ?>'
                aria-label='Anterior'>
                <span aria-hidden='true'>&laquo;</span>
                <span class='sr-only'>Anterior</span>
            </a>
        </li>
        <?php
for ($i = 1; $i <= $total_paginas; $i++) {
        ?>
        <li class='page-item <?php if ($pagina == $i) {echo "active";}?>'>
            <a class='page-link'
                href='?pagina=<?php echo $i?><?php if ($busqueda) {echo "&busqueda=" . $busqueda . "";}else if ($categoria) {echo "&categoria=" . $categoria . "";}?>'><?php echo $i ?></a>
        </li>
        <?php
echo "\n";
    }
    ?>
        <li class='page-item <?php if ($pagina == $total_paginas) {echo "disabled";}?>'>
            <a class='page-link'
                href='?pagina=<?php echo ($pagina + 1)?><?php if ($busqueda) {echo "&busqueda=" . $busqueda . "";}else if ($categoria) {echo "&categoria=" . $categoria . "";}?>'
                aria-label='Siguiente'>
                <span aria-hidden='true'>&raquo;</span>
                <span class='sr-only'>Siguiente</span>
            </a>
        </li>
    </ul>
</nav>
<?php }