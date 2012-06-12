<?php

session_start();
if ($_SESSION['nombre'] != 'tripaloca2007milKK') {
    session_destroy();
    header('Location: ../acceder.php');
}
include_once '../db.php';

$arreglo = $_POST['item'];
// Quito los viejos
$conexion->query("UPDATE `md_item` SET `orden`= '100' WHERE `orden` = '1' OR `orden` = '2' OR `orden` = '3'");
// Agrego los nuevos
foreach ($arreglo as $item) {
    $query = "UPDATE `md_item` SET `orden`= '" . $item[1] . "' WHERE `id` = '" . $item[0] . "'";
    $conexion->query($query);
}
die;
$array['mensaje'] = "Se actualizo correctamente";
$array['estado'] = "1";
echo json_encode($array);
?>
