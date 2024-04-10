var frutas = ["Manzana", "Platano", "Cereza", "Fresa"];
var masfrutas = frutas.push("Uvas");    /*agrega al ultimo */
var ultimo = frutas.pop("Manzana");    /*eliminar el ultimo */
var nueva = frutas.unshift("Guayaba"); /*agrega en el primero */
var elimina = frutas.shift("Uvas"); /* elimina el primero */
var posicion = frutas.indexOf("Platano"); /*Trae la posición en el array*/
console.log(frutas);