<?php
session_start();
if ($_SESSION['nombre'] != 'tripaloca2007milKK') {
    session_destroy();
    header('Location: ../acceder.php');
}
include_once '../db.php';

// Traigo los ids
$query = "SELECT `id`, `nombre`, `orden`, `nuevo` FROM `md_item` ORDER BY `orden` ASC";
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
        <script src="js/configuracion.js" type="text/javascript"></script>
        <meta name="description" content="Bienvenido a su nuevo mueble." />
        <title>Muebles para Jard&iacute;n &#38; Interior</title>
    </head>
    <body>
        <div id="wrap">
            <?php include 'header.php'; ?>
            <?php mostrarHeader(4); ?>
            <div class="center_content">
                <table>
                    <thead>
                        <tr><th colspan="2">ORDEN DE PRODUCTOS EN PRINCIPAL</th></tr>
                    </thead>
                    <tbody>
                        <tr align='center'>
                            <th>Producto</th>
                            <th>Orden</th>
                        </tr>
                        <?php while ($obj = $listado->fetch_object()) : ?>
                            <tr>
                                <td>
                                    <label style="font-size: 1.3em; font-weight: bold;">
                                        <?php echo $obj->nombre; ?>
                                    </label>
                                </td>
                                <td>
                                    <select class="selectores" id="<?php echo $obj->id; ?>">
                                        <?php
                                        if ($obj->orden == 100) {
                                            $muestra = "No importa";
                                        } elseif ($obj->orden == 1) {
                                            $muestra = "Primero";
                                        } elseif ($obj->orden == 2) {
                                            $muestra = "Segundo";
                                        } else {
                                            $muestra = "Tercero";
                                        }
                                        ?>
                                        <option value="<?php echo $obj->orden; ?>"><?php echo $muestra; ?></option>
                                        <option value="1">Primero</option>
                                        <option value="2">Segundo</option>
                                        <option value="3">Tercero</option>
                                        <option value="100">No importa</option>

                                    </select>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                        <tr>
                            <td colspan="2">
                                <input style="text-shadow: #999 0.14em 0.14em 0.2em;height: 30px;color: red; width: 60px;cursor: pointer;"
                                       type="button" value="Grabar" id="guardar" />
                            </td>
                        </tr>
                    </tbody>
                    <thead>
                        <tr><th colspan="2">PRODUCTOS NUEVOS</th></tr>
                        <tbody>
                            <?php $query = "SELECT `id`, `nombre`, `orden` FROM `md_item` ORDER BY `nuevo` DESC"; ?>
                            <?php $listado->data_seek(0); ?>
                            <tr>
                                <td colspan="2">
                                    <?php
                                    $select = "<select id='nuevo1'>";
                                    $texto = "Actualmente estan: ";
                                    while ($obj = $listado->fetch_object()) {
                                        if ($obj->nuevo == 1) {
                                            $texto .= $obj->nombre . ", ";
                                            $option2[0] = $obj->id;
                                            $option2[1] = $obj->nombre;
                                        }
                                        $select .= "<option value='" . $obj->id . "'>" . $obj->nombre . "</option>";
                                    }
                                    $select .= "</select>";
                                    $listado->data_seek(0);
                                    $select .= "<br/><select id='nuevo2'>";
                                    $select .= "<option value='".$option2[0]."'>".$option2[1]."</option>";
                                    while ($obj = $listado->fetch_object()) {
                                        $select .= "<option value='" . $obj->id . "'>" . $obj->nombre . "</option>";
                                    }
                                    $select .= "</select>";

                                    echo $select;
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><?php echo $texto; ?></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input style="text-shadow: #999 0.14em 0.14em 0.2em;height: 30px;color: red; width: 60px;cursor: pointer;"
                                           type="button" value="Grabar" id="guardarNew" />
                                </td>
                            </tr>                            
                        </tbody>
                    </thead>                    
                </table>
            </div>
        </div>
    </body>
</html>
