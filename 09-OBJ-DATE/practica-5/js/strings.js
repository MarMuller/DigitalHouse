var losParrafos = document.querySelectorAll('p');
console.log(losParrafos);

var wordsPer = [];
var palabras;
var cantPalabras;

function contadorPalabras(x) {
  var x = x.innerText; //sacamos las estiquetas <p>
  //console.log(parrafo);
  //var withOutSpaces = parrafo.trim(); //sin espacios al princ y final.
  var x = x.split(" "); //divide el string en palabras (retorna un array)
  var x = x.length; //cantidad de palabras
  return x;
}

function pushear() {
  for (parrafo of losParrafos) {
    var numPalabras = contadorPalabras(parrafo);
    wordsPer.push(numPalabras);
    console.log(wordsPer);
  }
}

console.log(wordsPer);

pushear();

var elNumMayor = Math.max.apply(null, wordsPer);
console.log(elNumMayor);

console.log("1) ...................");

function pintarParrafo() {
  for (parrafo of losParrafos) {
    var numPalabras = contadorPalabras(parrafo);
    if ( elNumMayor == numPalabras ) {
      //console.log('Lo encontré.');
      parrafo.style.background = "red";
    }
  }
}

pintarParrafo();


//Cuantas veces se dice ECMA:

var todosNumMatches = [];

function buscarPalabra() {
  for (parrafo of losParrafos) {
    var parrafo = parrafo.innerText;
    var matches = parrafo.match(/ECMA/g);

    if (matches != null) {
      console.log(matches);
      var numMatches = matches.length;
      console.log(numMatches);
      todosNumMatches.push(numMatches);
    }
  }
}

buscarPalabra();
console.log(todosNumMatches);

function sumar(array) {
  var suma = 0;
  for (var i = 0; i < array.length; i++) {
    suma = suma + array[i];
  }
  return suma;
}

var numMatches = console.log( 'La palabra "ECMA" se menciona: '+sumar(todosNumMatches)+' veces.' );;

console.log("2) ...................");

//ActionScript

var i = 0;

function buscarPalabra2() {
  for (parrafo of losParrafos) {

    var parrafo = parrafo.innerText;
    var buscar = parrafo.indexOf("ActionScript");
    i = i + 1;

    if ( buscar != (-1) ) {
      var cambio = parrafo.replace("ActionScript", "PORQUERIASCRIPT");
      losParrafos[i].innerText = cambio;
      losParrafos[i].style.color = "red";
      console.log("LISTO!");
    }
    
  }
}

buscarPalabra2();
