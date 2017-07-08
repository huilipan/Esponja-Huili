<?php
/*Si no esta hecho el login se regresa a la página principal*/
include 'libreria.php';
session_start();
if(!isset($_SESSION["USR"])){
                
header('Location: '.URL);
exit;

 }
?>

<html>
    <head>
    <title></title>
    <link href="css/estiloprincipal.css" rel="stylesheet" type="text/css"/>
    <link href="css/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
         <?php
            if(isset($_SESSION["USR"])){
        ?>
        <a href="admin.php"></a>
        <div id="contenedor"><?php
                $oUsu=$_SESSION["USR"];
                echo $oUsu->user;
                ?>
            <a href="<?=URL?>Controlador/cerrarSesion.php">Cerrar sesión</a>
            <?php }?>
            <div id="header"></div>
            <div id="menulateral"><?php include('menu.php');?></div>
            <div id="contenido">
                <?php
                 $oListado=new Usuario();
                 
                 foreach ($oListado->ListadoArreglo() as $oElemento) {
                     
                     echo "<div>".$oElemento->idusuario ."/".utf8_encode($oElemento->nombre)."</div>";
                 }
                 //echo "<br>";
                 
                 // while($oElemento=$oListado->Listado()) {
                 //    echo "<div>".$oElemento->idusuario ."/".utf8_encode($oElemento->nombre)."</div>";
                // }
                ?>
               <!-- <div class="close"><a href="#" width:100px ; height: 100px; id="close"><img src="Imagen/abogados.jpg"/></a></div>-->
            </div>
        </div>
        
    </body>

    
</html>