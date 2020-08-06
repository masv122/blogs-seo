<?php
$conexion = mysqli_connect("localhost", "root", "", "pradiant_blog");
if (!$conexion) {
    echo "la conexion ha fallado: " . mysqli_error();
    exit();
}
mysqli_set_charset($conexion, "utf8");