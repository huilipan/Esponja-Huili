<?php
include('libreria.php');

/*
 * Verificaci�n del usuario y clave
* */
session_start();
if (!isset($_SESSION["oUsu"])){
?>
<!-- Reenvio a la p�gina principal-->
<script>
	document.location.href="index.php";
</script>
<?php 
}
?>