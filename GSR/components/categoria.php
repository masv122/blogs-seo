<?php
if (!isset($indexphp) and $indexphp !== true) {
    header('Location: /index.php');
    exit;
}
function categoria($categoria, $enlace)
{
    ?>
<div class="row">
    <div class="col s12 m10 offset-m1 white-text red darken-4 z-depth-1">
        <div class="card red darken-4 z-depth-0">
            <div class="card-content white-text">
                <span class="card-title">Categoria:
                    <?php echo $categoria["nombre"] ?></span>
                <p><i class='fas fa-list    '></i> Entradas en esta categoria:
                    <?php echo $categoria["cantidad"] ?>.</p>
            </div>
            <?php
if ($enlace) {
        ?>
            <div class="card-action">
                <a href="categoria.php?categoria=<?php echo $categoria["nombre"]; ?>">Ver entradas en esta categoria</a>
            </div>
            <?php }
    ?>
        </div>
    </div>
</div>
<?php }