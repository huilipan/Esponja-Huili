<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of abogado
 *
 * @author huili
 */
class abogado {
    //put your code here
    var $idAbogado;
var $RutAbogado;
    var $NombreAbogado;
    var $ApellidoAbogado;
    var $querysel;
 
    
    public function __construct() {
        
    }
    public function __construct1($idd="",$rut="",$nom="",$apat="") {
        $this -> idAbogado = $idd;
        $this -> RutAbogado= $rut;
        $this -> NombreAbogado = $nom;
        $this -> ApellidoAbogado = $apat;
        
    }
    function idAbogado(){
		return $this->idAbogado;
	}
	
	function NombreAbogado(){
		return $this->NombreAbogado;
        }
    public function listarAbogado(){
        $oConn=new Conexion();
        
        if($oConn->Conectar())
            $db=$oConn->objconn;            
        else
            return false;

        
        
        $sql="SELECT * FROM Abogado";
        
        $listarAbogado=$db->query($sql);
        
       
        return $listarAbogado;
            
    }
    public function agregloAbogado($idd="",$rut="",$nom="",$apat=""){
        $oConn=new Conexion();
        
        if($oConn->Conectar()){
                $db=$oConn->objconn;        
                $sql="insert into Abogado (idAbogado,RutAbogado,NombreAbogado,ApellidoAbogado) values ('$idd','$rut','$nom','$apat')";
        
                $insertAbogado=$db->query($sql);  
        }
           
    }
    function Selecciona(){
		
		if (!$this->querysel){
		$db=dbconnect();
		/*Definici�n del query que permitira ingresar un nuevo registro*/
		
			$sqlsel="select idAbogado,RutAbogado,NombreAbogado,ApellidoAbogado, from abogado order by NombreAbogado";
		
			/*Preparaci�n SQL*/
			$this->querysel=$db->prepare($sqlsel);
		
			$this->querysel->execute();
		}
		
		$registro = $this->querysel->fetch();
		if ($registro){
			return new self($registro['idAbogado'], $registro['RutAbogado'], $registro['ApellidoAbogado']);			
		}
		else {
			return false;
			
		}
	}
 function EliminaAbogado($rutEliminar=""){
        $oConn=new Conexion();                
        if ($oConn->Conectar()) {
        $db=$oConn->objconn; 
            $sql="DELETE FROM Abogado WHERE idAbogado='$rutEliminar'";
             $deleter=$db->query($sql);  
             header('location:'.URL.'abogado.php');
        }
        
    }
  
}
