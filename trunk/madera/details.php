<!-- !DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN" "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml" dir="ltr" lang="es-ES">

    <?php include 'dbdetail.php'; ?>
    <?php $obj = $res->fetch_object(); ?>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf8"></meta>
        <link rel="stylesheet" type="text/css" href="style.css" />
        <link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />
        <script src="js/prototype.js" type="text/javascript"></script>
        <script src="js/scriptaculous.js" type="text/javascript"></script>
        <script src="js/lightbox.js" type="text/javascript"></script>
        <title><?php echo $obj->nombre; ?></title>
        
        <meta property="og:image" content="<?php echo $obj->fotoface; ?>" />
        <meta property="og:type" content="website" />
        <meta property="og:site_name" content="Muebles de Jardín" />
        <meta property="fb:admins" content="1586403758" />
    </head>
    <body>
        <div id="fb-root"></div>
        <script type="text/javascript">(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
        <div id="wrap">
            <div class="header">
                <div class="logo"><a href="index.php"><img src="images/logo.jpg" alt="" title="" /></a></div>
                <div id="menu">
                    <ul>
                        <li><a href="index.php">inicio</a></li>
                        <li><a href="interior.php?cat=0">exteriores</a></li>
                        <li><a href="interior.php?cat=1">interiores</a></li>
                        <li><a href='interior.php?cat=2'>promociones</a></li>  
                        <li><a href="about.php">quienes somos</a></li>
                        <li><a href="contact.php">contacto</a></li>
                    </ul>
                </div>
            </div>
            <div class="center_content">
                <div class="left_content">
                    <div class="crumb_nav">
                        <a href="index.php">inicio</a> &gt;&gt; <?php echo $obj->nombre; ?>
                    </div>
                    <div class="title"><span class="title_icon"><img src="images/bullet1.png" alt="" title="" /></span><?php echo ucwords($obj->nombre); ?></div>
                    <div class="feat_prod_box_details">
                        <?php $primera = $fotos->fetch_object(); ?>
                        <div class="prod_img"><img src="images/muebles/<?php echo $primera->foto; ?>" width="149" height="137" class="imgdestacado" alt=""/>
                            <br /><br />
                            
                            <a href="images/muebles/<?php echo $primera->foto; ?>" rel="lightbox[roadtrip]"><img src="images/zoom.gif" alt="" title=""  /></a>
                            <?php while ($foto = $fotos->fetch_object()) : ?>
                                <a href="images/muebles/<?php echo $foto->foto; ?>" rel="lightbox[roadtrip]"></a>
                            <?php endwhile; ?>
                        </div>
                        <div class="prod_det_box">
                            <div class="box_top"></div>
                            <div class="box_center">
                                <div class="prod_title">Detalles</div>
                                <p class="details">
                                    <?php echo $obj->descripcion; ?>
                                </p>
                                <hr style="width: 95%;"/>
                                <div class="clear"></div>
                                <div class="fb-like" data-href="http://www.tumuebledemadera.com.ar/details.php?id=<?php echo $obj->id; ?>" 
                                     data-send="false" data-width="295" data-show-faces="false"></div>
                            </div>
                            <div class="box_bottom"></div>
                        </div>    
                        <div class="clear"></div>
                    </div>	
                    <div class="clear"></div>
                </div><!--end of left content-->
                <?php include 'derecha.php'; // derecha ?>
                <div class="clear"></div>
            </div><!--end of center content-->
            <?php include 'footer.php'; // footer?>
        </div>
    </body>
</html>