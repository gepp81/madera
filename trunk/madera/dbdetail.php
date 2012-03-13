<?php
include 'db.php';
$buscar = $_GET['id'];

if ($res = $conexion->query("SELECT * FROM `md_item` WHERE `id` = " . $buscar)) {
    $fotos = $conexion->query("SELECT foto FROM `md_foto` WHERE `id_item` = '". $buscar . "' ORDER BY `preferida` DESC");
    $conexion->commit();
    $conexion->close();
} else {
    $conexion->rollback();
    echo 'Error SQL';
    exit();
}
?>