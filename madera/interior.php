<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf8"></meta>
        <link rel="stylesheet" type="text/css" href="style.css" />
        <meta name="description" content="¡Bienvenido a su nuevo mueble." />
        <title>Home - Tu Mueble de Madera</title>
        <script src="js/jquery-1.5.1.min.js" type="text/javascript"></script>
        <script src="js/index.js" type="text/javascript"></script>
    </head>
    <body>
        <div id="wrap">
            <div class="header">
                <div class="logo"><a href="index.php"><img src="images/logo.jpg" alt="" title="" border="0" /></a></div>
                <div id="menu">
                    <ul>
                        <li><a href="index.php">inicio</a></li>
                        <?php if ($_GET['cat'] == 0) : ?>
                            <li class="selected"><a href="interior.php?cat=0">exteriores</a></li>
                        <?php else : ?>
                            <li><a href="interior.php?cat=0">exteriores</a></li>
                        <?php endif; ?>
                        <?php if ($_GET['cat'] == 1) : ?>
                            <li class="selected"><a href="interior.php?cat=1">interiores</a></li>
                        <?php else : ?>
                            <li><a href="interior.php?cat=1">interiores</a></li>
                        <?php endif; ?>
                        <?php if ($_GET['cat'] == 2) : ?>
                            <li class="selected"><a href="interior.php?cat=2">promociones</a></li>
                        <?php else : ?>
                            <li><a href="interior.php?cat=2">promociones</a></li>
                        <?php endif; ?>
                        <li><a href="about.php">quienes somos</a></li>
                        <li><a href="contact.php">contacto</a></li>
                    </ul>
                </div>
            </div>
            <?php include 'dbinterior.php'; ?>
            <div class="center_content">
                <div class="left_content">
                    <div class="title">
                        <span class="title_icon"><img src="images/bullet1.png" alt="" title="" /></span>
                        <?php
                        switch ($_GET['cat']) {
                            case 0: echo "Productos de exteriores";
                                break;
                            case 1: echo "Productos de interiores";
                                break;
                            case 2: echo "Productos en promoci&oacute;n";
                                break;
                        }
                        ?>
                    </div>
                    <div class="new_products">
                        <?php while ($obj = $res->fetch_object()): ?>
                            <div class="new_prod_box">
                                <div class="new_prod_bg">
                                    <a href="details.php?id=<?php echo $obj->id; ?>"><img src="images/muebles/<?php echo $obj->imagen; ?>" alt="" title="" class="thumb" border="0" /></a>
                                </div>
                                <a class="new_prod_span" href="details.php?id=<?php echo $obj->id; ?>"><label class="new_prod_span"><?php echo $obj->nombre; ?></label></a>
                            </div>
                        <?php endwhile; ?>
                    </div> 
                    <div class="clear"></div>
                </div><!--end of left content-->
                <?php include 'derecha.php'; // derecha ?>
                <div class="clear"></div>
            </div><!--end of center content-->
            <?php include 'footer.php'; // FOOTER ?>
        </div>
    </body>
</html>