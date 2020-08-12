<?php
if (!isset($indexphp) and $indexphp !== true) {
    header('Location: /index.php');
    exit;
}
function categoria($categoria, $enlace)
{
    ?>
<div class="card border-0 mb-3">
    <div class="card-body">
        <h2 class='blog-post-title mb-3'>Categoria:
            <?php echo $categoria["nombre"] ?></h2>
        <p class='blog-post-meta mr-2'><i class='fas fa-list    '></i> Entradas en esta categoria:
            <?php echo $categoria["cantidad"] ?></p>
        <!-- <p class='blog-post-meta mr-2'><i class='fa fa-comments' aria-hidden='true'></i> Comentarios en
            esta categoria: #</p> -->
    </div>
    <?php
if ($enlace) {
        ?>
    <form action='categoria.php' method='get' class='form-inline my-2 my-lg-0 float-right'>
        <button name='categoria' value='<?php echo $categoria["nombre"]; ?>' class='btn border-0 btn-outline-secondary'
            type='submit'>
            Ver entradas en esta categoria</button>
    </form>
    <?php }
    ?>
    <hr class="border-bottom border-secondary">
</div>
<?php }