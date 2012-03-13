<?php
	session_start();
	if ($_SESSION['nombre'] != 'tripaloca2007milKK') {
		session_destroy();
		header('Location: ../acceder.php');
	}
	if (isset($_GET['id'])){
		//Traigo el item
		include_once '../db.php';
		$query = "SELECT * FROM `md_item` WHERE `id`='".$_GET['id']."'";
		$res = $conexion->query($query);
		$item = $res->fetch_object();
		
		$query = "SELECT `categoria` FROM `md_categoria` WHERE `id_item`='".$_GET['id']."'";
		$res = $conexion->query($query);
		$cat = $res->fetch_object();
		$cat = $cat->categoria;		
	}
	else{
		$cat = 5;
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf8"></meta>
        <link rel="stylesheet" type="text/css" href="../style.css" />
        <link rel="stylesheet" type="text/css" href="css/indexUser.css" />
        <link rel="shortcut icon" type="image/x-icon" href="../images/logo.ico" />
        <meta name="description" content="Bienvenido a su nuevo mueble." />
        <title>Muebles para Jard&iacute;n &#38; Interior</title>
    </head>
    <body>
        <div id="wrap">
            <div class="header">
                <div class="logo"><a href="index.php"><img src="../images/logo.jpg" alt="" title="" border="0" /></a></div>
                <div id="menu">
                    <ul>
                        <li><a href="index.php">INICIO</a></li>
                        <li class="selected"><a href="nuevo.php">Nuevo Producto</a></li>
                        <li><a href="productos.php">Listado de Productos</a></li>
                       	<li><a href="salir.php">SALIR</a></li>
                    </ul>
                </div>
            </div>
			<div class="center_content">
				<form method="post" action="guardar.php" class="texto15">
				<?php if (isset($item)) : ?>
					<input type="hidden" value="<?php echo $item->id; ?>" name="id" />
				<?php endif; ?>
					<table>
					<?php if (isset($_SESSION['guardar_mensaje'])) : ?>
					<?php echo "<tr><td colspan='2'>" . $_SESSION['guardar_mensaje'] . "</td></tr>"; ?>
					<?php unset($_SESSION['guardar_mensaje']); ?>
					<?php endif; ?>					
						<tr>
							<td class="wid25">Nombre</td>
							<td class="wid75"><input class="wid100 texto1" type="text" value="<?php echo $item->nombre; ?>" name="nombre" /></td>
						</tr>
						<tr>
							<td class="wid25">Decripcion</td>
							<td class="wid75"><textarea class="wid100 texto1" name="descripcion" rows="10" cols="50"><?php echo str_replace("<br/>", "\n",$item->descripcion); ?></textarea></td>
						</tr>
						<tr>
							<td class="wid25">Categoria</td>
							<td class="wid75">
								<select class="wid100 texto1" name="categoria">
									<?php if ($cat == 0) :?>
									<?php echo "<option value='0'>Exterior</option>"; ?>
									<?php endif; ?>
									<?php if ($cat == 1) :?>
									<?php echo "<option value='1'>Interior</option>"; ?>
									<?php endif; ?>
									<?php if ($cat == 2) :?>
									<?php echo "<option value='2'>Promocion</option>"; ?>
									<?php endif; ?>
									<option value="1">Interior</option>
									<option value="0">Exterior</option>
									<option value="2">Promocion</option>
									<option value="500">Sin Categoria</option>
								</select>
							</td>
						</tr>
						<!--tr>
							<td class="wid5">Imagen</td>
							<td class="wid5"><input type="hidden" value="<?php //echo $item->imagen; ?>" name="imagen" /></td>
						</tr-->
						<tr>
							<td class="wid25">Fotoface</td>
							<td class="wid75"><input class="wid100 texto1" type="text" value="<?php echo $item->fotoface; ?>" name="fotoface" /></td>
						</tr>
						<!--tr>
							<td class="wid5">Orden</td>
							<td class="wid5"><input type="text" value="<?php //echo $item->orden; ?>" name="orden" /></td>
						</tr -->
						<tr>
							<td colspan='2'><input type="submit" name="submit" value="Grabar Producto" /></td>
						</tr>
					</table>
					<input type="hidden" value="<?php echo $item->imagen; ?>" name="imagen" />
					<input type="hidden" value="<?php echo $item->orden; ?>" name="orden" />
					<input type="hidden" value="Consultar" name="precio" />					
				</form>
			</div>
		</div>
	</body>
</html>
