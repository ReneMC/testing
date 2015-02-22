  <?php
  ob_start("ob_gzhandler");
  //Las funciones ob_start y ob_end_flush te permiten escojer en qué momento
  //enviar el resultado de un script al navegador. Si no las utilizamos estamos
  //obligados a que nuestra primera línea de código sea session_start() u obtendremos un error
  session_start();
  //conectamos a la base de
  //datos
  include '../modules/conexion.php';
  //rescatamos los valores guardados en la variable de sesión
  //(si es que hay alguno  cosa que comprobamos con isset) y los asignamos
  //a $carro. Si no existen valores, ponemos a false el valor de $carro
  if(isset($_SESSION['carro']))
  $carro=$_SESSION['carro'];else $carro=false;
  //y hacemos la consulta
  $qry=mysql_query("select * from cim order by nombre asc");
  ?>
  <html>
  <head>
  <title>CATÁLOGO</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <style type="text/css">
  <!--
  .catalogo {
      font-family: Verdana, Arial, Helvetica, sans-serif;
      font-size: 9px;
      color: #333333;
  }
  -->
  </style>

  </head>
  <body>
  <table align="center" cellpadding="0" cellspacing="0" style="border: 1px solid #000000;">
  <tr valign="middle" bordercolor="#FFFFFF" bgcolor="#DFDFDF" class="catalogo">
  <td><strong>Tipo</strong></td>
  <td><strong>Codigo</strong></td>
  <td><strong>Nombre</strong></td>
  <td><strong>Unidad de medida/strong></td>
  <td><strong>Precio</strong></td>
  <td align="right"><a href="vercarrito.php?<?php echo SID ?>" title="Ver el contenido del carrito">
  <img src="img/vercarrito.gif" width="25" height="21" border="0"></a></td>
  </tr>
  <?php
  //mostramos todos nuestros artículos, viendo si han sido agregados o no a nuestro carro de compra
  while($row=mysql_fetch_assoc($qry)){
  ?>
  <tr valign="middle" class="catalogo">
  <td><?php echo $row['tipo'] ?></td>
  <td><?php echo $row['codigo'] ?></td>
  <td><?php echo $row['nombre'] ?></td>
  <td><?php echo $row['unidad_medida'] ?></td>
  <td><?php echo $row['precio'] ?></td>
  <td align="center">
  <?php
  if(!$carro || !isset($carro[md5($row['id'])]['identificador']) || $carro[md5($row['id'])]['identificador']!=md5($row['id']))
  {
  //si el producto no ha sidoagregado, mostramos la imagende no agregado,
  //linkeadaa nuestra página de agregarproducto y transmitíéndole adicha página
  //el id del artículoy el identificador de la sesión
  ?>
  <a href="agregacar.php?<?php echo SID ?>&id=<?php echo $row['id']; ?>">
  <img src="img/productonoagregado.gif" border="0" title="Agregar al Carrito"></a>
  <?php
  }
  else //en caso contrario mostramos la otra imagen linkeada., a la página que sirve para borrar el artículo del carro.
  {
  ?><a href="borracar.php?<?php echo SID ?>&id=<?php echo $row['id']; ?>">
  <img src="img/productoagregado.gif" border="0" title="Quitar del Carrito"></a><?php
  }
  ?></td>
  </tr>
  <?php } ?>
  </table>
  </body>
  </html>
  <?php
  ob_end_flush();
  ?>
