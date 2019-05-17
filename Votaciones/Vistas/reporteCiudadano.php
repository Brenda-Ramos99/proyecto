<?php
require '../Modelo/conexion.php';
if(isset($_POST['buscar'])){
    date_default_timezone_set('America/El_Salvador');
    require_once('class.ezpdf.php');
    $pdf = new Cezpdf('a4',"landscape");
    $pdf->selectFont('fonts/Helvetica.afm');
    $pdf->ezSetCmMargins(1,1,1.5,1.5); 
    $buscar = $_POST["palabra"];
    $datos = $conexion->query("select * from vCiudadano WHERE DUI like '%$buscar%'");
    while($fila = mysqli_fetch_assoc($datos)) { 
        $data[] = array_merge($fila);
    }
    $titles = array(
    'DUI'=>'<b>DUI</b>',
    'nombre_centro'=>'<b>Centro de Votacioes</b>',
    'nombre'=>'<b>Nombre</b>',
    'apellido'=>'<b>Apellido</b>',
    );
    $txttit = "<b>Votaciones Presidenciales 2019</b>\n\n";
    $pdf->ezText($txttit, 12);
    $options = array( 
    'shadeCol'=>array(0.9,2,0.9,0.5),
    'xOrientation'=>'center',
    'width'=>500//ancho de tabla
    );
    $pdf->ezTable($data,$titles,'<b>Consulta de Centro de Votaciones</b>',$options);
    $pdf->ezText("\n\n\n", 24);
    $pdf->ezText("<b>Fecha:</b> ".date("d/m/Y"), 10);
    $pdf->ezText("<b>Hora:</b> ".date("H:i:s")."\n\n", 10);
    $pdf->ezStream();
}


