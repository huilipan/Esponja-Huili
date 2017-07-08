<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
 
<html>
<head>
<title>abogados </title>
<script src="JS/jquery-3.2.1.min.js" type="text/javascript"></script>
<link href="CSS/estiloprincipal.css" rel="stylesheet" type="text/css"/>

</head>
<body>
<section>
  <article>

     <fieldset><legend>Nuevo Usuario</legend>                 
           <form action="ADDusuario.php" method="Post">
                <table>
                    
                    <tr>
                        <td>nombre</td>
            		<td><input type="text" id="txtnombre" name="txtnombre"></td>
                    </tr>
                    <tr>
                        <td>usuario</td>
            		<td><input type="text" id="txtuser" name="txtuser"></td>
                    </tr>
                    
		<tr>
                        <td>clave</td>
            		<td><input type="text" id="txtclave" name="txtclave"></td>
                    </tr>
                    
                    
		
                    
                    
                    <tr>
                    </tr>  

                      <td>   
                         <input type="submit" value="GUARDAR" class="btn btn-info btn-block">

                </table>   
			<input class="btn btn-primary btn-md"  type="button" value="Atras" onclick="location.href='index.php'">
                        <input class="btn btn-primary btn-md"  type="button" value="Guardar">

     </fieldset>
	
	 </article>
	 
 
</section>

<footer>
 
  
   
</footer>

</body>
</html>