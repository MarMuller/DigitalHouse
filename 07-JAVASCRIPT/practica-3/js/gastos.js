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
          gastos : parseInt(costMember[i])
        };

        arrayFamilia.push( objeto );

      }

      console.log(numFamilia);
      console.log(arrayFamilia);

      //---¿Quién gastó más?

      var gastosDeTodos = [];

      function juntarGastos() {
        for (persona of arrayFamilia) {
          gastosDeTodos.push(persona.gastos);
        }
      }

      juntarGastos();

      function cualGastaMas() {
        var montoMasAlto = Math.max.apply(Math, gastosDeTodos);
        for (var i = 0; i < arrayFamilia.length; i++) {
          if (montoMasAlto == arrayFamilia[i].gastos) {
            return arrayFamilia[i].nombre;
          }
        }
      }

      function cualGastaMenos() {
        var montoMasBajo = Math.min.apply(Math, gastosDeTodos);
        for (var i = 0; i < arrayFamilia.length; i++) {
          if (montoMasBajo == arrayFamilia[i].gastos) {
            return arrayFamilia[i].nombre;
          }
        }
      }

      console.log('El integrante que más gastó fue: '+cualGastaMas()+'.');
      console.log('El integrante que menos gastó fue: '+cualGastaMenos()+'.');

    }

    preguntas();

  }

}
