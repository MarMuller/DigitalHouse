// var text = document.createElement('div');
// text.classList.add("texto");
// contenedor.appendChild(text);

function agregarDiv() {
  var contenedor = document.querySelector('.contenedor');
  var text = document.createElement('div');
  text.classList.add("texto");
  contenedor.appendChild(text);
  console.log('ahi va');
}

function borrarDiv() {
  var contenedor = document.querySelector('.contenedor');
  if (contenedor != null) {
    var contenedor = document.createElement('div');
    document.body.appendChild(contenedor);
  }
  var clear = document.querySelector('div');
  if (clear != null) {
    clear.remove();
    console.log('clear');
  }
}

//console.log('LISTO!');
