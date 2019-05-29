<!DOCTYPE html>
<html lang="es" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <title>Menu</title>
        <link rel="stylesheet" href="css/style3.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">

    </head>
    <body>
        <div class="header">
            <?php require 'validar.php';?>
            <h2 class="logo">SelectSalv</h2>
            <input type="checkbox" id="chk">
            <label for="chk" class="show-menu-btn">
              <i class="fas fa-ellipsis-h"></i>
            </label>

            <ul class="menu">
              <a href="Acta.php">ACTA</a>
              <a href="#">GRAFICOS</a>
              <a href="#">REPORTES</a>
              <a href="reporteUsuarios.php">USUARIOS</a>
              <a href="MenuAdmin.php?c=cerrar">SALIR</a>
              <label for="chk" class="hide-menu-btn">
                <i class="fas fa-times"></i>
              </label>
            </ul>
        </div>
    </body>
</html>
