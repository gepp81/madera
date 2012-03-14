<?php

function mostrarHeader($item) {
    ?>
    <div class="header">
        <div class="logo"><a href="index.php"><img src="../images/logo.jpg" alt="" title="" border="0" /></a></div>
        <div id="menu">
            <ul>
                <?php if ($item == 1) : ?>
                    <li class="selected"><a href="index.php">INICIO</a></li>
                <?php else : ?>
                    <li><a href="index.php">INICIO</a></li>
                <?php endif; ?>
                <?php if ($item == 2) : ?>
                    <li class="selected"><a href="nuevo.php">Nuevo Producto</a></li>
                <?php else : ?>
                    <li><a href="nuevo.php">Nuevo Producto</a></li>
                <?php endif; ?>                    
                <?php if ($item == 3) : ?>
                    <li class="selected"><a href="productos.php">Listado de Productos</a></li>
                <?php else : ?>
                    <li><a href="productos.php">Listado de Productos</a></li>
                <?php endif; ?>                                    
                <?php if ($item == 4) : ?>
                    <li class="selected"><a href="configuracion.php">Configuraci&oacute;n</a></li>
                <?php else : ?>
                    <li><a href="configuracion.php">Configuraci&oacute;n</a></li>
                <?php endif; ?>                                                        
                <li><a href="salir.php">SALIR</a></li>
            </ul>
        </div>
    </div>
    <?php
}
?>