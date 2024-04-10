var piedra = "Piedra";
var papel = "Papel";
var tijera = "Tijera";

function resultado (usuario,pc){
    var user = usuario;
    var desktop = pc;
    console.log(user,desktop);
	switch (user) {
        case user == "Piedra":
            console.log("Ganaste!");
            break;
        default:
            console.log("Perdiste!");
           
    } 
};


resultado(piedra,piedra);