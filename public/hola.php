
<?php 

//$_GET es una variable de sesion del servidor */

$nombre = $_GET['nombre'] ?? '';
$apellido_paterno = $_GET['apellido_paterno'] ?? '';
$apellido_materno = $_GET['apellido_materno'] ?? '';


/* $_POST tambien es una variable de sesion del servidor */
//$usuario = $_POST['usuario_1'];
//isset() = verifica si un dato existe.
//? : = operador ternario, sirve como un if/else corto
$usuario = isset($_POST['usuario_1']) ? $_POST['usuario_1'] : '';
//$contra = $_POST['contra_1'];
$contra = isset($_POST['contra_1']) ? $_POST['contra_1'] : '';

// Verifica si el dato Nombre1 fue enviado por POST.
// Si existe, lo guarda en $Nombre; si no, guarda un valor vacío.
$Nombre = isset($_POST['Nombre1']) ? $_POST['Nombre1'] : '';
// Verifica y guarda la edad recibida por POST.
$Edad = isset($_POST['Edad1']) ? $_POST['Edad1'] : '';
// Verifica y guarda el pasatiempo recibido por POST.
$Pasatiempo = isset($_POST['Pasatiempo1']) ? $_POST['Pasatiempo1'] : '';
// Verifica y guarda el color recibido por POST.
$Color = isset($_POST['Color1']) ? $_POST['Color1'] : '';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OLA SI OLA</title>
</head>
<body>
    <h1>Hola</h1>
    <h1>* <?php echo $nombre;?></h1>
    <h1>* <?php echo $apellido_paterno;?></h1>
    <h1>* <?php echo $apellido_materno;?></h1>
    <hr>
     <h1>*usuario:  <?php echo $usuario;?></h1>
    <h1>*contraseña: <?php echo $contra;?></h1>
 <hr>
   
<h1>*Nombre: <?php echo $Nombre; ?> </h1>
    <br><br>
<h1>*Edad: <?php echo $Edad; ?> </h1>
    <br><br>
<h1>*Pasatiempo favorito: <?php echo $Pasatiempo; ?> </h1>
    <br><br>
<h1>*Color favorito: <?php echo $Color; ?> </h1>

</body>
</html>