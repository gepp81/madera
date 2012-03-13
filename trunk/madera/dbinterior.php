<?php
include 'db.php';



if ($res = $conexion->query("
                SELECT `i`.*, `f`.`foto` AS `imagen`
                FROM `md_item` `i` 
                INNER JOIN `md_categoria` `c` ON `i`. `id`=  `c`.`id_item` 
                INNER JOIN `md_foto` `f` ON `f`.`id_item` = `i`.`id`
                WHERE `c`.`categoria` = ".$_GET['cat'] . " AND `f`.`preferida` = '1'"
                            )
   )
{
    
    $conexion->commit();
    $conexion->close();
} else {
    $conexion->rollback();
    echo 'Error SQL';
    exit();
}
?>