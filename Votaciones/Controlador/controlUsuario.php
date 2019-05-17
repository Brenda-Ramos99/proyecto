<?php
require '../Modelo/daoUsuario.php';
$ob=new DaoUsuario();
if(isset($_REQUEST["validar"])){
    $login=$_REQUEST["login"];
    $password=$_REQUEST["password"];
    $r=$ob->validarUsuario($login,$password);
    if($r>0){
        session_start();
        $_SESSION["s1"]=$login;
        header("Location:../Vista/Menu.php");
    }
    else
        header("Location:../Vista/Login.php?r=fail");

}
