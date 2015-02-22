<?php

  include '../../modules/conexion.php';

 if (!isset($_POST['T1'])){
       echo "Ingrese el nombre que desea buscar";
       echo "</html></body> \n";
       exit;
 }
 $buscar = $_POST['T1'];
 $result = mysql_query("SELECT * FROM cim WHERE nombre LIKE '%$buscar%' ORDER BY nombre", $conexion);
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
             echo "<td>".$row["tipo"]."</td> \n";
             echo "<td>".$row["codigo"]."</td> \n";
             echo "<td>".$row["nombre"]."</td> \n";
             echo "<td>".$row["unidad_medida"]."</td> \n";
             echo "<td>".$row["precio"]."</a></td> \n";
             echo "<td><input type='image' src='https://argentina.dineromail.com/imagenes/botones/agregar_c.gif' border='0' name='submit' alt='Pagar con DineroMail'></td>";
             echo "</tr> \n";
       } while ($row = mysql_fetch_array($result));
             echo "</table> \n";
 } else {
 echo "No se ha encontrado ningun registro !";
 }
?>
<br/>
<a href="../catalogo.php">Regresar</a>
<?php include '../../modules/footer.php'; ?>
