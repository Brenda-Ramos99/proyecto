<?php
require 'parametros.php';

class Conexion {
    protected $con;
        function __construct() {
            $this->con=new mysqli(SERVER,USER,PASSWORD,VOTACIONES);
            $this->con->set_charset(CHAR);
        
    }

}
