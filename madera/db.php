<?php
// Variables
/*$servidor = "fdb2.awardspace.com";
$usuario = "gepp81_prode2008";
$password =  "g1981p";//gpi123
$bd = "gepp81_prode2008";*/
$servidor = "localhost";
$usuario = "root";
$password = "gpi123"; //gpi123
$bd = "madera";

$conexion = new mysqli($servidor, $usuario, $password, $bd);

if ($conexion->connect_errno) {
    echo "Connect failed: " . $conexion->connect_error;
    exit();
}

$conexion->autocommit("false");
?>
