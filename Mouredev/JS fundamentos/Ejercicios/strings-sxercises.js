// Concatena dos cadenas de texto
let mensaje = "Hola soy juan bertino";
let mensaje2 = " y este es un mensaje de prueba"; 

let message = mensaje +  mensaje2;
console.log(message);

// Muestra la longitud de una cadena de texto
console.log("Longitud del mensaje: ", mensaje.length);
// Muestra el primer y el úlitmo carácter de un string
console.log("Primer carácter:", mensaje.charAt(0));

// Convierte  a mayúsculas y minúsculas un string
console.log(mensaje.toUpperCase());
//Crea una cadena de texto en varias lineas 
console.log(`Esta es una cadena
    en varias
    lineas
`);
// Interpola el valor de una variable en un string
console.log(`El mensaje es: ${message}`);
// Reemplaza todos los espacios en blanco de un string por guiones bajos
mensaje = mensaje.replace(/ /g, "_");
console.log(mensaje)
// Comprueba si una cadena de texto contiene un palabra concreta
console.log(mensaje.includes("juan"));

// Comprueba si dos strings son iguales 
let string1 = "Hola";
let string2 = "Hola";
console.log(string1 === string2);       
// Comprueba si dos strings tienen la misma longitud
console.log(string1.length === string2.length);



//
//

