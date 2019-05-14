<?php
require 'conexion.php';  
if(isset($_POST['buscar'])) 
{   
?>
   <!-- el resultado de la búsqueda lo encapsularemos en un tabla -->
   <meta charset="UTF-8">
   <table width="100%" border="0" align="center" cellpadding="1" cellspacing="1">
       <tr>
            <!--creamos los títulos de nuestras columnas  -->
            <td width="100" align="center"><strong>DUI</strong></td>
            <td width="100" align="center"><strong>Id_Centro</strong></td>
            <td width="100" align="center"><strong>Nombre</strong></td>
            <td width="100" align="center"><strong>Apellidos</strong></td>
       </tr> 
       <?php
       //obtenemos la información introducida anteriormente desde nuestro buscador PHP
       $buscar = $_POST["palabra"];
      // $consulta= 
       $consulta_mysqli=mysqli_query($conexion,"SELECT * from ciudadano WHERE DUI like '%$buscar%'");
 
       while($registro=mysqli_fetch_assoc($consulta_mysqli)) 
       {
           ?> 
       <tr lang="es">
               <td class="estilo-tabla" align="center"><?=$registro['DUI']?></td>
               <td class="estilo-tabla" align="center" lang="es"><?=$registro['id_centro']?></td>
               <td class="estilo-tabla" align="center" lang="es"><?=$registro['nombre']?></td>
               <td class="estilo-tabla" align="center"lang="es"><?=$registro['apellido']?></td>
           </tr> 
           
           <?php 
       } //fin blucle
    ?>
    </table>
    <div id="madeby">
        <span>
            <a href="../Vistas/Buscar.php"><h3>Volver atras</h3></a>
        </span>
    </div> 
    <?php
} // fin if 
?>