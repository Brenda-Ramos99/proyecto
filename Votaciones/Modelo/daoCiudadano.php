<?php
require 'conexion.php';
class DaoCiudadano extends Conexion{
    function __construct() {
        parent::__construct();
    }
    function validarCiudadano($palabra){
        $para=$this->con->prepare("SELECT * FROM vciudadano where DUI=?");
        $para->bind_param('s',$a);
        $a=$palabra;
        $para->execute();
        $para->store_result();
        return $para->num_rows();	
      }
}
