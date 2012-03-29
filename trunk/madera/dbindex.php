<?php
include 'db.php';

if ($res = $conexion->query("SELECT i.*, f.`foto` AS `imagen` FROM `md_item` i INNER JOIN `md_foto` f ON f.`id_item` = i.`id` WHERE f.`preferida` = '1' ORDER BY `i`.`orden` ASC Limit 3")) {
    $conexion->commit();
    //$conexion->close();
} else {
    $conexion->rollback();
    echo 'Error SQL';
    exit();
}
?>