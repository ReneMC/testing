<?php
  require 'validar.php';
  session_start();
  require 'validarUsuario.php';
?>
  <h1>Hola <?php echo $_SESSION['usuario'];?>!</h1>
  <br/><br/>
  <a href="otra.php">Ir a otra pagina</a>
  <br/>
  <a href="cerrarSesion.php">Cerrar sesi&oacute;n</a>
