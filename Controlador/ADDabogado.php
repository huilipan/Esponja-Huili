<?php

session_start();

include '../libreria.php';

try {
    $objAbogado = new abogado();
    $rut = $_POST['rut'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    
    
    $objAbogado->agregarAbogado( $idd,$rut, $nombre, $apellido);
    $_SESSION["msg"] = " agregado exitosamente";
    header('Location: ../MantenedorCliente.php');
} catch (exception $ex) {
    $_SESSION["msg"] = "Error al agregar cliente";
    header('Location: ../IngresaAbogado.php');
}
