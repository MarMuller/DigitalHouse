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

 || color != '#0f0' || color != '#00ff00'
*/

//EJERCICIO 2

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

/*----------------------------*/

//ARRAYS

//EJERCICIO 1

//var numeros = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];
