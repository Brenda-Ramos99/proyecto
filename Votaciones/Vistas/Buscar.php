<!DOCTYPE html>
<html>
    <head lang="es">
        <meta charset="UTF-8">
        <title>Buscar Centro de Votación</title>
        <!--Referencia al icono--> 
        <link rel='stylesheet' href='http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="cover">
            <h1>Ingrese el número de su DUI</h1>
            <form  class="flex-form">
                <label for="from">  
                    <span class="ion-android-search"></span>
                </label>
                <input type="search"pattern="[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]-[0-9]"placeholder="00000000-0">
                <input type="submit" value="Buscar">
            </form>
            <div id="madeby">
              <span>
                  <a href="../ProyectoVotaciones/Principal.php"><h3>Volver al Inicio</h3></a>
              </span>
            </div> 
        </div>
    </body>
</html>
