var string = "Hola, soy un string.";
var array = ["UNO ", "DOS ", "TRES "];
var boole = true;

console.log(string);
console.log(array);
console.log(boole);

var ironMan = {
  nombre: "IronMan",
  equipo: "Avengers",
  poderes:  ["Volar", "Lanzar misiles", "Disparar láser"],
  energia: 100,
  getPoder: function(poder) {
    return this.poderes[poder];
  }
}

var elHulk = {
  nombre: "Hulk",
  equipo: "Avengers",
  poderes:  ["Aplastar", "Gritar", "Golpear"],
  energia: 100,
  getPoder: function(poder) {
    return this.poderes[poder];
  }
}

console.log(ironMan.getPoder(2));


var botonDePrueba = document.querySelector('#miBoton');
console.log(botonDePrueba);

botonDePrueba.onclick = function() {
  alert("Testeando el click");
}


var titularFeo = document.getElementById('titular');
console.log(titularFeo);

titularFeo.onclick = function() {
  titularFeo.style.display = "none";
}


var lechuzaImg = document.querySelector('img');
console.log(lechuzaImg);

lechuzaImg.style.width = '300px';

lechuzaImg.onclick = function() {
  if (lechuzaImg.style.width == '300px') {
    lechuzaImg.style.width = '500px';
  } else {
    lechuzaImg.style.width = '300px';
  }
}
