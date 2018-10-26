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

    var valid = false;

    function preguntas() {

      do{
        numFamilia = prompt('Ingrese número de integrantes de la familia:','');
      } while( isNaN(numFamilia) || (numFamilia<3) );


        for (var i = 0; i < numFamilia; i++) {
            nameMember[i] = prompt('Escriba el nombre del integrante n°'+(i+1)+':','');
            costMember[i] = prompt('Escriba el monto gastado por integrante n°'+(i+1)+':','');
            var objeto = {
              nombre : nameMember[i],
              gastos : costMember[i]
            }
             arrayFamilia.push( objeto );
          }
          console.log(numFamilia);
          console.log(nameMember);
          console.log(costMember);
          console.log(arrayFamilia);
        }

      //console.log('No ingreso un número válido.');

    }

    preguntas();


}
