<?php
	session_start();
	if ($_SESSION['nombre'] != 'tripaloca2007milKK') {
		session_destroy();
		header('Location: ../acceder.php');
	}
	include_once '../db.php';

	$file = $_FILES['archivo'];
	
	if ($file['error'] == 0){
		$idItem = $_SESSION['item_id'];
		//$ext = substr($file['name'], strrpos($file['name'], '.'), 4);
		if (move_uploaded_file($file['tmp_name'],"../images/muebles/". $idItem . $_POST['nombre'])){
			$conexion->query("INSERT INTO `md_foto` VALUES ('', '".$idItem."', '".$idItem . $_POST['nombre']."', '')");
		}
	}
	header("Location: editarfotos.php?id=". $_SESSION['item_id'] ."&nombre=". $_SESSION['item_nombre']);
?>
	
	
