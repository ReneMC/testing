<?php
include("../modules/conexion.php");

 if(isset($_POST['password']) && isset($_POST['usuario']))
 {
   $consulta=mysql_query("select * FROM login WHERE user='".$_POST['usuario']."' AND pass='".$_POST['password']."' ");
    if(mysql_num_rows($consulta)>0)
    {
      session_start();
        $_SESSION['usuario']=$_POST['usuario']

          ?>
            <script type="text/javascript">
              window.location="menu.php";
            </script>
          <?php
    }
    else
    {
      echo "<center><p>Datos de acceso incorrecto</p></center>";
      echo "<a href='index.php'>Regresar</a>";
    }
 }

?>
