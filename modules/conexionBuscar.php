<?php

$conexion=mysql_connect("localhost","root","")
or die("Problemas con la conexion");

mysql_select_db("guruccom_renova",$conexion)
or die("Problemas en la seleccion de la Base de Datos");

?>
