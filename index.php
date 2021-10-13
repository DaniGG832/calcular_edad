<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario años</title>
</head>
<body>
    <?php
        require "auxiliar.php";

        $nombre = ($_GET["nombre"]);
        #$fecha = datatime($_GET(calcular("d-m-y")));

    ?>



    <h1>Rellene el formulario para saber su edad</h1>

    <form action="" method="GET">

    <label for="nombre">Nombre:</label>
    <input type="text" id=nombre name="nombre">

    <label for="apellido">Apellido:</label>
    <input type="text" id=apellido name="apellido">

    <label for="fecha_nac">Fecha de nacimiento:</label>
    <input type="date" name="fecha">
    <br>
    <h1>Fecha nacimiento</h1>

    <label for="dia">Dia:</label>
    <input type="text" id=dia name="dia">
    <label for="mes">Mes:</label>
    <input type="text" id=mes name="mes">
    <label for="ano">Año:</label>
    <input type="text" id=ano name="ano">

    <br><br>

    <button type="input" name="Calcular">Calcular edad</button>

    </form>

<br/>
<?php


    echo $nombre;
    $y = fecha($_GET["fecha"]);
    $y = date($_GET["fecha"]);
    $fecha = $_GET["fecha"];
    #echo $fecha;
    #echo $y;

    $fecha_nacimiento = new DateTime($_GET["fecha"]);
   $hoy = new DateTime();
   $edad = $hoy->diff($fecha_nacimiento);

   echo $edad->y;


?>


</body>
</html>