<?php
//require 'conexion.php';
$acta=$_POST['acta'];
/*class Acta extends Conexion
{
    function __construct() {
        parent::__construct();
    }
    function insertar(){
        $query = "INSERT INTO detalle_acta(id_acta,cantidad_votos,id_partido) VALUES (".$acta.", ";
    }
}*/

if(!empty($_POST["guardar"])) {
    $con = mysqli_connect("localhost","root","", "pruebav");
    //$contador = count($_POST["cantidad_votos"]);
    $ProContador=0;
    $query = "INSERT INTO detalle_acta(id_acta,cantidad_votos,id_partido) VALUES (".$acta.", ";
    $queryValue = "";
    for($i=0;$i<4;$i++) {
        if(!empty($_POST["cantidad_votos"][$i]) ) {
            $ProContador++;
            if($queryValue!="") {
                $queryValue .= ",";
            }
            $queryValue .= "'" .$_POST["cantidad_votos"][$i]. "','" . $_POST["id_partido"][$i] . "'";
        }
    }
    $sql = $query.$queryValue;
    if($ProContador!=0) {
        $resultadocon = mysqli_query($con, $sql);
        if(!empty($resultadocon)) $resultado = " <br><ul class='list-group' style='margin-top:15px;'>"
                . "   <li class='list-group-item'>Registro(s) Agregado Correctamente.</li></ul>";
    }
}


