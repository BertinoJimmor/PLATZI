function sum(a,b){
    return a + b;
};

function calc(a,b,callback){ //no tiene que llamarse callback forzosamente
    return callback(a,b);
};

console.log(calc(2,3,sum)); // 5 


setTimeout(function(){
    console.log('Hola'); //
},5000); // 2 segundos  


function saludo(nombre){
    console.log(`Hola ${nombre}`);  
};

setTimeout(saludo, 2000, 'Juan Bertino'); //
// setTimeout espera 2 segundos y luego ejecuta la función saludo con el argumento ´Juan Bertino´


