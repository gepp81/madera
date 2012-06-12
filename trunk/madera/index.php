<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf8"></meta>
        <link rel="stylesheet" type="text/css" href="style.css" />
        <link rel="shortcut icon" type="image/x-icon" href="logo.ico" />
        <meta name="description" content="Bienvenido a su nuevo mueble." />
        <title>Muebles para Jard&iacute;n &#38; Interior</title>
    </head>
    <body>
        <div id="wrap">
            <div class="header">
                <div class="logo"><a href="index.php"><img src="images/logo.jpg" alt="" title="" border="0" /></a></div>
                <div id="menu">
                    <ul>
                        <li class="selected"><a href="index.php">inicio</a></li>
                        <li><a href="interior.php?cat=0">exteriores</a></li>
                        <li><a href="interior.php?cat=1">interiores</a></li>
                        <li><a href='interior.php?cat=2'>promociones</a></li>
                        <li><a href="about.php">quienes somos</a></li>
                        <li><a href="contact.php">contacto</a></li>
                    </ul>
                </div>
            </div>
            <?php include 'dbindex.php'; ?>
            <div class="center_content">
                <div class="left_content">
                    <div class="title"><span class="title_icon"><img src="images/bullet1.png" alt="" title="" /></span>Productos Destacados</div>
                    <?php while ($obj = $res->fetch_object()) : ?>
                        <div class="feat_prod_box">
                            <div class="prod_img">
                                <a href="details.php?id=<?php echo $obj->id; ?>">
                                    <input type="hidden" name="id" value="<?php echo $obj->id; ?>"/>
                                    <img src="images/muebles/<?php echo $obj->imagen; ?>" alt="" title="" border="0" width="149" height="137" class="imgdestacado"/>
                                </a>
                            </div>
                            <div class="prod_det_box">
                                <div class="box_top"></div>
                                <div class="box_center">
                                    <div class="prod_title"><?php echo $obj->nombre; ?></div>
                                    <p class="details">
                                        <?php echo $obj->descripcion; ?>
                                    </p>
                                    <div class="clear"></div>
                                </div>
                                <div class="box_bottom"></div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    <?php endwhile; ?>
                    <div class="clear"></div>
                </div><!--end of left content-->
                <?php include 'derecha.php'; // derecha ?>
                <div class="clear"></div>
            </div><!--end of center content-->
            <?php include 'footer.php'; // FOOTER ?>
        </div>
    </body>
</html>
