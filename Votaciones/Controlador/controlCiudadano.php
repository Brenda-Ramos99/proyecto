<?php
require '../Modelo/daoCiudadano.php';
$ob=new DaoCiudadano();
if(isset($_REQUEST["buscar"])){
    $palabra=$_REQUEST["palabra"];
    $r=$ob->validarCiudadano($palabra);
    if($r>0){
        header("Location:../Vistas/reporteCiudadano.php");
    }
    else{
         /*echo '<script language = javascript>
	alert("DUI no encontrado, por favor verifique.")
	self.location = "../Vistas/Buscar.php"
	</script>';*/
        header("Location:../Vistas/Buscar.php?r=fail");
    }

}

