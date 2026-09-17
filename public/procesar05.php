<?php 


//$nombre = $_POST['nombre'];
$datos = json_decode(file_get_contents("php://input"), true);

$name = $datos["nombre"];
$age   = $datos["edad"];
$email   = $datos["correo"];

$myObj = (object)[]; //creamosun objeto vacio	
$myObj->myname = "Mi nombre es ".$name;
$myObj->myage = "Mi edad es ".$age;
$myObj->myemail = "Mi correo es ".$email;

//codificacion de datos de obj a json
$myJSON = json_encode($myObj);

echo $myJSON; //enviamos de regreso el objeto con estructura json



?>