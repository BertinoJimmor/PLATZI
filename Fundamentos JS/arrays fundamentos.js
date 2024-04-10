var juan = {
	nombre : 'Juan Bertino',
	apellido : 'Jimenez',
	altura : '1.80',
}
var pedro = {
	nombre : 'Pedro',
	apellido : 'Bautista',
	altura : '1.70',
}
var cecilia = {
	nombre : 'Cecilia',
	apellido : 'Islas',
	altura : '1.60',
}


 var personas = [juan, pedro, cecilia];

const esAlta = persona => persona.altura >= 1.8
//const esBaja = persona => persona.altura < 1.8
function esBaja (persona) {
	var persona = persona.altura < 1.8;
	return persona;
}
 
 //for (var i = 0; i < personas.length; i++){
//}
// 		var persona = personas[i];
 //		console.log(persona.nombre ,"mide", persona.altura);
 //}
function PasarAlturaACms (persona){
	var persona = persona.altura * 100;
	return persona;
}

var personasCms = personas.map(PasarAlturaACms)
var personasAltas = personas.filter(esAlta)
var personasBajas = personas.filter(esBaja)

console.log(personas)
console.log(personasAltas)
console.log(personasBajas)
console.log(personasCms)
