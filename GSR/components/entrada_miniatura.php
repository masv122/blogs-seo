<?php
if (!isset($indexphp) and $indexphp !== true) {
    header('Location: /index.php');
    exit;
}
function entrada_miniatura($registro)
{
    ?>
<div class="col s12 m4">
    <div class="card z-depth-5 hoverable">
        <div class="card-image">
            <img src="../assets/rework3.jpg">
            <span class="card-title"><?php echo $registro["titulo"] ?></span>
            <!-- <span class="card-title"><?php echo $registro["fecha"] ?></span>
            <span class="card-title"><?php echo $registro["nombre_categoria"] ?></span> -->
            <a href="<?php echo $registro["direccion"] ?>"
                class="btn-floating halfway-fab waves-effect waves-light red"><i class="fa fa-bookmark"
                    aria-hidden="true"></i></a>
        </div>
        <div class="card-content">
            <h6 class=""><i class="fas fa-clock    "></i> <?php echo $registro["fecha"] ?></h6>
            <h6><i class='fa fa-folder' aria-hidden='true'></i> <?php echo $registro["nombre_categoria"] ?></h6>
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
<?php }