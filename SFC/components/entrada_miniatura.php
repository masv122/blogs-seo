<?php
if (!isset($indexphp) and $indexphp !== true) {
    header('Location: /index.php');
    exit;
}
function entrada_miniatura($registro)
{
    ?>
<div class='card mb-3 border-0'>
    <div class='card-body'>
        <h2 class='blog-post-title'><?php echo $registro["titulo"] ?></h2>
        <div class='d-flex'>
            <p class='blog-post-meta mr-2'><i class='fas fa-clock    '></i><?php echo $registro["fecha"] ?></p>
            <p class='blog-post-meta mr-2'><i class='fa fa-user' aria-hidden='true'></i> Fulanito</p>
            <p class='blog-post-meta mr-2'><i class='fa fa-folder' aria-hidden='true'></i>
                <?php echo $registro["nombre_categoria"] ?></p>
            <p class='blog-post-meta mr-2'><i class='fa fa-comment' aria-hidden='true'></i> Comentarios
            </p>
        </div>

        <div class='container mb-5'>
            <div class='row'>
                <div class='col-6 border'>
                    <h6>Imagen</h6>
                </div>
                <div class='col-6'>
                    <p class='card-text'><?php echo $registro["resumen"] ?></p>
                </div>
            </div>
        </div>
        <a name='asdasd' id='asdasd' class='btn btn-outline-info' href='<?php echo $registro["direccion"] ?>'
            role='button'>
            Leer mas <i class='fa fa-arrow-circle-right' aria-hidden='true'></i></a>
    </div>
</div>
<?php }