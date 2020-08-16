<?php
if (!isset($indexphp) and $indexphp !== true) {
    header('Location: /index.php');
    exit;
}
function entrada_miniatura($registro)
{
    ?>
<div class="col s12 m6">
    <div class="card horizontal">
        <div class="card-image">
            <img src="../assets/rework1.jpg">
            <!-- <span class="card-title"><?php echo $registro["fecha"] ?></span>
            <span class="card-title"><?php echo $registro["nombre_categoria"] ?></span> -->
        </div>
        <div class="card-stacked">
            <div class="card-content">
                <span class="card-title"><?php echo $registro["titulo"] ?></span>
                <h6 class=""><i class="fas fa-clock    "></i> <?php echo $registro["fecha"] ?></h6>
                <h6><a href="categoria.php?categoria=<?php echo $registro["nombre_categoria"] ?>"><i
                            class='fa fa-folder' aria-hidden='true'></i> <?php echo $registro["nombre_categoria"] ?></a>
                </h6>
                <p><?php echo $registro["resumen"] ?>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste odio
                    quas in
                    accusantium vitae blanditiis esse
                    neque itaque magni magnam, amet necessitatibus qui fuga optio ipsa nisi voluptate aliquam. Vel?</p>
            </div>
            <div class="card-action">
                <a class="red-text" href="<?php echo $registro["direccion"] ?>">Leer mas</a>
            </div>
        </div>
    </div>
</div>
<?php }