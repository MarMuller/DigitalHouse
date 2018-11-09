var contenedor = document.querySelector('.contenedor');
var colorPicker = document.querySelector('.colorPicker');
var choosenColor;
var divs = [];

//Toma color del colorPicker
function tomarColor(x) {
  var color = x.style.backgroundColor;
  x.setAttribute("class", "choosen");
  choosenColor = color;
  //console.log(x);
  console.log(color);

  resetToNotChoosen();
  x.setAttribute("class", "picker choosen");
  changeStyleChoosen(x);
}

//Cambia color del circulo elegido
function cambiarColor(x) {
  x.style.backgroundColor = choosenColor;
  //console.log(x);
}

//Crea colorPicker
var colores = ["red","purple","blue","green","yellow","black","gray","white"];
for (color of colores) {
  var picker = document.createElement('div');
  picker.setAttribute("style", 'background-color:'+color+'; width:25px; height:25px; border: 1px solid black; cursor:pointer; display:inline-block;');
  picker.setAttribute("onclick", "tomarColor(this)");
  picker.classList.add("picker");
  picker.classList.add("notChoosen");
  //picker.setAttribute("class", "picker notChoosen");
  colorPicker.appendChild(picker);
  //arrayColorPickers.push(picker);
}

//Crea circulos
function agregarDiv() {
  var cuadro = document.createElement('div');
  cuadro.setAttribute("style", "background-color:white; width:100px; height:100px; border: 1px solid black; border-radius: 50px; cursor:pointer; display:inline-block;");
  cuadro.setAttribute("onclick", "cambiarColor(this)");

  divs.push(cuadro);
  contenedor.appendChild(cuadro);

  // for (item of divs) {
  //   console.log(item);
  // }
  console.log('added');
}

//Borra circulos
function borrarDiv() {
  divs.pop();
  contenedor.innerHTML = "";
  for (item of divs) {
    //console.log(item);
    contenedor.appendChild(item);
  }
  console.log('deleted');
}

//Cambiar todos a notChoosen
function resetToNotChoosen(){
  var pickers = document.querySelectorAll(".picker");

  for (picker of pickers) {
    if ( picker.classList.contains("choosen") ) {
      picker.setAttribute("class", "picker notChoosen");
    }
  }
}

//Cambiar estilo de choosen
function changeStyleChoosen(n){
  var pickers = document.querySelectorAll(".picker");

  for (picker of pickers) {
    if ( picker.classList.contains("choosen") ) {
      if ( n.style.backgroundColor == "white") {
        picker.style.border = "1px solid gray";
      } else {
        picker.style.border = "1px solid white";
      }
    } else {
      picker.style.border = "1px solid black";
    }
  }
}
