<?php
session_start();
   if(isset($_SESSION["s1"])){
   	 echo "Bienveni@ ".$_SESSION["s1"];
   }
   else{
   	 header("Location:Login.php");
   }
   if(isset($_REQUEST["c"])){
   	session_destroy();
   	header("Location:Login.php");
   }


