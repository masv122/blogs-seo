<?php
if (!isset($indexphp) and $indexphp !== true) {
    header('Location: /index.php');
    exit;
}
require_once "../components/head.php";
require_once "../components/entrada_miniatura.php";
require_once "../components/sin_resultados.php";
require_once "../components/paginacion.php";
require_once "../components/cuadro_busqueda.php";
require_once "../components/nav_bar.php";
require_once "../components/cuadro_categoria.php";
require_once "../components/cuadro_recomendados.php";
require_once "../components/cuadro_redes.php";
require_once "../components/footer.php";
require_once "../components/load_scripts.php";
require_once "../components/categoria.php";
require_once "../components/busqueda_null.php";
require_once "../components/categorias.php";
require_once "../components/categoria_miniatura.php";
require_once "../components/entrada_recomendada.php";