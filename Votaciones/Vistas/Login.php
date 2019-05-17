<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Iniciar Sesión</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">	
        <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util1.css">
	<link rel="stylesheet" type="text/css" href="css/main1.css">
	<script src="jquery.js"></script>	
	<script src="sweetalert2.all.min.js"></script>
    </head>
    <body>
        <div class="limiter">
            <div class="container-login100" style="background-image: url('images/4.jpg');">
		<div class="wrap-login100 p-t-30 p-b-50">
                    <span class="login100-form-title p-b-41">
			INICIAR SESIÓN
                    </span>
                    <form class="login100-form validate-form p-b-33 p-t-5" method="POST" action="../Controlador/controlUsuario.php">
			<div class="wrap-input100 validate-input" data-validate = "Enter username">
                            <input class="input100" type="text" name="login" placeholder="Usuario" autofocus>
                            <span class="focus-input100" data-placeholder="&#xe82a;"></span>
			</div>
			<div class="wrap-input100 validate-input" data-validate="Enter password">
                            <input class="input100" type="password" name="password" placeholder="Contraseña">
                            <span class="focus-input100" data-placeholder="&#xe80f;"></span>
			</div>
                        <div class="container-login100-form-btn m-t-32">
                            <button class="login100-form-btn" name="validar">
				Ingresar
                            </button>
			</div>

                    </form>
                    <span><br><br>
                        <a href="../Vistas/Principal.php"><center>Regresar a principal</center></a>	
                    </span>
                </div>
            </div>
	</div>
	<div id="dropDownSelect1"></div>
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script src="js/main.js"></script>
        <?php
        if(isset($_REQUEST["r"])){
                echo "<script>Swal.fire('Fail','Ususario o Contraseña invalido','warning');</script>";
           }
        ?>
    </body>
</html>
