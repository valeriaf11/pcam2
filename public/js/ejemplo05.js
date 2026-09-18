/*const tabla = document.getElementById("miTabla");
tabla.style.border = "1px solid black";

const celda = document.getElementByName("micelda");
celda.style.border = "1px solid red";*/
/* $ Manda a traer a Jquery y este a su vez al DOM y le dice que seleccione todo lo que tenga td y le ponga 
el estilo .css  */
/*HTML = construye la página.*/
/*DOM = el mapa de lo que hay en la página.*/
/*JavaScript/jQuery = usa ese mapa para encontrar y modificar cosas.*/

// Creamos una función llamada enviar.
// "async" indica que la función puede realizar operaciones
// asíncronas y utilizar "await".
async function enviar() {
  // alert(">>>");
  //definimos un objeto con estos atributos
  const datos = {
    nombre: "Jorge",
    edad: 45,
    correo: "jorge@correo.com",
  };
  // try significa:"Intenta ejecutar este código".
  // Si ocurre un error, se irá al catch.
  try {
  // fetch() realiza una petición al servidor.
  // En este caso se comunica con el archivo procesar05.php.
  // await hace que JavaScript espere la respuesta
  // del servidor antes de continuar.
    const response = await fetch("procesar05.php", {
      method: "POST",
      headers: {
  // Le indicamos al servidor que los datos
  // que estamos enviando están en formato JSON.
        "Content-Type": "application/json",
      },
    // JSON.stringify(datos)
    // convierte el objeto de JavaScript en texto JSON.
    //
    // OBJETO:
    // { nombre: "Jorge", edad: 45 }
    //
    // ↓ JSON.stringify()
    //
    // TEXTO JSON:
    // {"nombre":"Jorge","edad":45}
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
