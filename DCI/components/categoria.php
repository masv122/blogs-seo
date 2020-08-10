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
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <h2 class='blog-post-title mb-3'>Categoria:
                        <?php echo $categoria["nombre"] ?></h2>
                </div>
                <div class="col-md-2">
                    <form action='categoria.php' method='get' class='form-inline my-2 my-lg-0 float-right'>
                        <button name='categoria' value='<?php echo $categoria["nombre"]; ?>'
                            class='btn btn-outline-dark btn-group-sm mb-1' type='submit'>
                            Ver entradas en esta categoria</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- <p class='blog-post-meta mr-2'><i class='fa fa-comments' aria-hidden='true'></i> Comentarios en
        esta categoria: #</p> -->
    </div>
    <div class='card-footer text-muted bg-dark'>
        <p class='blog-post-meta mr-2'><i class='fas fa-list    '></i> Entradas en esta categoria:
            <?php echo $categoria["cantidad"] ?></p>
    </div>
</div>
<?php }