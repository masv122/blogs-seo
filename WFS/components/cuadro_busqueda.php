<?php
if (!isset($indexphp) and $indexphp !== true) {
    header('Location: /index.php');
    exit;
}
function cuadro_busqueda($busqueda)
{
    global $busqueda_page;
    if ($busqueda_page) {
        echo "<div class='row'>";
        echo "<div class='col s12 m6 offset-m3 red darken-4 z-depth-1 cuadro-busqueda'>";
    }
    ?>
<form action='busqueda.php' method='get' class="row">
    <div class="input-field">
        <input id="buscar" type="text" name='busqueda' class="validate" <?php if ($busqueda) {?>
            value='<?php echo $busqueda; ?>' <?php }?>>
        <label for="buscar">escribar el titulo a buscar</label>
    </div>
    <button class="btn waves-effect waves-light right white black-text" type="submit">
        <i class="fa fa-search" aria-hidden="true"></i>
    </button>
</form>
<?php
if ($busqueda_page) {
        echo "</div>";
        echo "</div>";
    }
}