<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario
 *
 * @author huili
 */
class Usuario{
    var $idUsuario;
    var $nombre;
    var $user;
    var $clave;
    var $dbQuery;     
   
    var $abogado_idAbogado;
    
    
    
    public function __construct($usu="",$pwd="") {
        $this->user=$usu;
        $this->clave=$pwd;
    }    
    public function __construct2($usu="",$pwd="",$abogado="") {
        $this->user=$usu;
        $this->clave=$pwd;
        $this->abogado_idAbogado =$abogado;
    }
    
    public function VerificaAcceso(){
        $oConn=new Conexion();
        
        if($oConn->Conectar())
            $db=$oConn->objconn;            
        else
            return false;

        $clavemd5=md5($this->clave);
        
        $sql="SELECT * FROM usuario"
             ." WHERE User='$this->user' and Clave='$clavemd5'";
        
        $resultado=$db->query($sql);
        
       
        if($resultado->num_rows>=1){
            $row = $resultado->fetch_row();
            $this->idUsuario=$row[0];
            $this->user=$row[1];
            $this->abogado_idAbogado=$row[3];
            return true;
        }
        else{
            return false;
        }
            
    }
    //public function listarUsuario(){
       // $oConn=new Conexion();
        
        //if($oConn->Conectar())
        //    $db=$oConn->objconn;            
       // else
         //   return false;

        
        
        //$sql="SELECT * FROM usuario";
        
       // $listadoUsuario=$db->query($sql);
        
       
      //  return $listadoUsuario;
            
   // }
    public function Listado(){
        if (!$this->dbQuery){
            $oConn=new Conexion();
            if($oConn->Conectar())
                $db=$oConn->objconn;            
            else
                return false;
            $sql="SELECT * FROM usuario";
            $this->dbQuery=$db->query($sql);
        }
        
        $row=$this->dbQuery->fetch_assoc();
        
        if (!$row) return null;
        $oUsu=new Usuario();
        $oUsu->idusuario=$row["idUsuario"];
        $oUsu->nombre=$row["NombreUsuario"];
        $oUsu->user=$row["User"];
        return $oUsu;
         
    }
     public function ListadoArreglo(){
        $oConn=new Conexion();
        
        if($oConn->Conectar())
            $db=$oConn->objconn;            
        else
            return false;
       
        $sql="SELECT * FROM usuario";
        
        $resultado=$db->query($sql);
        
         $i=0;
         while($row = $resultado->fetch_assoc()){
               $oUsu=new Usuario();
               $oUsu->idusuario=$row["idUsuario"];
               $oUsu->nombre=$row["NombreUsuario"];
               $oUsu->user=$row["User"];
             $arrUsuarios[$i]=$oUsu;
             $i++;
         }
         if (isset($arrUsuarios)) return $arrUsuarios; else return null;
        
    }

}
