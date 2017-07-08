<?php
/*Si no esta hecho el login se regresa a la página principal*/
include 'libreria.php';
session_start();



?>


<?php 
	$usuario=$_POST['txtnombre'];
	$password=$_POST['txtuser'];
	$email=$_POST['txtclave'];
	
	$query="INSERT INTO usuario (NombreUsuario, User, Clave) VALUES('$usuario','$password','$email')";
	
	$resultado=$mysqli->query($query);
	
?>

<html>
	<head>
		<title>Guardar usuario</title>
	</head>
	<body>
		<center>	
			
			<?php if($resultado>0){ ?>
				<h1>Usuario Guardado</h1>
				<?php }else{ ?>
				<h1>Error al Guardar Usuario</h1>		
			<?php	} ?>		
			
			<p></p>	
			
			<a href="index.php">Regresar</a>
			
		</center>
	</body>
	</html>	