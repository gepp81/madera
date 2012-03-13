<?php
include 'db.php';
$nombre = $_POST['nombre'];
$mensaje = $_POST['mensaje'];
$fecha = date('Y-m-d h:s');
$email = $_POST['email'];
$telefono = $_POST['telefono'];

if ($res = $conexion->query("INSERT INTO `md_consulta` (`id`,`nombre`,`email`,`mensaje`,`telefono`,`fecha`) VALUES
                                            ('','" . $nombre . "','" . $email . "','" . $mensaje . "','" . $telefono . "','" . $fecha . "')")) {
    echo "Se ha guardado con &eacute;xito su consulta.";
    $conexion->commit();
    $conexion->close();
    exit();
} else {
    $conexion->rollback();
    echo "No se ha podido guardar su consulta, intentelo m&aacute;s tarde.";
    exit();
}
?>