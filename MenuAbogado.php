<!DOCTYPE html>
<?php
include 'libreria.php';
session_start();
include 'Controlador/ListaAbogado.php';
if(!isset($_SESSION["USR"])){
                
header('Location: '.URL);
exit;

 }
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/estiloprincipal.css" rel="stylesheet" type="text/css"/>
        <link href="css/datatables/media/css/jquery.dataTables.css" rel="stylesheet" type="text/css"/>
        <script src="css/datatables/media/js/jquery.js" type="text/javascript"></script>
        <script src="css/datatables/media/js/jquery.dataTables.js" type="text/javascript"></script>
        <script>
             $(document).ready(function() 
             {
               $('#example').DataTable();
             } );
        </script>
       
        
    </head>
    <body>
        <?php
            if(isset($_SESSION["USR"])){
        ?>
        <div id="contenedor">
                

            <div id="header"></div>
            <div id="menulateral"><?php include('menu.php');?></div>
            <div id="contenido">
                <fieldset><legend>BIENVENIDO ABOGADOS</legend>
                    <form style="background-color: yellow;">
                    <table id="example" class="display table-striped table-bordered"  >
                        <thead>
                            <tr>
                                <td>RUT</td>
                                <td>NOMBRE</td>
                                <td>APELLIDO </td>
                                
                                <td>ACTUALIZAR</td>
                                <td>ELIMINAR</td>
                            </tr>
                        </thead>
                        <tbody>
               
                       <?php while ($row = $nuevoAbogado->fetch_assoc()) { ?>
                                <tr>
                                    <td><?php echo $row['idAbogado']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['RutAbogado']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['NombreAbogado']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['ApellidoAbogado']; ?>
                                    </td>
                                   
                                    <td>
                                        <input class="btn btn-warning" type="button" name="btnEditar" value="Actualizar">
                                    </td>
                                    <td>
                                        <input class="btn btn-danger" type="button" name="btnEliminar" value="Eliminar">
                                    </td>
                                    
                                </tr>
                            <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td>RUT</td>
                                <td>NOMBRE</td>
                                <td>APELLIDO </td>
                               
                                <td>EDITAR</td>
                                <td>ELIMINAR</td>
                            </tr>
                        </tfoot>
                    </table>
                               
                        <button type="button" class="btn btn-success btn-lg btn-block " id="open" >Agregar Nuevo Abogado</button>
                            <font color="white" size=1><center><a href="IngresoAbogado.php" >Registrese</a></center></font>
                            <td><a href="<?=URL?>IngresoAbogado.php?rut=<?= $value->rut?>" >INGRESO</a></td>
                              <td><a href="<?=URL?>EliminarAbogados.php?idAbogado=<?= $value->idAbogado?>" >ELIMINAR</a></td>
                             <?php include './IngresoAbogado.php';?>
                </form>
                    <li ><a href='EliminarAbogados.php'>Eliminar</a></li>
                </fieldset>
                    <div id="popup" style="display: none; position: absolute">
                        <div class="content-popup">
                          
                            <div>
                                <?php include './IngresoAbogado.php';?>
                            </div>
                        </div>
                    </div>
                    <div class="popup-overlay"></div>
            </div>
        </div>
                    <?php } ?>
        
        
    </body>
</html>
