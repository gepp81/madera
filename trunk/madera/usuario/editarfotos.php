<?php
session_start();
if ($_SESSION['nombre'] != 'tripaloca2007milKK') {
    session_destroy();
    header('Location: ../acceder.php');
}
include_once '../db.php';

// Traigo los ids
unset($_SESSION['item_id'], $_SESSION['item_nombre']);
$_SESSION['item_id'] = $_GET['id'];
$_SESSION['item_nombre'] = $_GET['nombre'];
// Devuelve el listado de fotos
$query = "SELECT `id`, `foto`, `preferida` FROM `md_foto` WHERE `id_item` = '" . $_SESSION['item_id'] . "'";
$listado = $conexion->query($query);
// Devuelve nombre del item
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
        <script src="js/jquery-1.5.1.min.js" type="text/javascript"></script>
        <script src="js/editarfotos.js" type="text/javascript"></script>
    </head>
    <body>
        <div id="wrap">
            <?php include 'header.php'; ?>
            <?php mostrarHeader(0); ?>
            <div style="width: 900px;">
                <table>
                    <tr>
                        <th colspan="4"><?php echo $_GET['nombre']; ?></th>
                    </tr>
                    <?php if (isset($_SESSION['subirfoto_mensaje'])) : ?>
                        <?php echo "<tr><td colspan='4'>" . $_SESSION['subirfoto_mensaje'] . "</td></tr>"; ?>
                        <?php unset($_SESSION['subirfoto_mensaje']); ?>
                    <?php endif; ?>	
                    <?php $cant = 0; ?>
                    <?php while ($obj = $listado->fetch_object()) : ?>
                        <?php if ($cant == 0) : ?><tr><?php endif; ?>
                            <td>
                                <img src='../images/muebles/<?php echo $obj->foto; ?>' width='150' height='150' alt="None" />
                                <br/><?php echo $obj->foto; ?>
                                <label>
                                    <img  class="eliminar_imagen" imagen="<?php echo $obj->id; ?>" src='images/cancelar.png' width="16" height="16" title="Eliminar Foto"></img>
                                </label>
                                <?php if ($obj->preferida == '1') : ?>
                                    <label>
                                        <img class="imagen_principal" imagen="<?php echo $obj->id; ?>" src='images/estrellallena.png' width="16" height="16" title="FOTO A MOSTRAR PRIMERA" ></img>
                                    </label>                       
                                <?php else : ?>
                                    <label>
                                        <img class="marcar_imagen" imagen="<?php echo $obj->id; ?>" item="<?php echo $_SESSION['item_id']; ?>" src='images/estrellavacia.png' width="16" height="16" title="MARCAR COMO PREFERIDA"></img>
                                    </label> 
                                <?php endif; ?>
                            </td>
                            <?php $cant++; ?>
                            <?php if ($cant == 4) : ?></tr><?php $cant = 0; ?><?php endif; ?>
                    <?php endwhile; ?>
                </table>
                <hr/>
                <form action='subirfoto.php' method='post' enctype="multipart/form-data">
                    <table class='wid50'>
                        <tr>
                            <th>Agregar una foto a este producto</th>
                        </tr>
                        <tr>
                            <td><input type="file" name="archivo" value=""/> </td>
                        </tr>
                        <tr>
                            <td>Nombre:<input type="text" name="nombre" value=""/>
                                <br/>Si el archivo ya existe lo sobreescribira !!!
                                <br/>El nombre del archivo se crea con este nombre y el id en la base. Quedaría como 15xxx.jpg</td>
                        </tr>
                        <tr>
                            <td><input type="submit" name="submit" value="Subir" /></td>
                        </tr>
                    </table>
                    <hr/>
                    <table class='wid50'>
                        <tr><th colspan="2">AYUDAS</th></tr>
                        <tr>
                            <td><img src='images/cancelar.png' width="24" height="24" title="Eliminar Foto"></img></td><td>Elimina esta imagen.</td>
                        </tr>
                        <tr>
                            <td><img src='images/estrellallena.png' width="24" height="24" title="FOTO A MOSTRAR PRIMERA" ></img></td><td>Es la imagen principal</td>
                        </tr>
                        <tr>
                            <td><img src='images/estrellavacia.png' width="24" height="24" title="Marca COMO PREFERIDA" ></img></td><td>Son las fotos secundarias, "click sobre esta estrella" para marcar esta foto como principal</td>
                        </tr>                        
                    </table>                    
                </form>
            </div>
        </div>
    </body>
</html>

