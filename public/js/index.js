/*const tabla = document.getElementById("miTabla");
tabla.style.border = "1px solid black";

const celda = document.getElementByName("micelda");
celda.style.border = "1px solid red";*/
/* $ Manda a traer a Jquery y este a su vez al DOM y le dice que seleccione todo lo que tenga td y le ponga 
el estilo .css  */
/*HTML = construye la página.*/
/*DOM = el mapa de lo que hay en la página.*/
/*JavaScript/jQuery = usa ese mapa para encontrar y modificar cosas.*/
$("td").css("border", "1px solid red");
