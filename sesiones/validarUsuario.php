<?php
if(!isset($_SESSION['usuario']))
  {
    header('Location:noUsuario.php');
    exit();
  }
?>
