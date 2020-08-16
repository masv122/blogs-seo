<?php
if (!isset($indexphp) and $indexphp !== true) {
    header('Location: /index.php');
    exit;
}
function cuadro_busqueda($busqueda)
{
    global $busqueda_page;
    if ($busqueda_page) {
        ?>
<div class='row'>
    <div class='col s12 grey darken-4 z-depth-1 cuadro-busqueda'>
        <?php
}
    ?>
        <h4 class="center teal-text">Busca una entrada</h4>
        <h6 class="center white-text">En esta pagina podras buscar cualquier entrada por su titulo</h6>
        <form action='busqueda.php' method='get'>
            <div class="row">
                <div class="input-field col s12 m10"> <input id="buscar" type="text" name='busqueda' class="validate"
                        <?php if ($busqueda) {?> value='<?php echo $busqueda; ?>' <?php }?>>
                    <label for="buscar">escribar el titulo a buscar</label>
                </div>
                <div class="col s12 m2 pt-4">
                    <button class="btn waves-effect waves-light teal white-text" type="submit">
                        Buscar
                    </button>
                </div>
            </div>
        </form>
        <?php
if ($busqueda_page) {
        ?>
    </div>
</div>
<?php
}
}