<?php
if (!isset($indexphp) and $indexphp !== true) {
    header('Location: /index.php');
    exit;
}
function cuadro_busqueda($busqueda)
{
    global $busqueda_page;
    ?>
<form action='busqueda.php' method='get' class='form-inline my-2 my-lg-0'>
    <div class="input-group mb-3">
        <input class='form-control' type='text' name='busqueda' placeholder="escribar el titulo a buscar"
            <?php if ($busqueda) {?> value='<?php echo $busqueda; ?>' <?php }?>>
        <div class="input-group-append">
            <button class='btn btn-outline-secondary' type='submit'><i value='buscar' class='fa fa-search'
                    aria-hidden='true'></i>
            </button>
        </div>
    </div>
</form>
<?php }