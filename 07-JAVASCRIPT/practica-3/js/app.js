window.onload = function () {

  console.log('Ejercicio A');

  var lista = document.querySelector('ul');
  var hijosLista = lista.children;

  function cadaItem() {
    for ( var items of hijosLista ) {
      console.log(items.innerText);
    }
  }

  cadaItem();

  /*-----------------------*/
  console.log('Ejercicio B');

  console.log(lista.innerHTML);

  /*-----------------------*/
  console.log('Ejercicio C');

  var elTitulo = document.querySelector('h1');
  elTitulo.innerHTML = '<em>Javascript is the best my friends!</em>';

  console.log('<----------');

  /*-----------------------*/
  console.log('Ejercicio D');

  var losParrafos = document.querySelectorAll('p');

  //console.log(losParrafos);

  function cambiarCont(x) {
    return x.innerHTML = '<a href="www.google.com">enlace generado desde JS</a>';
  };

  //console.log(Object.keys(losParrafos)); //Toma el valor del indice y los pone entro array

  function editPares(array) {
    for (var key of Object.keys(array) ) {
      if ( key%2 != 0 ) {
        cambiarCont(array[key]);
      }
    }
  };

  editPares(losParrafos);

  console.log('<----------');



























} //fin de window.load
