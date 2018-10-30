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

  for (var i = 0; i < cantTareas; i++) {
    do {
      var li=document.createElement('li');
      li.innerHTML = prompt("Ingrese el contenido del "+(i+1)+"° item.");
      li.setAttribute('class', 'item'+(i+1));
    } while (li.innerHTML == "");
    ul.appendChild(li);
  }

  document.body.appendChild(ul);

  /*-------*/

  var title = document.createElement('h2');
  title.innerText = "TO DO LIST - CANTIDAD TOTAL: "+cantTareas;
  document.body.appendChild(title);

  /*-------*/

  var parrafo = document.createElement('p');
  parrafo.innerText = "Tareas realizadas: 0";
  document.body.appendChild(parrafo);

  /*-------*/

  /*
  Una vez con los <​ li>​ en nuestro documento, vamos a permitir que cada uno
  de ellos pueda ser clicado y que al ser clicado, el mismo desaparezca después
  de medio segundo. Así mismo, en el párrafo que dice ​ "Tareas
  completadas: 0" ​ el número 0 deberá aumentar en 1 por cada tarea
  eliminada.
  */

  var itemsClick = document.querySelectorAll('li');

  console.log(itemsClick);

  var item = itemsClick[1];

  function hacerClick(){
    item = itemsClick[i];
    console.log('Me hiciste click.');

    if (item.clicado) {
      item.style.background = 'green';
    }

  }

  for (item of itemsClick) {
    item.addEventListener( "click" , hacerClick );
  }


  //var item = itemsClick[2];


} //fin windows.load
