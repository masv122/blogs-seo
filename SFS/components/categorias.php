<?php
if (!isset($indexphp) and $indexphp !== true) {
    header('Location: /index.php');
    exit;
}
function categorias()
{
    ?>
<div class='card bg-white shadow mb-3'>
    <div class='card-body'>
        <h2 class='blog-post-title'></h2>
        <div class='d-flex'>
            <p class='blog-post-meta mr-2'><i class='fas fa-clock    '></i></p>
            <p class='blog-post-meta mr-2'><i class='fa fa-user' aria-hidden='true'></i> Fulanito</p>
            <p class='blog-post-meta mr-2'><i class='fa fa-folder' aria-hidden='true'></i></p>
            <p class='blog-post-meta mr-2'><i class='fa fa-comment' aria-hidden='true'></i> Comentarios
            </p>
        </div>
    </div>
    <div class='card-footer text-muted fondo-marca'>
        <a name='asdasd' id='asdasd' class='btn btn-info float-right' href='' role='button'>
            Leer mas <i class='fa fa-arrow-circle-right' aria-hidden='true'></i></a>
    </div>
</div>
<?php }