<?php
require 'conexion.php';  
//require_once  __DIR__  .  ' ../mpdf/vendor/autoload.php ' ;
//require_once  ' model.php ' ;
if(isset($_POST['buscar'])) 
{   
?>
   <!-- el resultado de la búsqueda lo encapsularemos en un tabla -->
   <meta charset="UTF-8">
   <table width="100%" border="2px" align="center" cellpadding="1" cellspacing="1" lang="es">
       <tr width="100" align="center">
       <strong><h1><center>Votaciones Presidenciales 2019</center></h1></strong>
       </tr>
       <tr width="100" align="center">
       <strong><h3><center>Boleta de busqueda de Centro de Votación</center></h3></strong>
       </tr>
       <tr>
            <!--creamos los títulos de nuestras columnas  -->
            <td width="100" align="center"><strong>DUI</strong></td>
            <td width="100" align="center"><strong>Nombre de Centro de Votaciones</strong></td>
            <td width="100" align="center"><strong>Nombre</strong></td>
            <td width="100" align="center"><strong>Apellidos</strong></td>
       </tr> 
       <?php
       //obtenemos la información introducida anteriormente desde nuestro buscador PHP
       $buscar = $_POST["palabra"];
       
       $consulta_mysqli=mysqli_query($conexion,"SELECT * from vCiudadano WHERE DUI like '%$buscar%'");
 
       while($registro=mysqli_fetch_assoc($consulta_mysqli)) 
       {
           ?> 
       <tr lang="es">
               <td class="estilo-tabla" align="center" ><?=$registro['DUI']?></td>
               <td class="estilo-tabla" align="center" lang="es"><?=$registro['nombre_centro']?></td>
               <td class="estilo-tabla" align="center" lang="es"><?=$registro['nombre']?></td>
               <td class="estilo-tabla" align="center"lang="es"><?=$registro['apellido']?></td>
           </tr> 
           
           <?php 
       } //fin blucle
    ?>
    </table>
   <!-- <div id="madeby">
        <span>
            <a href="../Vistas/Buscar.php"><h3>Volver atras</h3></a>
        </span>
    </div> -->
    <?php
} // fin if 
?>