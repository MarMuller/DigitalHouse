window.onload = function () {

  var lista = document.querySelector('ul');
  var hijosLista = lista.children;

  /*
  var items = [];

  function cadaItem() {
    for (var i = 0; i < lista.length; i++) {
      var item = document.querySelector('li');
      items.push(item);
    }
  }

  cadaItem();
  */

  console.log(lista);
  console.log(hijosLista);

  var elTitulo = document.querySelector('h1');
  elTitulo.innerHTML = '<em>Javascript is the best my friends!</em>';
  //imprime también el <em>

  var losParrafos = document.querySelectorAll('p');

  console.log(losParrafos);

  function elemPares() {
    for (n of losParrafos) {
      if (n%2 == 0) {
        losParrafos[n].innerHTML = '<ahref="#">enlace generado desde JS</a>';
      }
    }
  }

  elemPares();






}
