//EJERCICIO 2
/*

function multiplicar() {

  for (var i = 1; 3*i <= 135; i++) {
    console.log ('3 x '+i+' = '+(3*i));
  }

};

multiplicar();

*/

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

//EJERCICIO 5

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
