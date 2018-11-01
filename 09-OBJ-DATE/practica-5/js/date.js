
var diaDeHoy = new Date(); //El objeto Date(), nos permite crear un objeto de tipo Date. Recibe 3 parámetros: Año completo, Mes, Día.


var dateToday = diaDeHoy.getDate(); //Día del mes actual (1->31)

var monthToday = diaDeHoy.getMonth(); //Mes actual (0->11) 0 => Enero / 11 => Diciembre

var dayToday = diaDeHoy.getDay(); //Día de la semana (0->6) 0 => Domingo / 6 => Sábado

var yearToday = diaDeHoy.getFullYear(); //Año completo


function diaDeSemana() {
  switch (dayToday) {
    case 0: return "Domingo";
    break;

    case 1: return "Lunes";
    break;

    case 2: return "Martes";
    break;

    case 3: return "Miércoles";
    break;

    case 4: return "Jueves";
    break;

    case 5: return "Viernes";
    break;

    case 6: return "Sábado";
    break;
  }
}

function nombreDeMes() {
  switch (monthToday) {
    case 0: return "Enero";
    break;

    case 1: return "Febrero";
    break;

    case 2: return "Marzo";
    break;

    case 3: return "Abril";
    break;

    case 4: return "Mayo";
    break;

    case 5: return "Junio";
    break;

    case 6: return "Julio";
    break;

    case 7: return "Agosto";
    break;

    case 8: return "Septiembre";
    break;

    case 9: return "Octubre";
    break;

    case 10: return "Noviembre";
    break;

    case 11: return "Diciembre";
    break;

  }
}

//Anuncio del Día:

var anuncio = document.createElement('h1');
anuncio.innerText = diaDeSemana()+', '+dateToday+' de '+nombreDeMes()+' de '+yearToday;
document.body.appendChild(anuncio);

console.log(diaDeHoy);
console.log(anuncio);

// 5. Una vez superado lo anterior, nos ha llegado una petición adicional. Nos
// solicitan hacer un script que cuente la cantidad de días que faltan para
// navidad. Quizás para esta labor nos ayude el siguiente método ​getTime().

var diaNavidad = new Date(2019,11,25);


var datyXmas = diaNavidad.getDate(); //Día del mes actual (1->31)

var monthXmas = diaNavidad.getMonth(); //Mes actual (0->11) 0 => Enero / 11 => Diciembre

var yearXmas = diaDeHoy.getFullYear(); //Año completo


console.log(diaNavidad);


//var diferencia = Math.round( ( Date.UTC(yearXmas,monthXmas,datyXmas) - Date.UTC(yearToday,monthToday,dateToday) ) / (1000*60*60*24) );
var diferencia = Math.round( ( getTime(yearXmas,monthXmas,datyXmas) - getTime(yearToday,monthToday,dateToday) ) / (1000*60*60*24) );

console.log('Faltan: '+diferencia+' días.');
//var diferencia = Math.round( ( Date.UTC(2012, 02, 30) - Date.UTC(2011, 02, 29) ) / (1000*60*60*24) );
