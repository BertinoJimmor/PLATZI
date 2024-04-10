//alert("Todo bien :D");
var teclas = {
    UP : 38,
    DOWN : 40,
    RIGHT : 39,
    LEFT : 37
};

document.addEventListener("keyup", dibujarTeclado);
var cuadrito = document.getElementById("area_de_dibujo");
var papel = cuadrito.getContext("2d");
var x = 150;
var y = 150;


dibujarLinea("red", 149, 149, 151, 151, papel);
//console.log(teclas);

function dibujarLinea(color, xinicial, yinicial, xfinal, yfinal, lienzo)
{
  lienzo.beginPath();
  lienzo.strokeStyle = color;
  lienzo.lineWith =  3;
  lienzo.moveTo(xinicial, yinicial);
  lienzo.lineTo(xfinal, yfinal);
  lienzo.stroke();
  lienzo.closePath();
}

function dibujarTeclado(evento)
{
   // alert("Oh por dios!");
   //console.log("Tecla oprimida");
   //console.log(evento.keyCode);
  // console.log(evento.keyCode);
    // if(evento.keyCode == teclas.UP){
    //     console.log("Arriba");
    // }
    // if(evento.keyCode == teclas.DOWN){
    //     console.log("Abajo");
    // }
    // if(evento.keyCode == teclas.RIGHT){
    //     console.log("Derecha");
    // }
    // if(evento.keyCode == teclas.LEFT){
    //     console.log("Izquierda");
    // }
    var colorsito = "blue";
    var movimiento = 10;
    switch(evento.keyCode){
        case teclas.DOWN :
            console.log("Abajo");
            dibujarLinea(colorsito, x, y, x, y + movimiento, papel);
            y = y + movimiento;
            break;
        case teclas.UP :
            console.log("Arriba");
            dibujarLinea(colorsito, x, y, x, y - movimiento, papel);
            y = y - movimiento;
            break;
        case teclas.LEFT :
            console.log("Izquierda")
            dibujarLinea(colorsito, x, y, x - movimiento, y, papel);
            x = x - movimiento;
        break;
        case teclas.RIGHT :
            console.log("Derecha");
            dibujarLinea(colorsito, x, y, x + movimiento, y, papel);
            x = x + movimiento;
        break;
        
        default :
        console.log("Otra tecla");
    }

}


