<?php
require 'conexion.php';
class DaoUsuario extends Conexion{
    function __construct() {
        parent::__construct();
    }
    function validarUsuario($login,$password){
        $para=$this->con->prepare("select * from usuario where login=? and password=?");
        $para->bind_param('ss',$a,$b);
        $a=$login;
        $b=sha1($password);
        $para->execute();
        $para->store_result();
        return $para->num_rows();	
      }
}

