<pre>
<?php

  include('estudiantes.php');

  //var_dump($notas);
//sin el nombre del alumno
// foreach ($notas as $evaluaciones) {
//   $unidas = implode(', ', $evaluaciones);
//   echo '<br>Las notas son: '.$unidas;
// }



echo '<ul>';
//con el nombre del alumno o la posicion
foreach ($notas as $nombre => $evaluaciones) {
  //$unidas = implode(', ', $evaluaciones);
  //aqui mostrar solo es listado de los alumnos, con un enlace para ver el detalle  del alumno.
  echo '<li>Estudiante: '.$nombre
    .' <a href="verEstudiante.php?nombre='.$nombre.'">ver notas</a>
    </li>';
}
echo '</ul>';
//echo 'La nota que quiere Diego es: '.$notas[1][1];




 ?>
