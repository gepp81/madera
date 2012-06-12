<?php

$clave = $_POST['clave'];
$nombre = $_POST['nombre'];
$reclave = $_POST['reclave'];

if ($nombre == 'pipavillan' && $clave == 'catalinapidote' && $reclave == '08')
{
    session_start();
    $_SESSION['nombre'] = 'tripaloca2007milKK';
    header('Location: index.php');
}
else{
    session_destroy();
    header('Location: ../acceder.php');
}
?>
