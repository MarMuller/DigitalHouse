<article class="items">

<?php

//Duración
$minlength = number_format($pelicula['length']);
$hourlength = (round($minlength/60));

//Awards
$numawards = $pelicula['awards'];

//MeGusta
$meGusta = $pelicula['meGusta'];

//Iconos
$star = '<img class="ranking" src="images/star.png" alt="">';
$kstar = '<img class="ranking" src="images/starblack.png" alt="">';

$imgMeGusta = '<img class="ranking" src="images/thumb-up-icon.png" alt="no-gusta">';
$opimgMeGusta = '<img class="ranking" src="images/thumb-up-icon.png" style="opacity:0.5;" alt="no-gusta">';

$imgNoMeGusta = '<img class="ranking" src="images/thumb-down-icon.png" alt="no-gusta">';
$opimgNoMeGusta = '<img class="ranking" src="images/thumb-down-icon.png" style="opacity:0.5;" alt="no-gusta">';

$imgestreno = '<img class="estreno" src="images/estreno3.png" alt="estreno">';
$imgtaquilla = '<img src="images/ticket.png" width="20" alt="taquillera">';
$img3D = '<img class="tresd" src="images/anteojos-3d.png" alt="es3D">';

//Fechas
$fechaDeEstreno = strtotime($pelicula['release_date']); //lo convierto a un numero para poder restarlos.
$fechaActual = strtotime(date('Y-m-d'));
$mesesDiferencia = ($fechaActual-$fechaDeEstreno)/(60*60*24*30); //resto y obteno los meses de diferencia.

?>

<a href="mostrarPelicula.php?titulo=<?php echo $pelicula['title'];?>"><img class="poster" src="<?= $pelicula['poster'] ?>" alt="Ver Título"></a>

   <div class="detalle">
     <label>
       <?php
       echo $pelicula['title'].' ( '.date('Y', strtotime($pelicula['release_date'])).' ) ';
        ?>
     </label>

     <label>
       <?php
       echo $pelicula['genre'];
        ?>
     </label>

     <label>
       Duración:
       <?php
       echo ' '.$minlength.'min ';
       echo '('.$hourlength.'hrs)';
       ?>
     </label>

     <label>
       Rating:
       <?php
       echo ' '.$pelicula['rating'];
       ?>
     </label>

     <label>
       <?php
       echo str_repeat($star, $numawards);
       echo str_repeat($kstar, 5-$numawards);
       ?>
     </label>

     <label>
       <?php
       if ($meGusta) {
         echo $imgMeGusta.' ';
         echo $opimgNoMeGusta;
       }
       else {
         echo $opimgMeGusta.' ';
         echo $imgNoMeGusta;
       }
       ?>
     </label>

     <?php
     if ($mesesDiferencia<=20) {
       echo $imgestreno;
     }
     ?>

     <?php
     if ($pelicula['taquilla']) {
       echo $imgtaquilla;
     }
     ?>

     <?php
     if ($pelicula['es3D']) {
       echo $img3D;
     }
     ?>

   </div>

 </article>
