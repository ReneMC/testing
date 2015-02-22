<html>
<body>
<?php

  include '../modules/conexionBuscar.php';

 if (!isset($_POST['T1'])){
       echo "Ingrese el nombre que desea buscar";
       echo "</html></body> \n";
       exit;
 }
 $buscar = $_POST['T1'];
 $result = mysql_query("SELECT * FROM carritocompra WHERE nombreCompleto LIKE '%$buscar%' ORDER BY nombreCompleto", $conexion);
 if ($row = mysql_fetch_array($result)){
       echo "<table border = '1'> \n";

 //Mostramos los nombres de las tablas
 echo "<tr> \n";
 while ($field = mysql_fetch_field($result)){
             echo "<td>$field->name</td> \n";
 }
       echo "</tr> \n";
 do {
             echo "<tr> \n";
             echo "<td>".$row["id"]."</td> \n";
             echo "<td>".$row["nombreCompleto"]."</td> \n";
             echo "<td>".$row["correoElectronico"]."</td> \n";
             echo "<td>".$row["codigoPromocional"]."</td> \n";
             echo "<td>".$row["Taller"]."</td> \n";
             echo "<td>".$row["comentario"]."</a></td> \n";
             echo "<td>".$row["precio"]."</td> \n";
             echo "<td>".$row["tokenCompra"]."</td> \n";
             echo "<td>".$row["edo_pago"]."</td> \n";
             echo "<td>".$row["boleto_numero"]."</td> \n";
             echo "<td>".$row["correoEnviado"]."</td> \n";
             echo "</tr> \n";
       } while ($row = mysql_fetch_array($result));
             echo "</table> \n";
 } else {
 echo "No se ha encontrado ningun registro !";
 }
?>
<br/>
<a href="index.php">Regresar</a>
</body>
</html>
