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
    </head>
    <body>
        <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
            <div class="wrapper wrapper--w680">
                <div class="card card-1">
                    <div class="card-heading"></div>
                        <div class="card-body">
                            <h1 class="title"><center>Acta De Escrutinio</center></h1>
                            <!---inicio del formulario-->
                            <form method="POST" action="#">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div>
                                            JRV N°:
                                            <select name="jrv" class="select">
                                            <option value="0">Seleccionar</option>
                                            <?php
                                            $mostrar="SELECT * FROM jrv";
                                            $consulta=mysqli_query($conexion,$mostrar);
                                              while($valores=mysqli_fetch_array($consulta)){
                                                echo '<option value="'.$valores[id_jrv].'">'.$valores[id_jrv].'</option>';
                                             }
                                            ?>
                                          </select></div>
                                       
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group">              			
                                            Acta N°:<input type="text"placeholder="0"name="acta" readonly></div>
                                    </div>
                                </div>
                                <h3> Partidos:</h3><br><br>
                                <div class="row row-space">
                                    <div class="col-2"><h4><center>Partido 1:</center></h4></div>
                                        <div class="input-group">
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <input type="text" placeholder="0" name="p1">
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>
                                </div>
                                <div class="row row-space">
                                    <div class="col-2"><h4><center>Partido 2:</center></h4></div>
                                        <div class="input-group">
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <input type="text"placeholder="0" name="p2">
                                                <div class="select-dropdown"></div>
                                            </div>
                                    </div>
                                </div>
                                <div class="row row-space">
                                    <div class="col-2"><h4><center>Partido 3:</center></h4></div>
                                        <div class="input-group">
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <input type="text" placeholder="0" name="p3">
                                                <div class="select-dropdown"></div>
                                            </div>
                                    </div>
                                </div>
                                <div class="row row-space">
                                    <div class="col-2"><h4><center>Partido 4:</center></h4></div>
                                        <div class="input-group">
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <input type="text"placeholder="0" name="p4">
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>
                                </div>
                                <div class="p-t-20">
                                    <button id="b1"class="btn btn--radius btn--green" type="submit">Enviar datos</button>
                                </div>            </div>

                            </form>
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
