// var text = document.createElement('div');
// text.classList.add("texto");
// contenedor.appendChild(text);

var contenedor = document.querySelector('.contenedor');
var divs = [];

function agregarDiv() {

  var enlace = document.createElement('a');
  var cuadro = document.createElement('div');
  cuadro.classList.add("texto");
  enlace.appendChild(cuadro);

  divs.push(enlace);
  //contenedor.innerHTML = divs;

  for (item of divs) {
    console.log(item);
    contenedor.appendChild(item);
  }

  console.log('added');
}

function borrarDiv() {
  divs.pop();
  contenedor.innerHTML = "";

  for (item of divs) {
    console.log(item);
    contenedor.appendChild(item);
  }

  console.log('deleted');
}


  // var contenedor = document.querySelector('.contenedor');
  // if (contenedor != null) {
  //   var contenedor = document.createElement('div');
  //   document.body.appendChild(contenedor);
  // }
  // var clear = document.querySelector('div');
  // if (clear != null) {
  //   clear.remove();
  //   console.log('clear');
  // }


//console.log('LISTO!');
