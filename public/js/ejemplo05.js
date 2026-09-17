/*const tabla = document.getElementById("miTabla");
tabla.style.border = "1px solid black";

const celda = document.getElementByName("micelda");
celda.style.border = "1px solid red";*/
/* $ Manda a traer a Jquery y este a su vez al DOM y le dice que seleccione todo lo que tenga td y le ponga 
el estilo .css  */
/*HTML = construye la página.*/
/*DOM = el mapa de lo que hay en la página.*/
/*JavaScript/jQuery = usa ese mapa para encontrar y modificar cosas.*/

async function enviar() {
  // alert(">>>");
  //definimos un objeto con estos atributos
  const datos = {
    nombre: "Jorge",
    edad: 45,
    correo: "jorge@correo.com",
  };
  //intentamos la ejecucion de este codigo
  try {
    const response = await fetch("procesar05.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify(datos),
    });

    if (!response.ok) {
      throw new Error("Error en la petición");
    }

    const data = await response.json();
    //const data = await response.text();
    console.log(data);
  } catch (error) {
    console.error("Error:", error);
  }
}
