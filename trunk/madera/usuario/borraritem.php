<?php

session_start();
if ($_SESSION['nombre'] != 'tripaloca2007milKK') {
    session_destroy();
    header('Location: ../acceder.php');
}
include_once '../db.php';

$res1 = $conexion->query("DELETE FROM `md_foto` WHERE `id_item` = " . $_POST['item_id']);
$res2 = $conexion->query("DELETE FROM `md_categoria` WHERE `id_item` = " . $_POST['item_id']);
$res3 = $conexion->query("DELETE FROM `md_item` WHERE `id` = " . $_POST['item_id']);
if ($res1) {
    $array['mensaje'] = "Se elimino correctamente";
    $array['estado'] = "1";
    echo json_encode($array);
}
?>
