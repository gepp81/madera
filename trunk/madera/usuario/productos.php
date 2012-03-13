<?php
session_start();
if ($_SESSION['nombre'] != 'tripaloca2007milKK') {
    session_destroy();
    header('Location: ../acceder.php');
}
include_once '../db.php';

// Traigo los ids
$query = "SELECT id, nombre FROM md_item";
$listado = $conexion->query($query);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf8"></meta>
        <link rel="stylesheet" type="text/css" href="../style.css" />
        <link rel="stylesheet" type="text/css" href="css/indexUser.css" />
        <link rel="shortcut icon" type="image/x-icon" href="../images/logo.ico" />
        <script src="js/jquery-1.5.1.min.js" type="text/javascript"></script>
        <script src="js/productos.js" type="text/javascript"></script>
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
                        <li><a href="nuevo.php">Nuevo Producto</a></li>
                        <li class="selected"><a href="productos.php">Listado de Productos</a></li>
                        <li><a href="salir.php">SALIR</a></li>
                    </ul>
                </div>
            </div>
            <div class="center_content">
                <table>
                    <thead>
                        <tr><th colspan="5">LISTADO DE PRODUCTOS</th></tr>
                    </thead>
                    <tbody>
                        <tr align='center'>
                            <th>Producto</th>
                            <th>Editar</th>
                            <th>Administrar Fotos</th>
                            <th>Eliminar Producto</th>
                        </tr>
                        <?php while ($obj = $listado->fetch_object()) : ?>
                            <tr>
                                <td>
                                    <label style="font-size: 1.3em; font-weight: bold;">
                                        <a href='nuevo.php?id=<?php echo $obj->id; ?>'><?php echo $obj->nombre; ?></a>
                                    </label>
                                </td>
                                <td>
                                    <a href='nuevo.php?id=<?php echo $obj->id; ?>'>
                                        <img src="images/editar.gif" width="24" height="24"></img>
                                    </a>
                                </td>
                                <td>
                                    <a href='editarfotos.php?id=<?php echo $obj->id; ?>&nombre=<?php echo $obj->nombre; ?>'>
                                        <img src="images/imagenes.png" width="24" height="24"></img>
                                    </a>
                                </td>
                                <td>
                                    <label class='eliminar_producto' item="<?php echo $obj->id; ?>">
                                        <img src="images/cancelar.png" width="24" height="24"></img>
                                    </label>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="4"><label style="font-size: 1.3em; font-weight: bold;">Total de Productos: <?php echo $listado->num_rows; ?></label></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </body>
</html>
