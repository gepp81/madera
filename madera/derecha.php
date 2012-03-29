<div class="right_content">
    <div class="title"><span class="title_icon"><img src="images/bullet2.png" alt="" title="" /></span>Quienes somos.</div> 
    <div class="about">
        <p>
            <img src="images/estrella.png" alt="" title="" class="right" />
            Somos una peque&ntilde;a empresa que se dedica a dise&ntilde;ar muebles r&uacute;sticos con estilo y presencia.
            En nuestros trabajos usamos madera seleccionada especialmente para una mejor calidad en la terminaci&oacute;n de los productos, 
            tanto para interior como para exterior.
            <br/>
            Para cualquier consulta acceda a la secci&oacute;n contacto y deje la suya.
        </p>
    </div>
    <?php
    include 'db.php';
    if ($res = $conexion->query("SELECT i.*, f.`foto` AS `imagen` FROM `md_item` i INNER JOIN `md_foto` f ON f.`id_item` = i.`id` WHERE f.`preferida` = '1' ORDER BY `i`.`nuevo` DESC Limit 2")) {
        $conexion->commit();
        $conexion->close();
    } else {
        $conexion->rollback();
        echo 'Error SQL';
        exit();
    }
    ?>
    <div class="right_box">
        <div class="title"><span class="title_icon"><img src="images/bullet2.png" alt="" title=""/></span>Nuevos</div> 
        <?php while ($obj = $res->fetch_object()) : ?>
            <div class="new_prod_box">
                <a href="details.php?id=<?php echo $obj->id; ?>">
                    <?php echo $obj->nombre; ?>
                    <span class="new_prod_bg">
                        <img src="images/muebles/<?php echo $obj->imagen; ?>" alt="" title="" class="thumb" border="0" width="88" height="96"/>
                    </span> 
                </a>
            </div>
        <?php endwhile; ?>

        <!--div class="new_prod_box">
            <a href="details.php?id=9">
                Sill&oacute;n
                <span class="new_prod_bg">
                    <img src="images/muebles/sillon01.jpg" alt="" title="" class="thumb" border="0" width="88" height="96"/>
                </span>
            </a>
        </div--> 
    </div>

    <div class="right_box">
        <div class="title"><span class="title_icon"><img src="images/bullet3.png" alt="" title="" /></span>Categor&iacute;as</div> 
        <ul class="list">
            <li><a href="interior.php?cat=1">Interiores</a></li>
            <li><a href="interior.php?cat=0">Exteriores</a></li>
        </ul>
    </div>
</div><!--end of right content-->
