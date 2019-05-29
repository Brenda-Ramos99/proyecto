<?php
require 'conexion.php';
$jrv=$_POST['jrv'];
$acta=$_POST['acta'];

$insertar="INSERT INTO detalle_acta(id_acta,cantidad_votos,id_partido) values ('$acta','$jrv')";

$insertar="INSERT INTO detalle_acta(id_acta,cantidad_votos) values ('$acta','$p1')";
if ($conexion->query($insertar)==TRUE ){
	echo '<script>alert("Datos almacenados correctamente.") self.location="../Vista/Menu.php"</script>';
}else{
	echo '<script>alert("No se pudo realizar el registro.") self.location="../Vista/Acta.php"</script>';
}

