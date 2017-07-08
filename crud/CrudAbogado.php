<?php
include("../libreria.php");
$objAbogado=new abogado();
foreach ($_POST as $idd){
	$objAbogado->Elimina($idd);	
};
?>

<script>
	document.location.href="<?=PATHURL?>ElimnaAbogado.php";
</script>