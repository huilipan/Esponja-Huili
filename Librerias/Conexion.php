<?php
class Conexion{
    var $objconn;
    
    /*Metodo de conexión*/
    var $dbusr="root";
    var $dbpwd="";
    var $dbhost="localhost";
    var $dbname="bufete1";
    
    public function Conectar(){
         $this->objconn = new mysqli($this->dbhost,
                                      $this->dbusr,
                                      $this->dbpwd,
                                      $this->dbname);
         
       if ($this->objconn->connect_errno) {
        return "Fallo al conectar a MySQL: (" . $this->objconn->connect_errno . ") " . $this->objconn->connect_error;
     }
     return true;  
    }
    
}