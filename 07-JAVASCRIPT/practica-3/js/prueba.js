window.onload = function () {

  var array1 = [23, 45, 66, 24, 74];

  var familia = [
    {
    "nombre":'Maria',
    "gastos":300
    },
    {
    "nombre":'Lucas',
    "gastos":900
    },
    {
    "nombre":'Matias',
    "gastos":150
    }
  ];

  console.log('Toda la familia:');
  console.log(familia);
  //console.log(familia[0].gastos);

  var gastosDeTodos = [];

  function juntarGastos() {
    for (persona of familia) {
      console.log(persona.gastos);
      gastosDeTodos.push(persona.gastos);
    }
  }

  juntarGastos();
  console.log(gastosDeTodos);

  function cualGastaMas() {
    var montoMasAlto = Math.max.apply(Math, gastosDeTodos);
    for (var i = 0; i < familia.length; i++) {
      if (montoMasAlto == familia[i].gastos) {
        return familia[i].nombre;
      }
    }
  }

  function cualGastaMenos() {
    var montoMasBajo = Math.min.apply(Math, gastosDeTodos);
    for (var i = 0; i < familia.length; i++) {
      if (montoMasBajo == familia[i].gastos) {
        return familia[i].nombre;
      }
    }
  }

  console.log('El integrante que más gastó fue: '+cualGastaMas()+'.');
  console.log('El integrante que menos gastó fue: '+cualGastaMenos()+'.');


}

/*

var data = [{
  "ErrorCode":100,
  "Message":{},
  "Name":"InternetGatewayDevice.LANDevice.1.Hosts.HostNumberOfEntries",
  "Value":"2"
}];

console.log(data[0].Value);

*/

/*

var playList = [
  ['I Did It My Way', 'Frank Sinatra'],
  ['Respect', 'Aretha Franklin'],
  ['Imagine', 'John Lennon'],
  ['Born to Run', 'Bruce Springsteen'],
  ['Louie Louie', 'The Kingsmen'],
  ['Maybellene', 'Chuck Berry']
];

function print(message) {
  document.write(message);
}

function printSongs( songs ) {
  var listHTML = '<ol>';
  for ( var i = 0; i < songs.length; i += 1) {
    listHTML += '<li>' + songs[i][0] + ' by ' + songs[i][1] + '</li>';
  }
  listHTML += '</ol>';
  print(listHTML);
}

printSongs(playList);

*/
