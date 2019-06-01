<?php
$acta=$_POST['acta'];
if(!empty($_POST["guardar"])) {
    $con = mysqli_connect("localhost","root","", "pruebav");
    $ProContador=0;
    $query = "INSERT INTO detalle_acta(id_acta,cantidad_votos,id_partido) VALUES ";
    $queryValue = "";
    for($i=0;$i<4;$i++) {
        if(!empty($_POST["cantidad_votos"][$i])) {
            $ProContador++;
            if($queryValue!="") {
                $queryValue .= ",";
            }
            $queryValue .= "(".$acta.",".$_POST["cantidad_votos"][$i].",".$_POST["id_partido"][$i].")";
        }
    }
    $sql = $query.$queryValue;
    if($ProContador!=0) {
        $resultadocon = mysqli_query($con, $sql);
        if(empty($resultadocon)) $resultado = "echo '<script language=javascript>
		alert('Datos almacenados correctamente')
		self.location ='../Menu.php''
		</script>'";
    }
}


