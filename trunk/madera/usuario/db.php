<?php
// Variables
$servidor = "localhost";
$usuario = "root";
$password = "gpi123"; //gpi123
$bd = "madera";

$conexion = new mysqli($servidor, $usuario, $password, $bd);

if ($conexion->connect_errno) {
    echo "Connect failed: " . $conexion->connect_error;
    exit();
}
$conexion->set_charset('utf8');
$conexion->autocommit("false");
?>