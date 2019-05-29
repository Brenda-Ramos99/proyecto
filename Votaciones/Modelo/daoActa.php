<?php
require 'conexion.php';
$jrv=$_POST['jrv'];
$acta=$_POST['acta'];
$p1=$_POST['p1'];
/*$p2=$_POST['p2'];
$p3=$_POST['p3'];
$p4=$_POST['p4'];'$p2','$p3','$p4')*/
$insertarA="INSERT INTO detalle_acta(id_acta,cantidad_votos,id_partido) values ('$acta','$jrv')";

$insertar="INSERT INTO detalle_acta(id_acta,cantidad_votos) values ('$acta','$p1')";
if ($conexion->query($insertar)==TRUE &&$conexion->query($insertarA)==TRUE ){
	echo '<script>alert("Datos almacenados correctamente.") self.location="../Vista/Acta.php"</script>';
}else{
	echo '<script>alert("No se pudo realizar el registro.") self.location="../Vista/Acta.php"</script>';
}

