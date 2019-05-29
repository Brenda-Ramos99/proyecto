<?php
 require '../Modelo/conexion.php';
 $datos = $conexion->query("select * from detalle_acta");
    $data1="";
    $data2="";
    foreach ($datos as $v) {
 	  $data1.="'".$v["id_partido"]."',";
 	  $data2.=$v["cantidad_votos"].",";
    }
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
    </body>
</html>
