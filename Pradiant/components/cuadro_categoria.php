<?php
if (!isset($indexphp) and $indexphp !== true) {
    header('Location: /index.php');
    exit;
}
function cuadro_categoria($conexion)
{
    ?>
<div class="card mb-3">
    <div class="card-header text-white fondo-marca">
        <i class="fa fa-folder" aria-hidden="true"></i> Categorias
    </div>
    <div class="card-body">
        <ol class="list-unstyled mb-0">
            <?php
try {
        $consulta = "SELECT * FROM categorias";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(array());
        if ($resultado->rowCount() > 0) {
            while ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) {
                ?>
            <li>
                <form action='categoria.php' method='get' class='form-inline my-2 my-lg-0'>
                    <button name='categoria' value='<?php echo $registro["nombre"]; ?>'
                        class='btn btn-block btn-outline-info mb-1' type='submit'>
                        <?php echo $registro["nombre"]; ?></button>
                </form>
            </li>
            <?php
}
        } else {
            ?>
            <div class='alert alert-success' role='alert'>
                <h4 class='alert-heading'>Sin categorias</h4>
            </div>"
            <?php
}
    } catch (\Throwable $th) {
        echo "ha ocurrido un error: " . $th;
    }
    ?>
        </ol>
    </div>
</div>
<?php }