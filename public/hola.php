
<?php 

//$_GET es una variable de sesion del servidor */

$nombre = $_GET['nombre'] ?? '';
$apellido_paterno = $_GET['apellido_paterno'] ?? '';
$apellido_materno = $_GET['apellido_materno'] ?? '';


/* $_POST tambnien es una variable de sesion del servidor */
//$usuario = $_POST['usuario_1'];
$usuario = isset($_POST['usuario_1']) ? $_POST['usuario_1'] : '';
//$contra = $_POST['contra_1'];
$contra = isset($_POST['contra_1']) ? $_POST['contra_1'] : '';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hola</h1>
    <h1>* <?php echo $nombre;?></h1>
    <h1>* <?php echo $apellido_paterno;?></h1>
    <h1>* <?php echo $apellido_materno;?></h1>
    <br>
     <h1>*usuario:  <?php echo $usuario;?></h1>
    <h1>*contraseña: <?php echo $contra;?></h1>
</body>
</html>