<?php
require 'parametros.php';
class Conexion{
   protected $con;
   function __construct(){
   	 $this->con=new mysqli(SERVER,USER,PASSWORD,BASE)or die("No se ha podido conectar al servidor de Base de Datos");
     $this->con->set_charset("CHAR");
   }
}
$conexion=mysqli_connect(SERVER,USER,PASSWORD,BASE);

