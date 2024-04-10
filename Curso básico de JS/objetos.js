var miAuto = {
	marca: "Toyota",
	modelo: "Corolla",
	allo: 2020,
	detalleDelAuto: function(){
		console.log('Auto ${This.modelo) $(This.allo)');
	}
};

miAuto.marca
miAuto.detalleDelAuto();

/* Objetos: Funcion constructora */ 

function auto(marca, modelo, anio){
	this.marca = marca;
	this.modelo = modelo;
	this.anio = anio;
}
var AutoNuevo = new auto("Tesla", "Model 3", 2020);
var autoNuevo2 = new auto("Tesla", "Model X", 2018);
var autoNuevo3 = new auto("Toyota", "Corolla", 2020);