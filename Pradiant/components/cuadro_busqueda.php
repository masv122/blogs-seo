<?php
if (!isset($indexphp) and $indexphp !== true) {
    header('Location: /index.php');
    exit;
}
function busqueda_page(Type $var = null)
{
    ?>
<h2 class="blog-post-title mt-2 ml-4">Busqueda</h2>
<?php
}
function no_busqueda_page(Type $var = null)
{
    ?>
<div class="card-header text-white fondo-marca">
    <i class="fa fa-search" aria-hidden="true"></i> Busqueda
</div>
<?php
}
function cuadro_busqueda($busqueda)
{
    global $busqueda_page;
    ?>
<div class="card mb-3 <?php if (!$busqueda_page) {
        ?>d-none d-md-block <?php }?>">
    <?php
if (!$busqueda) {
        no_busqueda_page();
    }
    if ($busqueda) {
        busqueda_page();
    }
    ?>
    <form action='busqueda.php' method='get' class='form-inline my-2 my-lg-0 p-md-1 p-lg-3'>
        <input class='form-control mr-lg-2' type='text' name='busqueda' placeholder="escribar el titulo a buscar"
            <?php if ($busqueda) {?> value='<?php echo $busqueda; ?>' <?php }?>>
        <button class='btn btn-outline-success float-sm-right my-2 my-sm-0' type='submit'><i value='buscar'
                class='fa fa-search' aria-hidden='true'></i>
            Buscar</button>
    </form>
</div>
<?php }