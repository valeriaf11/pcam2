
<?php 


/* $_POST tambnien es una variable de sesion del servidor */
$usuario = $_POST['usuario_1'];
$contra = $_POST['contra_1'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hola2</h1>
    <h1>*usuario:  <?php echo $usuario;?></h1>
    <h1>*contraseña: <?php echo $contra;?></h1>
   
</body>
</html>