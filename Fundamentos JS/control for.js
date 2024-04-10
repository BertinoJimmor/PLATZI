var juan = {
	nombre: 'Juan Bertino',
	apellido: 'Jimenez',
	edad: 25,
	peso: 90,
}


console.log("Al nicio de anio", juan.nombre ,"pesa:", juan.peso ,"Kg");

const INCREMENTO_PESO = 0.3
const DIAS_DEL_ANO = 365

const aumentoDePeso = persona => persona.peso += INCREMENTO_PESO
const adelgazar = persona => persona.peso -= INCREMENTO_PESO
const comeMucho = () => Math.random() < 0.3
const realizaDeporte = () => Math.random() < 0.4 

for (var i = 1; i <= DIAS_DEL_ANO; i++) {
	var random = Math.random()
	if (random > 0.5) {
		// aumento de peso
		aumentoDePeso(juan)
	}else if (random < 0.5){ 
		//agelgaza
		adelgazar(juan)
	}
}

const META = juan.peso - 3
var dias = 0

while(juan.peso > META) {
	
	if (comeMucho()) {
		//aumenta de peso
		aumentoDePeso(juan)
	}
	if (realizaDeporte()) {
		//baja de peso
		adelgazar(juan)
	}
	dias += 1

}

console.log("Pasaron", dias, "Hasta que", juan.nombre ,"adelgazo 3 Kg.")
console.log("Al final del anio pesa", juan.peso.toFixed(2) , "Kg.")
//console.log("Variación", random)
