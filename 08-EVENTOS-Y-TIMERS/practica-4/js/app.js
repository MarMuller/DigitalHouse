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
      li.setAttribute('id', 'item'+(i+1));
      li.setAttribute('class', 'editar');
      //li.setAttribute('click', 'editItem(item'+(i+1)+')');
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

  var itemsClick = document.querySelectorAll('li');
  console.log('itemsClick:');
  console.log(itemsClick);
  //console.log(itemsClick[3]);

  var editable = document.querySelectorAll('.editar');
  console.log('editable:');
  console.log(editable);

  function editItem(x) {
    console.log(x);
    // var editable = document.getElementById(x);
    // console.log(editable);
    // editable.style.color = "green";
  }

  for (var i = 0; i < itemsClick.length; i++) {
    //console.log(editable);
    itemsClick[i].onclick = editItem("item"+(i+1));
  }



  /*-------*//*-------*//*-------*/

  // var lechuzaImg = document.querySelector('img');
  // console.log(lechuzaImg);
  //
  // lechuzaImg.style.width = '300px';
  // lechuzaImg.style.opacity = "0.5";
  //
  // lechuzaImg.onclick = function() {
  //   if (lechuzaImg.style.width == '300px') {
  //     lechuzaImg.style.width = '500px';
  //     lechuzaImg.style.opacity = "1.0";
  //   } else {
  //     lechuzaImg.style.width = '300px';
  //     lechuzaImg.style.opacity = "0.5";
  //   }
  // }


} //fin windows.load
