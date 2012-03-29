<?php

session_start();
if ($_SESSION['nombre'] != 'tripaloca2007milKK') {
    session_destroy();
    header('Location: ../acceder.php');
}
include_once '../db.php';

$arreglo = $_POST['item'];
// Quito los viejos
$conexion->query("UPDATE `md_item` SET `nuevo`= '0' WHERE `nuevo` = '1'");

// Agrego los nuevos
foreach ($arreglo as $item) {
    $query = "UPDATE `md_item` SET `nuevo`= '1' WHERE `id` = '" . $item . "'";
    $conexion->query($query);
}
$array['mensaje'] = "Se actualizo correctamente";
$array['estado'] = "1";
echo json_encode($array);
?>
