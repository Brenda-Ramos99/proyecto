<?php

require 'conexion.php';

session_start();
$usuarios=$_POST['username'];
$clave=$_POST['pass'];

$query="SELECT count(*) as contar from usuario where nombre='$usuario' 
and password='$clave'";

$consulta=mysqli_query($conexion,$query);
$arreglo=mysqli_fetch_array($consulta);

if($arreglo['contar']>0)
{
	$_SESSION['username']=$usuarios;
	header('location:../Vistas/ Menu.php');
}
else
{
	echo '<script language=javascript>
	alert("Usuario o Password errados, verifique.")
	self.location = "../login.php"
	</script>';
}


