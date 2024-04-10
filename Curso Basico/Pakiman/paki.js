// alert("Pakiman");
// class Pakiman{
//     constructor (){
//         // alert("Estoy vivo");
//     }
// }

var imagenes = [];

imagenes["Cauchin"] = "image/vaca.png";
imagenes["Pokacho"] = "image/pollo.png";
imagenes["Tocinauro"] = "image/cerdo.png";


//console.log(cauchin, pokacho, tocinauro);

// pokacho.mostrar();
// tocinauro.mostrar();
// cauchin.mostrar();

var coleccion = [];

coleccion.push(new Pakiman("Cauchin", 100, 30, "tierra"));
coleccion.push(new Pakiman("Pokacho", 80, 50, "Aire"));
coleccion.push(new Pakiman("Tocinauro", 120, 40, "Tierra"));
console.log(coleccion);

for(var pakin of coleccion){
   // console.log(coleccion[pakin]);
   pakin.mostrar();
}

for(var x in coleccion[0]){
    console.log(x);
}
