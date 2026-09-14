<?php

$Nombre = $_POST["Nombre1"] ?? "";
$Edad = $_POST["Edad1"] ?? "";
$Pasatiempo = $_POST["Pasatiempo1"] ?? "";
$Color = $_POST["Color1"] ?? "";

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Datos recibidos</title>
</head>

<body>

<h2>Formulario de datos</h2>

<h1>*Nombre: <?php echo $Nombre; ?></h1>

<h1>*Edad: <?php echo $Edad; ?></h1>

<h1>*Pasatiempo favorito: <?php echo $Pasatiempo; ?></h1>

<h1>*Color favorito: <?php echo $Color; ?></h1>

</body>
</html>