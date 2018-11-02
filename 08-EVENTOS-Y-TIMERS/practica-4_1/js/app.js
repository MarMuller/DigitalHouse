var numItems;

window.onload = function() {

  var cantTareas;
  var confirmarNum = false;

  do {

    function preguntas() {
      do{
        cantTareas = prompt('Ingresa num de tareas, por favor');
        if ( isNaN(cantTareas) || (cantTareas<3) ) {
          alert('No es un num válido.');
        }
      } while( isNaN(cantTareas) || (cantTareas<3) );
    }
    preguntas();

    var confirmarNum = confirm('El valor ingrasado es '+cantTareas+' ¿Es correcto?');

  } while( !confirmarNum );

  console.log('Confirmaste el num '+cantTareas);

  /*-------*/

  var ul = document.createElement('ul');
  ul.setAttribute('id', 'laLista');

  for (var i = 0; i < cantTareas; i++) {
    do {
      var li=document.createElement('li');
      li.innerHTML = prompt("Ingrese el contenido del "+(i+1)+": item.");
      //li.setAttribute('id', 'item'+(i+1));
      //li.setAttribute('class', 'editar');
      li.setAttribute('onclick', "editItem(this)");
    } while (li.innerHTML == "");
    ul.appendChild(li);
  }

  document.body.appendChild(ul);

  /*-------*/

  var title = document.createElement('h2');
  title.innerText = "TO DO LIST - CANTIDAD TOTAL: "+cantTareas;
  document.body.appendChild(title);

  /*-------*/

  numItems = document.querySelectorAll('li').length;
  console.log(numItems);

  /*-------*/

  var parrafo = document.createElement('p');
  parrafo.innerText = "Tareas realizadas: "+numItems;
  document.body.appendChild(parrafo);

} //fin windows.load

//cambia de color:
// function editItem(elemento) {
//   if (elemento.style.color != "blue") {
//     elemento.style.color = "blue";
//   } else{
//     elemento.style.color = "black";
//   }
// }

//que desaparezca:
function editItem(elemento) {
  setTimeout(function(){ elemento.style.display = "none"; }, 500);

  numItems = numItems-1;
  console.log(numItems);

  var parrafo = document.querySelector('p');
  parrafo.innerText = "Tareas restantes: "+numItems;
  //array.splice(x, 1);

  if (numItems == 0) {
    var aviso = document.createElement('p');
    aviso.innerHTML = "<b>¡Felicitaciones, est�s al d�a con tus tareas!</b>";
    document.body.appendChild(aviso);
  }

}
