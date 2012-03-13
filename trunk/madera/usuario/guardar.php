<?php
	session_start();
	if ($_SESSION['nombre'] != 'tripaloca2007milKK') {
		session_destroy();
		header('Location: ../acceder.php');
	}
	include_once '../db.php';
	
	if (!isset($_POST['id'])){
		$res = $conexion->query("INSERT INTO `md_item` VALUES ('','".$_POST['nombre']."','".str_replace("\n", "<br/>", $_POST['descripcion'])."',
							'','".$_POST['categoria']."','','".$_POST['fotoface']."')");
		$res = $conexion->query("INSERT INTO `md_categoria` VALUES('','". $conexion->insert_id ."', '". $_POST['categoria'] ."')");
		if ($res){
			$_SESSION['guardar_mensaje'] = "<div class='mensaje_ok'>Se ha creado el producto con exito.</div>";
		}
		else {
			$_SESSION['guardar_mensaje'] = "<div class='mensaje_error'>No se ha podido crear el producto.</div>";
		}
	} else {
		$res1 = $conexion->query("UPDATE `md_item` 
			SET `nombre` = '".$_POST['nombre']."', `descripcion` = '".str_replace("\n", "<br/>", $_POST['descripcion'])."',
                            `categoria` = '".$_POST['categoria']."', `fotoface` = '".$_POST['fotoface']."'
			WHERE `id` = '".$_POST['id']."'");
		$res2 = $conexion->query("UPDATE `md_categoria` SET `categoria` = '". $_POST['categoria'] ."' WHERE `id` = '".$_POST['id'] ."'");
		if ($res1 && $res2){
			$_SESSION['guardar_mensaje'] = "<div class='mensaje_ok'>Se ha editado el producto con exito.</div>";
		}
		else {
			$_SESSION['guardar_mensaje'] = "<div class='mensaje_error'>No se ha podido editar el producto.</div>";
		}
	}
		
	header('Location: nuevo.php?id='.$_POST['id']);
?>