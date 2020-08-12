<?php
if (!isset($indexphp) and $indexphp !== true) {
    header('Location: /index.php');
    exit;
}
if (isset($_GET["pagina"])) {
    if ($_GET["pagina"] == 1) {
        if ($inicio_page) {
            header("Location:inicio.php");
        } else if ($busqueda_page) {
            header("Location:busqueda.php?busqueda=" . $busqueda . "");
        } else if ($categoria_page) {
            header("Location:categoria.php?categoria=" . $categoria . "");
        }
    } else {
        $pagina = $_GET["pagina"];
    }
} else {
    $pagina = 1;
}
$total_paginas = 0;
