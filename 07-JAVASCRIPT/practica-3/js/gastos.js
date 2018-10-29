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
    }

    preguntas();


    var gastosDeTodos = [];

    //---¿Quién gastó más?

    function juntarGastos() {
      for (persona of arrayFamilia) {
        gastosDeTodos.push(persona.gastos);
      }
    }

    juntarGastos();

    var montoMasAlto = Math.max.apply(Math, gastosDeTodos);
    var montoMasBajo = Math.min.apply(Math, gastosDeTodos);

    //Return Nombre

    function cualGastaMas() {
      for (var i = 0; i < arrayFamilia.length; i++) {
        if (montoMasAlto == arrayFamilia[i].gastos) {
          return arrayFamilia[i].nombre;
        }
      }
    }

    function cualGastaMenos() {
      for (var i = 0; i < arrayFamilia.length; i++) {
        if (montoMasBajo == arrayFamilia[i].gastos) {
          return arrayFamilia[i].nombre;
        }
      }
    }

    //---Suma total de los gastos

    var sumaTotalGastos = 0;

    function sumaTotal() {
      for (num of gastosDeTodos) {
        sumaTotalGastos = parseInt(sumaTotalGastos)+parseInt(num);
      }
    }

    sumaTotal();

    var quienGastoMas = cualGastaMas();
    var quienGastoMenos = cualGastaMenos();

    console.log('El integrante que más gastó fue: '+quienGastoMas+'.');
    console.log('El integrante que menos gastó fue: '+quienGastoMenos+'.');

    //---Promedio

    function promedioGastos() {
      return sumaTotalGastos/gastosDeTodos.length;
    }

    var promedioDelDia = promedioGastos();

    // IMPRIMIR EN DOCUMENTO

    // El Título

    var crearTitulo = document.createElement('h1');
    crearTitulo.innerText = "Reporte de gastos familiares";
    //var adentro = document.createTextNode(prompt("This is an example of text written in H1"));
    document.body.appendChild(crearTitulo);

    // El UL

    var ul=document.createElement('ul');

    var li=document.createElement('li');
    li.innerHTML="El integrante que más gastó: "+quienGastoMas+" ($"+montoMasAlto+")";
    li.setAttribute('title', 'quien-gasto-mas');
    ul.appendChild(li);

    var li=document.createElement('li');
    li.innerHTML="El integrante que menos gastó: "+quienGastoMenos+" ($"+montoMasBajo+")";
    li.setAttribute('title', 'quien-gasto-menos');
    ul.appendChild(li);

    var li=document.createElement('li');
    li.innerHTML="El gasto total de toda la familia: $"+sumaTotalGastos;
    li.setAttribute('title', 'suma-total-gastos');
    ul.appendChild(li);

    var li=document.createElement('li');
    li.innerHTML="El promedio de los gastos es de: $"+promedioDelDia;
    li.setAttribute('title', 'promedio-gastos');
    ul.appendChild(li);

    document.body.appendChild(ul);

    // Botón

    var miBoton = document.createElement('button');
    miBoton.innerText="Hola, soy un boton. Clickeame!";
    miBoton.setAttribute('class','botonFlashero');
    document.body.appendChild(miBoton);

    miBoton.onclick = function() {
      alert("Testeando el click");
    }

  }

}
