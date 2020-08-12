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
                    <p class='card-text'><?php echo $registro["resumen"] ?>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus enim reprehenderit ullam culpa
                        error voluptates fuga, sunt repudiandae provident facilis odit eum maxime officia architecto.
                        Veniam iure reprehenderit officia tempora.</p>
                </div>
            </div>
        </div>
        <a name='asdasd' id='asdasd' class='btn border-0 btn-outline-secondary'
            href='<?php echo $registro["direccion"] ?>' role='button'>
            Leer mas</a>
    </div>
</div>
<hr class="border-bottom border-secondary">
<?php }