<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
        <title>Contacto - Tu Mueble de Madera</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
        <script src="js/jquery-1.5.1.min.js" type="text/javascript"></script>
        <script src="js/contact.js" type="text/javascript"></script>

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
                        <li><a href="about.php">quienes somos</a></li>
                        <li  class="selected"><a href="contact.php">contacto</a></li>
                    </ul>
                </div>     
            </div> 

            <div class="center_content">
                <div class="left_content">
                    <div class="title"><span class="title_icon"><img src="images/telefono.png" alt="" title="" /></span>Dejanos tu consulta.</div>
                    <div class="feat_prod_box_details">
                        <p class="details">
                            Por cualquier duda o consulta que tengas dejanos tu mensaje. 
                        </p>
                        <div class="contact_form">
                            <div class="form_subtitle">Formulario</div>          
                            <div id="mensajeajax"></div>
                            <div class="form_row">
                                <label class="contact"><strong>Nombre:</strong></label>
                                <input type="text" class="contact_input" id="nombre"/>
                            </div>  
                            <div class="form_row">
                                <label class="contact"><strong>Email:</strong></label>
                                <input type="text" class="contact_input" id="email" />
                            </div>
                            <div class="form_row">
                                <label class="contact"><strong>Tel&eacute;fono:</strong></label>
                                <input type="text" class="contact_input" id="telefono" />
                            </div>
                            <div class="form_row">
                                <label class="contact"><strong>Mensaje:</strong></label>
                                <textarea class="contact_textarea" id="mensaje" cols="15" rows="5"></textarea>
                            </div>
                            <div class="form_row">
                                <label class="contact_input">Nombre y mensaje son obligatorios.</label><br/>
                                <label class="contact_input">Tel&eacute;fono o Email, complete al menos uno.</label>
                            </div>                            
                            <div class="form_row">
                                <a class="contact" style="cursor: pointer;" id="enviar">enviar</a>
                            </div>
                        </div>  
                    </div>	
                    <div class="feat_prod_box_details">
                        <div class="contact_form">
                            <div style="float: left;">
                                <img src="images/fb02.png" alt="" title="Contacto FB"/>
                            </div>
                            <div style="float: left; padding-top: 9px; padding-left: 15px;">
                                <div >
                                    <a href="http://www.facebook.com/muebledejardin" target="_blank">
                                        <label style="font-size: 1.2em;cursor: pointer;">www.facebook.com/muebledejardin</label>
                                    </a>
                                </div>
                            </div>
                        </div>  
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