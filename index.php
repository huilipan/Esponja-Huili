<?php 
/*si no esta echo el login se regresa a la pagina principal*/
include 'libreria.php';
session_start();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>

        <meta charset="UTF-8">
        <title></title>
    </head>
    <script src="<?=URL?>js/jquery-3.2.1.min.js" type="text/javascript"></script>
   
    <body>
        <header>
            <h1>Bienvenido a las soluciones a tus problemas </h1>
        </header>

        
        
        <?php
            if(isset($_SESSION["USR"])){
        ?>
        <div><?php
                $oUsu=$_SESSION["USR"];
                echo $oUsu->user;
                ?>
            <a href="<?=URL?>Controlador/cerrarSesion.php">Cerrar sesión</a>
        </div>
        <?php
        }
        if(!isset($_SESSION["USR"])){
        ?>
        <section>
        <article>
        <fieldset>
        <form action="<?=URL?>Controlador/Valida.php" method="post">
            <table>
            <tr>
                <td>
                    <div><label>Nombre: </label><input id="nomusu" type="text" name="nomusu"></div>
                </td>
            </tr>    
            <tr>
                <td>
                    <div><label>Clave: </label><input id="claveusu" type="password" name="claveusu"></div>
                </td>
            </tr>
            <tr>
                <td>
                    <input id="enviar" type="button" value="Acceder">
                    <div id="msjweb"></div>
                </td>
            </tr>
            
            </table>
        </form>
        </fieldset>
        </article>
        </section>
        <?php 
            }
           ?>
        
        <footer>
        <h1>Bufete Abogados Huili</h1>
        <h2>Teléfono 222785690 - 2255986185</a></h2>
       
        </footer>
        
    </body>
    <script type="text/javascript">
        $(document).ready(function(){
            
             $("#enviar").click(function(){
                 if($("#nomusu").val()=="" || $("#claveusu").val()==""){
                     alert("Debe agregar un usuario y clave");
                 }
                 else{
                     $.ajax({url:"<?=URL?>Controlador/Valida.php"
                            ,type:"post"
                            ,data:{'nomusu':$("#nomusu").val(),
                                   'claveusu':$("#claveusu").val()}
                            ,success:function(resweb){
                                $('#msjweb').html(resweb);
                                if(resweb=="Todo Bien"){
                                    location.href="<?=URL;?>/admin.php";
                                }
                            }
                        });//Cierre AJAX                     
                 }
                
            });//Click del botón  
            
        });//Ready del document
    
    </script>
   
</html>