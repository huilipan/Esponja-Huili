<?php
$objAbogado=new abogado();
?>
<form method="post" action="crud/CrudAbogado.php">
<?php
While($Registro=$objAbogado->Selecciona()){

	?>
<input type="checkbox" name=elimina<?=$Registro->idAbogado()?> value="<?=$Registro->idAbogado()?>">
<?=$Registro->NombreAbogado()?>/<?=$Registro->idAbogado()?>
<br>
<?php
}

?>
<input type="submit" value="Eliminar">
</form>