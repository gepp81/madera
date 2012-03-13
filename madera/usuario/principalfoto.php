<?php

session_start();
if ($_SESSION['nombre'] != 'tripaloca2007milKK') {
    session_destroy();
    header('Location: ../acceder.php');
}
include_once '../db.php';

$res1 = $conexion->query("UPDATE `md_foto` SET `preferida` = '0' WHERE `preferida` = '1' AND `id_item` = '" . $_POST['item_id'] . "'");
$res2 = $conexion->query("UPDATE `md_foto` SET `preferida` = '1' WHERE `id` = '" . $_POST['foto_id'] . "'");

if ($res1 && $res2){
    $array['mensaje'] = "Se actualizo el item.";
    $array['estado'] = "1";
    echo json_encode($array);
}

?>