<?php

include_once '../db.php';

// Devuelve el listado de fotos

$query = "DELETE FROM `md_foto` WHERE `id` = '" . $_POST['foto_id'] . "'";
$res = $conexion->query($query);


if ($res) {
    $array['mensaje'] = "Se elimino correctamente";
    $array['estado'] = "1";
    echo json_encode($array);
} else {
    $array['mensaje'] = "No se pudo eliminar la foto";
    $array['estado'] = "0";
    echo json_encode($array);
}
?>