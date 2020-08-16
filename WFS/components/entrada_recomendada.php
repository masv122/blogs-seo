<?php
if (!isset($indexphp) and $indexphp !== true) {
    header('Location: /index.php');
    exit;
}
function entrada_recomendada($entrada)
{
    ?>
<div class="card">
    <div class="card-image">
        <img src="../assets/rework3.jpg">
        <span class="card-title"><?php echo $entrada["titulo"] ?></span>
    </div>
    <ul class="collection">
        <li class="collection-item avatar">
            <h6><i class="fa fa-sticky-note circle" aria-hidden="true"></i></h6>
            <p class="left"><?php echo $entrada["fecha"] ?>
            </p>
            <a href="categoria.php?categoria=<?php echo $entrada["nombre_categoria"] ?>" class="secondary-content"><i
                    class="fa fa-folder" aria-hidden="true"></i>
                <?php echo $entrada["nombre_categoria"] ?></a>
        </li>
    </ul>
    <div class="card-content">
        <p>I am a very simple card. I am good at containing small bits of information.
            I am convenient because I require little markup to use effectively.
            <?php echo $entrada["resumen"] ?></p>
    </div>
    <div class="card-action">
        <a href="<?php echo $entrada["direccion"] ?>" class="red-text">Leer</a>
    </div>
</div>
<?php }