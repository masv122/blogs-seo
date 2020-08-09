<?php
if (!isset($indexphp) and $indexphp !== true) {
    header('Location: /index.php');
    exit;
}
function categoria($categoria, $enlace)
{
    ?>
<div class="card bg-white shadow mb-3">
    <div class="card-body">
        <h2 class='blog-post-title mb-3'>Categoria:
            <?php if ($enlace) {echo $categoria["nombre"];} else {echo $categoria;}?></h2>
        <p class='blog-post-meta mr-2'><i class='fas fa-list    '></i> Entradas en esta categoria: #</p>
        <p class='blog-post-meta mr-2'><i class='fa fa-comments' aria-hidden='true'></i> Comentarios en
            esta categoria: #</p>
    </div>
    <?php
if ($enlace) {
        ?>
    <div class='card-footer text-muted fondo-marca'>
        <form action='categoria.php' method='get' class='form-inline my-2 my-lg-0 float-right'>
            <button name='categoria' value='<?php echo $categoria["nombre"]; ?>' class='btn btn-outline-light mb-1'
                type='submit'>
                Ver entradas en esta categoria</button>
        </form>
    </div>
    <?php }
    ?>
</div>
<?php }