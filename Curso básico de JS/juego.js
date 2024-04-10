var piedra = "Piedra";
var papel = "Papel";
var tijera = "Tijera";

var resultado = function(usuario,pc){
	if(usuario != pc){
		if(usuario == piedra && pc === tijera){
			console.log("Ganaste!");
		}else if(usuario == papel && pc ===piedra){
			console.log("Ganaste!");
		}else if(usuario == tijera && pc == papel){
			console.log("Ganaste!");
		}else{
			console.log("Perdiste!");
		}
	}else if(usuario == pc){
		console.log("Empate");
	}
};

resultado(piedra,piedra);