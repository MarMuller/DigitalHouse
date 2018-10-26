window.onload = function () {


  var saludo = confirm('¿Desea iniciar?');

  console.log(saludo);

  if (!saludo) {

    alert('Gracias por haber venido.');
    window.location.href = "https://www.google.com";

  } else {

    var numFamilia;
    var nameMember = [];
    var costMember = [];
    var arrayFamilia = [];

    function preguntas() {

      do{
        numFamilia = prompt('Ingrese número de integrantes de la familia:','');
      } while( isNaN(numFamilia) || (numFamilia<3) );


      for (var i = 0; i < numFamilia; i++) {

        do {
          nameMember[i] = prompt('Escriba el nombre del integrante n°'+(i+1)+':','');
        } while ( !isNaN(nameMember[i]) ) ;

        do {
          costMember[i] = prompt('Escriba el monto gastado por integrante n°'+(i+1)+':','');
        } while ( isNaN(costMember[i]) );

        var objeto = {
          nombre : nameMember[i],
          gastos : costMember[i]
        };

        arrayFamilia.push( objeto );

      }

      console.log(numFamilia);
      console.log(arrayFamilia);

      console.log(Object.keys(arrayFamilia));

      function cualGastaMas(array) {
        var largest = Math.max.apply(Math, array);
      }

      function cualGastaMenos(array) {
        var largest = Math.min.apply(Math, array);
      }

      /*
      function Product(name, price) {
        this.name = name;
        this.price = price;
      }
      */

      //var masGasto = Math.max(5, 10);
      //var menosGasto = Math.min(5, 10);

      console.log('El integrante que más gastó fue: '+cualGastaMas(arrayFamilia['gastos']));
      console.log('El integrante que menos gastó fue: '+cualGastaMenos(arrayFamilia['gastos']));

    }

    preguntas();

  }

}
