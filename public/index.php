<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>

<table id="miTabla">
    <!--Tbody=cuepo de la tabla , tr=filas , td=celdas , thead=encabezado de la tabla --> 
    <!--table>tbody>tr*5>td*3-->
    <tbody>
        <tr>
            <td>Emma Valeria Salinas Tejada</td>
            <td>21</td>
            <td>emma@unid.mx</td>
        </tr>
        <tr>
            <td>Ashly Naomi Sanchez Torres</td>
            <td>21</td>
            <td>ash@unid.mx</td>
        </tr>
        <tr>
            <td>Jovany Gallardo Julian</td>
            <td>21</td>
            <td>jovany@unid.mx</td>
        </tr>
        <tr>
            <td>Jorge Ortiz Garcia</td>
            <td>??</td>
            <td>jorge@cfe.mx</td>
        </tr>
        <tr>
            <td>Jose Ivan Catalan Lopez</td>
            <td>37</td>
            <td>ivan@cfe.mx</td>
        </tr>
    </tbody>
    <thead>
        <tr>
            <td name="micelda">Nombre</td>
            <td name="micelda">Edad</td>
            <td>correo</td>
        </tr>
    </thead>
</table>

<!--script src="https://code.jquery.com/jquery-4.0.0.js" integrity="sha256-9fsHeVnKBvqh3FB2HYu7g2xseAZ5MlN6Kz/qnkASV8U=" crossorigin="anonymous"></script-->
<!--script src="js/jquery-4.0.0.js"></script-->
<!-- Query es una biblioteca de JavaScript que facilita seleccionar y modificar elementos del HTML
(DOM), usando menos código. -->
<!-- Carga la librería jQuery para poder usar sus funciones -->
<script src="js/jquery-4.0.0.min.js"></script>
<!-- Carga nuestro archivo JavaScript donde escribimos el funcionamiento de la página (index.js) -->
<script src="js/index.js"></script>
<!-- Cargamos la biblioteca jQuery en index.php para facilitar algunas tareas de JavaScript. Después
cargamos nuestro archivo index.js, donde escribimos las instrucciones que queremos ejecutar. En
este caso usamos jQuery para buscar todos los elementos <td> y ponerles un borde. jQuery trabaja
con el DOM, que es la estructura que el navegador crea a partir del HTML y que permite encontrar y
modificar los elementos de la página. -->
</body>
</html>