//EJERCICIO 2
/*

function multiplicar() {

  for (var i = 1; 3*i <= 135; i++) {
    console.log ('3 x '+i+' = '+(3*i));
  }

};

multiplicar();

*/

/*----------------------------*/

//EJERCICIO 3
/*

function random() {

  return Math.floor(Math.random()*6)+1;

}

var dado = random();

function parOImpa(){

  var resultado = dado%2;

  switch (resultado) {
    case 0 : console.log("es Par.");

      break;

    default: console.log("Es Impar.");

  }
}


console.log (dado);
parOImpa();

*/

/*----------------------------*/

//EJERCICIO 4
/*

function random2() {
  return Math.floor(Math.random()*37)+1;
}

function noes() {

  var x = 1;

  do {
    var azar = random2();
    var x = x + 1;
  } while (azar!=19);

  console.log ('Salió el número 19, se tomaron '+x+' intentos para ello.');

}

noes();
*/

/*----------------------------*/

//EJERCICIO 5
/*
var numpares = [];

function sisonpares() {
  for (var i = 1; i <= 100; i++) {
    if (i%2 === 0) {
      numpares.push(i);
    }
  }
}

sisonpares();
console.log(numpares);
*/

/*----------------------------*/

//ARRAYS

//EJERCICIO 1

/*
var estudiante = {
  nombre: "Laura",
  curso: "Álvarez",
  dni: 38777555,
  email: 'lau_alvaez@hotmail.com'
};

var nuevoArray = [];

console.log(estudiante);

for (let value of Object.values(estudiante)) {
  nuevoArray.push(value);
};

//Object.keys(user) = [name, age]
//Object.values(user) = ["John", 30]
//Object.entries(user) = [ ["name","John"], ["age",30] ]

console.log (nuevoArray);

*/

//EJERCICIO 2

/*
var fondoColor = document.querySelector('body');

function cambiarColorDeFondoDelBody(color) {
  if ((color == 'green') || (color == '#0f0') || (color == '#00ff00')) {
    fondoColor.style.backgroundColor = 'white';
    console.log('El color: '+color+', no se puede.');
  } else {
    fondoColor.style.backgroundColor = color;
    console.log('El color: '+color+', es válido.');
  }
}

cambiarColorDeFondoDelBody('#000');
*/

//EJERCICIO 3
/*
var parrafos = document.querySelectorAll('p');

console.log(parrafos);

function darEstilo(texto) {
  for (var i=0; i<=2; i++) {
    texto[i].style.color = "red";
    texto[i].style.fontWeight = "bold";
    texto[i].style.textAlign = "center";
  }
}

darEstilo(parrafos);
*/

/*----------------------------*/

//ARRAYS

//EJERCICIO 1
/*
var numeros = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];

var raizCuadrada = numeros.map(function arrayAlCuadrado(x) {
   return '√'+x+' = '+Math.sqrt(x);
});

console.log(numeros);
console.log(raizCuadrada);
*/

//EJERCICIO 2

var enigma = ["l", 1, "a", 2, 2, 5, "p", 5, 7, 5, 3, "e", 6, "r", 7, 6, 5, 3, 2, 1, "s", 9, 9, 9, 6, "e", 2, "v", 5, "e", 3, "r",
2, "a", 1, 6, 4, 1, 2, "n", 2, "c", 3, 5, 5, 5, 7, "i", 4, "a", 5, 2, 1, 3, "e", 6, "s", 7, "l", 4, "a", 3, "c", 2, 3, 1, 5, 3, 2, "l", 3, "a", 4, "v", 5, "e", 6];

/*
isNaN intenta convertir el parámetro pasado a un número. Si el parámetro no se puede convertir, devuelve true; en caso contrario, devuelve false.
*/

//var num = [];

var suma = 0;
var letras = [];
var calle;

function sumarNumeros() {
  for (var char of enigma) {
    if (Number(char)) {
      //console.log(char);
      suma = parseInt(suma) + parseInt(char);
    }
  }
}

function soloLetras() {
  for (var char of enigma) {
    if (!Number(char)) {
      //console.log(char);
      letras.push(char);
    }
  }
}

function textoExtra() {
  for (var i = 7; i < letras.length; i++) {
    letras.pop();
  }
}

function agregarEspacio() {
  letras.splice(2, 0, " ");
}

function unirLetras() {
  calle = letras.join('');
}

sumarNumeros();
soloLetras();

//console.log(letras);

textoExtra();
agregarEspacio();
unirLetras();

//console.log(suma);
//console.log(letras);
//console.log(calle);

function capitalize(x) {
  x.replace(/\b\w/g, l => l.toUpperCase());
}

calle = calle.replace(/\b\w/g, l => l.toUpperCase());

var direccion = 'La dirección secreta es: '+calle+' '+suma+'.';
console.log(direccion);

//var algo = 'no me gusta q no salga bien.';
//console.log(algo);

//algo = capitalize(algo);
//algo = algo.replace(/\b\w/g, l => l.toUpperCase());

//console.log(algo);
