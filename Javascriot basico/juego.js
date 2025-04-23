var pie = "Piedra";
var pap = "Papel";
var tij = "Tijera";

var resultado = function(user,cpu){
	if(user != cpu){
		if(user === pie && cpu === tij){
			console.log("Ganaste!");
		}else if(user === pap && cpu === pie){
			console.log("Ganaste!");
		}else if(user === tij && cpu === pap){
			console.log("Ganaste!");
		}else{
			console.log("Perdiste!");
		}
	}else if(user === cpu){
		console.log("Empate");
	}
};

resultado(pie,pie)