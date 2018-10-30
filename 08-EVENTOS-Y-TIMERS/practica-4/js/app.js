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
      //li.setAttribute('class', 'clickeable');
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

  var itemClickeable = document.querySelectorAll('li');

  console.log(itemClickeable);

  for (item of itemClickeable) {
    //item.style.background = 'red';
    item.onclick = function() {
      console.log('hiciste el click');
      item.style.display = 'none';
    }
  }


}
