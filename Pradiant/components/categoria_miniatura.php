<?php
if (!isset($indexphp) and $indexphp !== true) {
    header('Location: /index.php');
    exit;
}
function categoria_miniatura($categoria)
{
    ?>
<li>
    <form action='categoria.php' method='get' class='form-inline my-2 my-lg-0'>
        <button name='categoria' value='<?php echo $categoria["nombre"]; ?>' class='btn btn-block btn-outline-info mb-1'
            type='submit'>
            <?php echo $categoria["nombre"]; ?></button>
    </form>
</li>
<?php }