<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
        <title>Acerca de - Tu Mueble de Madera</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body>
        <div id="wrap">
            <div class="header">
                <div class="logo"><a href="index.php"><img src="images/logo.jpg" alt="" title="" border="0" /></a></div>            
                <div id="menu">
                    <ul>                                                                       
                        <li><a href="index.php">inicio</a></li>
                        <li><a href="interior.php?cat=0">exteriores</a></li>
                        <li><a href="interior.php?cat=1">interiores</a></li>
                        <li><a href='interior.php?cat=2'>promociones</a></li>  
                        <li class="selected"><a href="about.php">quienes somos</a></li>
                        <li><a href="contact.php">contacto</a></li>
                    </ul>
                </div>     
            </div> 
            <div class="center_content">
                <div class="left_content">
                    <div class="title"><span class="title_icon"><img src="images/anuncios.png" alt="" title="" /></span>Sobre nosotros</div>
                    <div class="feat_prod_box_details">
                        <p class="details">
                            <img src="images/adorno01.png" alt="" title="" class="right" /> 
                            Somos una empresa dedicada a la fabricaci&oacute;n de muebles de madera para el hogar.

                            Fabricamos muebles de calidad para interiores y exteriores. Utilizamos madera especialmente seleccionada y 
                            tratada y materiales de primera calidad para la construci&oacute;n de los muebles.
                         </p>
                              <p class="details">   
                             Nuestros valores son:
                        </p>
                        <ul>
                        	<li>Ofrecer productos de calidad.</li>
                            <li>Ofrecer al cliente un trato cordial.</li>
						</ul>            
						
						<p class="details">
                             Nuestra visi&oacute;n se cristaliza en una gama de productos que busca satisfacer la demanda de nuestros Clientes.
                        </p>
                    </div>	
                    <div class="clear"></div>
                </div><!--end of left content-->

                <?php
                // derecha
                include 'derecha.php';
                ?>              

                <div class="clear"></div>
            </div><!--end of center content-->


            <?php
            // FOOTER
            include 'footer.php';
            ?>


        </div>

    </body>
</html>