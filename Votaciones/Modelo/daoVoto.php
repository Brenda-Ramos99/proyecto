<?php
class daoVoto {
private $partido;

    public function mostrar($partido){//Funcion para total de votos a nivel nacional
        $conexion= new mysqli("localhost","root","","votaciones");
        $sql="SELECT SUM(cantidad_votos) as totalVotos from detalle_acta WHERE id_partido=$partido";
        $result=$conexion->query($sql);
        while ($registro=mysqli_fetch_array($result)) {
            echo $registro['totalVotos'];
        }
        $conexion->close();
    }
}
