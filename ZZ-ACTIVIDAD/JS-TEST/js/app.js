// var text = document.createElement('div');
// text.classList.add("texto");
// contenedor.appendChild(text);

var contenedor = document.querySelector('.contenedor');
var colorPicker = document.querySelector('.colorPicker');
var choosenColor;
var arrayColorPickers = [];
var divs = [];

function tomarColor(x) {
  var color = x.style.backgroundColor;
  x.setAttribute("class", "choosen");
  // x.class = "choosen";
  //
  // for (picker of arrayColorPickers) {
  //   if (picker.class != "choosen") {
  //     picker.class = "notChoosen";
  //     picker.style.border = "1px solid black";
  //   }
  // }
  //
  // x.style.border = "2px solid white";
  choosenColor = color;
  //console.log(x);
  console.log(color);
  //console.log(arrayColorPickers);
}

function cambiarColor(x) {
  x.style.backgroundColor = choosenColor;
  //console.log(x);
}

//colorPicker
var colores = ["red","purple","blue","green","yellow","black","gray","white"];
for (color of colores) {
  var picker = document.createElement('div');
  picker.setAttribute("style", 'background-color:'+color+'; width:25px; height:25px; border: 1px solid black; cursor:pointer; display:inline-block;');
  picker.setAttribute("onclick", "tomarColor(this)");
  //picker.setAttribute("class", "notChoosen");
  colorPicker.appendChild(picker);
  //arrayColorPickers.push(picker);
}

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

function borrarDiv() {
  divs.pop();
  contenedor.innerHTML = "";

  for (item of divs) {
    //console.log(item);
    contenedor.appendChild(item);
  }

  console.log('deleted');
}
