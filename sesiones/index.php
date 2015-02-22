<?php
session_start();
  if(isset($_SESSION['usuario'])){
    ?>
      <script type="text/javascript">
        window.location="menu.php"
      </script>
    <?php
  }
?>

<h3>Iniciar Sesi&oacute;n</h3>

<form action="validar.php" method="POST" name="sesion">
  <input type="text" name="usuario" placeholder="Nombre de usuario" required>
  <br/><br/>
  <input type="password" name="password" placeholder="Password" required>
  <br/><br/>
  <input type="submit" value="Let me pass">
</form>

<p>Intenta acceder a <a href="menu.php">Men&uacute;</a></p>
<p>Intenta acceder a <a href="otra.php">Otra</a></p>

<?php include '../modules/footer.php';?>
