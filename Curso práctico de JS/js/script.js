// //console.log("Hola mundo JS");
// //let obtener = document.getElementsByClassName(parrafito);
// //console.log("Hola ",obtener);


// const h1=document.querySelector('h1');
// const p=document.querySelector('p');
// const parrafito=document.getElementsByClassName('parrafito');
// const pid=document.getElementById('pid');
// const input=document.querySelector('input');console.log(input.value);

// console.log({h1,p,parrafito,pid,input,});

// h1.innerHTML='Patito <br> Feo';
// h1.innerText='Patito <br> Feo';
// console.log(h1.getAttribute('pantalla'));

// // console.log(h1.getAttribute('class'));
// // h1.setAttribute('class', 'rojo');

// h1.classList.add('rojo');
// h1.classList.remove('verde');
// h1.classList.add('azul');
// h1.classList.toggle('verde');
// h1.classList.contains('verde');

// input.placeholder="456";
// const img=document.createElement('img');
// img.setAttribute('src','https://static.platzi.com/static/images/conf/logo_black@2x.png');
// console.log(img);
// pid.innerHTML="";
// pid.appendChild(img);

const h1 = document.querySelector('h1');
const input1 = document.querySelector('#calculo1');
const input2 = document.querySelector('#calculo2');
const btn = document.querySelector('#btnCalcular');
const pResult = document.querySelector('#result');


form.addEventListener('submit', sumarInputValues);


function sumarInputValues(event) {
  //console.log(event);
  //event.preventDefault();
  const sumaInputs = input1.value +  input2.value;
  pResult.innerText = "Resultado: " + sumaInputs;
};


