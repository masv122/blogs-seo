<?php
if (!isset($indexphp) and $indexphp !== true) {
    header('Location: /index.php');
    exit;
}
function cuadro_busqueda($busqueda)
{
    global $busqueda_page;
    ?>
<form action='busqueda.php' method='get' class="row">
    <div class="input-field col s6">
        <input id="buscar" type="text" name='busqueda' class="validate" <?php if ($busqueda) {?>
            value='<?php echo $busqueda; ?>' <?php }?>>
        <label for="buscar">escribar el titulo a buscar</label>
    </div>
    <div class="input-field col s6">
        <input id="last_name" type="text" class="validate">
        <label for="last_name">Last Name</label>
    </div>
    <button class='btn col s4' type='submit'><i value='buscar' class='fa fa-search' aria-hidden='true'></i></button>
</form>
<?php }