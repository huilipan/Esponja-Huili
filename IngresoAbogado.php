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
    <body>
        <?php
        if (isset($_SESSION["USR"])) {
            ?>
          
        <fieldset><legend>Nuevo Abogado</legend>                 
            <form  action="Controlador/ADDabogado.php" method="post" >
                <div class="form-group">
                        <label >Rut</label>
                        <input type="text" class="form-control" name="rut" placeholder="Rut">
                        <br>
                        <label >Nombre</label>
                        <input type="text" class="form-control" name="nombre" placeholder="Nombre">
                        <br>
                        <label >Apellido </label>
                        <input type="text" class="form-control" name="apellido" placeholder="Apellido">
                        <br>
                       
                        <br>
                        <br>
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Guardar </button>
                    </div>			
            </form>
			
     </fieldset>

        <?php } ?>
    </body>
</html>
