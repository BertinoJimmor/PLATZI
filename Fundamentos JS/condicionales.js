var sacha = {
	nombre: 'Sacha',
	apellido: "Lifsyc",
	edad: 28,
	ingeniero: false,
	cocinero: false,
	cantante: false,
	dj: false,
	guitarrista: false,
	drone: true
}

const MAYORIA_DE_EDAD = 18

function imprimirProfesiones(persona) {
	//alert('${persona.nombre} es:')
	
	if(persona.ingeniero === true){
	console.log('Ingeniero')
	}
	else{
		console.log('No es Ingeniero')
	}
	if(persona.cocinero === true){
	console.log('cocinero')
	}
	if(persona.cantante === true){
	console.log('cantante')
	}
	if(persona.dj === true){
	console.log('dj')
	}
	if(persona.guitarrista === true){
	console.log('guitarrista')
	}
	if(persona.drone === true){
	console.log('Piloto de drone')
	}

}

var juan = {
	nombre: 'Juan',
	apellido: 'Jimenez',
	edad: '15'
}

 const esMayordeEdad = persona => persona.edad >= MAYORIA_DE_EDAD 

imprimirProfesiones(sacha)
function imprimirMayorEdad(persona)
{
	if (esMayordeEdad(persona)){
		console.log('${persona.nombre} es mayor de edad')
	}else{
		console.log('${persona.nombre} es menor de edad')
	}
}



//imprimirMayorEdad(sacha)
imprimirMayorEdad(juan)

function permitirAcceso (persona) {
	if (!esMayordeEdad(persona)){
		console.log('acceso denegado')
	}

}


