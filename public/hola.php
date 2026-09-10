
<?php 


$nombre = $_GET['nombre'];
$apellido_paterno = $_GET['apellido_paterno'];
$apellido_materno = $_GET['apellido_materno'];

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
</body>
</html>