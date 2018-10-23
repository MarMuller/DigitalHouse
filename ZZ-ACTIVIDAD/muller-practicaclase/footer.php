<?php include ('usuario_logueado.php')?>

<footer id="piePagina">

  <div class="center-inlineblock">
  <ul>
    <li><a href="contacto.html">Contacto</a></li>
    <li><a href="galeria.html">Galeria</a></li>
    <?php
      if (!$logueado) {
        echo '<li><a href="registro.html">Registrate</a></li>';
        echo '<li><a href="login.html">Login</a></li>';
      }
      else {
        echo '<li><a href="perfil.html">Mi Perfil</a></li>';
      }
     ?>
  </ul>
  </div>

  <div id="redes" class="center-inlineblock" style="margin-top: 20px;">
    <ul>
      <li><a href="http://facebook.com" target="_blank"><img src="images/fb.png" alt=""></a></li>
      <li><a href="http://instagram.com" target="_blank"><img src="images/inst.png" alt=""></a></li>
      <li><a href="http://twiter.com" target="_blank"><img src="images/tw.png" alt=""></a></li>
      <li><a href="http://snapchat.com" target="_blank"><img src="images/snp.png" alt=""></a></li>
    </ul>
  </div>

</footer>
