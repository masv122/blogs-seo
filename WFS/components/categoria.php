<?php
if (!isset($indexphp) and $indexphp !== true) {
    header('Location: /index.php');
    exit;
}
function categoria($categoria, $enlace)
{
    ?>
<div class="row">
    <div class="col s12 white-text">
        <div class="card grey darken-4 z-depth-1">
            <div class="card-content white-text">
                <span class="teal-text card-title">Categoria:
                    <?php echo $categoria["nombre"] ?></span>
                <p><i class='fas fa-list    '></i> Entradas en esta categoria:
                    <?php echo $categoria["cantidad"] ?>.</p>
            </div>
            <?php
if ($enlace) {
        ?>
            <div class="card-action">
                <a class="teal-text" href="categoria.php?categoria=<?php echo $categoria["nombre"]; ?>">Ver entradas en
                    esta categoria</a>
            </div>
            <?php }
    ?>
        </div>
    </div>
</div>
<?php }