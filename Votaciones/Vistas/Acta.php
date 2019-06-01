<?php
require '../Modelo/conexion.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <!-- Required meta tags-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Colorlib Templates">
        <meta name="author" content="Colorlib">
        <meta name="keywords" content="Colorlib Templates">
        <!-- Title Page-->
        <title>Acta</title>
        <!-- Icons font CSS-->
        <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
        <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
        <!-- Font special for pages-->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
        <!-- Vendor CSS-->
        <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
        <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
        <!-- Main CSS-->
        <link href="css/main.css" rel="stylesheet" media="all">
        <!-- Bootstrap core CSS -->
        <link href="dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="assets/sticky-footer-navbar.css" rel="stylesheet">
        <link href="assets/style.css" rel="stylesheet">
        <script src="http://code.jquery.com/jquery-2.1.1.js"></script>
        <script src="dist/js/bootstrap.min.js"></script>
</body>
    </head>
    <body>
        <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
            <div class="wrapper wrapper--w680">
                <div class="card card-1">
                    <div class="card-heading"></div>
                        <div class="card-body">
                            <h1 class="title"><center>Acta De Escrutinio</center></h1>
                            <!---inicio del formulario-->
                            <form name="frmProduct" method="POST" action="../Modelo/daoActa.php">
                                <!---<div class="row row-space">       -->                      			
                                    <h5> Acta N°:</h5>
                                    <div class="caja">
                                        <select name="acta">
                                            <h4><option value="0">Seleccionar</option></h4>
                                            <?php
                                            $mostrar="SELECT * FROM acta";
                                            $consulta=mysqli_query($conexion,$mostrar);
                                              while($valores=mysqli_fetch_array($consulta)){
                                                echo '<option value="'.$valores[id_acta].'"><h4>'.$valores[id_acta].'</h4></option>';
                                             }
                                            ?>
                                        </select>
                                    </div>
                                <!--</div>                      		-->	
                                <br><br>    
                                <div id="outer">
                                    <div id="header">
                                        <div class="float-left">&nbsp; ID</div>
                                        <div class="float-left col-heading">&nbsp; Partido</div>
                                        <div class="float-left col-heading2">&nbsp; Votos</div>
                                    </div>
                                    <div id="productos">
                                        <?php require_once("InputDinamico.php") ?>
                                    </div>
                                    <div class="btn-action float-clear">
                                        <span class="success"><?php if(isset($resultado)){ echo$resultado;}?></span>
                                    </div>
                                    <div style="position: relative;">
                                        <input class="btn btn-primary" type="submit" name="guardar" value="Guardar Datos" />
                                    </div>
                                </div>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>
    <!-- Main JS-->
    <script src="js/global.js"></script>
    </body>
</html>
