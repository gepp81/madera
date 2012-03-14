<?php
session_start();
if ($_SESSION['nombre'] != 'tripaloca2007milKK') {
    session_destroy();
    header('Location: ../acceder.php');
}

include '../db.php';
/* $res = $conexion->query("SELECT * FROM `md_consulta`");
  $conexion->commit(); */

if ($res = $conexion->query("SELECT * FROM `md_consulta` ORDER BY `fecha` ASC")) {
    $conexion->commit();
    $conexion->close();
} else {
    $conexion->rollback();
    echo 'Error SQL';
    exit();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf8"></meta>
        <link rel="stylesheet" type="text/css" href="../style.css" />
        <link rel="stylesheet" type="text/css" href="css/indexUser.css" />
        <link rel="shortcut icon" type="image/x-icon" href="../images/logo.ico" />
        <script src="js/jquery-1.5.1.min.js" type="text/javascript"></script>
        <script src="js/index.js" type="text/javascript"></script>

        <meta name="description" content="Bienvenido a su nuevo mueble." />
        <title>Muebles para Jard&iacute;n &#38; Interior</title>
    </head>
    <body>
        <div id="wrap">
            <?php include 'header.php'; ?>
            <?php mostrarHeader(1); ?>
            <div class="center_content">
                <table>
                    <thead>
                        <tr><th colspan="6">MENSAJES</th></tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>Nombre</th><th>Emal</th><th>Telefono</th><th>Mensaje</th><th>Fecha</th><th>Eliminar</th>
                        </tr>
                        <?php while ($obj = $res->fetch_object()) : ?>
                            <tr>
                                <td><?php echo $obj->nombre; ?></td>
                                <td><?php echo $obj->email; ?></td>
                                <td><?php echo $obj->telefono; ?></td>
                                <td><?php echo $obj->mensaje; ?></td>
                                <td><?php echo $obj->fecha; ?></td>
                                <td><label class="mensaje_eliminar" mensaje="<?php echo $obj->id; ?>" ><img src="images/cancelar.png" width="16" height="16" title="Eliminar Mensaje"/></label></td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
                <!--table id='tablaMenu'>
                        <tr>
                                <td><a href="nuevo.php">Nuevo Producto</a></td>
                </tr>
                        <tr>
                                <td><a href="productos.php">Listado de Productos</a></td>
                </tr>
                <tr>
                                <td><a href="salir.php">Salir</a></td>
                </tr>
            </table-->
            </div>
        </div>
    </body>
</html>