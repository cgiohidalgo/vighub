<?php require_once('Connections/crenesoft.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$varUsuario_unodatosusu = "0";
if (isset($_SESSION["MM_idusuario"])) {
  $varUsuario_unodatosusu = $_SESSION["MM_idusuario"];
}
mysql_select_db($database_crenesoft, $crenesoft);
$query_unodatosusu = sprintf("SELECT * FROM usuarios WHERE usuarios.idusuario = %s", GetSQLValueString($varUsuario_unodatosusu, "int"));
$unodatosusu = mysql_query($query_unodatosusu, $crenesoft) or die(mysql_error());
$row_unodatosusu = mysql_fetch_assoc($unodatosusu);
$totalRows_unodatosusu = mysql_num_rows($unodatosusu);

$varUsuario_plandenego = "0";
if (isset($_SESSION["MM_idusuario"])) {
  $varUsuario_plandenego = $_SESSION["MM_idusuario"];
}
mysql_select_db($database_crenesoft, $crenesoft);
$query_plandenego = sprintf("SELECT * FROM planes WHERE planes.idplan = %s", GetSQLValueString($varUsuario_plandenego, "int"));
$plandenego = mysql_query($query_plandenego, $crenesoft) or die(mysql_error());
$row_plandenego = mysql_fetch_assoc($plandenego);
$totalRows_plandenego = mysql_num_rows($plandenego);

$varUsuario_costos = "0";
if (isset($_SESSION["MM_idusuario"])) {
  $varUsuario_costos = $_SESSION["MM_idusuario"];
}
mysql_select_db($database_crenesoft, $crenesoft);
$query_costos = sprintf("SELECT * FROM costo_total WHERE costo_total.idcosto_total = %s", GetSQLValueString($varUsuario_costos, "int"));
$costos = mysql_query($query_costos, $crenesoft) or die(mysql_error());
$row_costos = mysql_fetch_assoc($costos);
$totalRows_costos = mysql_num_rows($costos);

$varUsuario_imagenesPlan = "0";
if (isset($_SESSION["MM_idusuario"])) {
  $varUsuario_imagenesPlan = $_SESSION["MM_idusuario"];
}
mysql_select_db($database_crenesoft, $crenesoft);
$query_imagenesPlan = sprintf("SELECT * FROM imagenes_plan_normal WHERE imagenes_plan_normal.idimagenplan = %s", GetSQLValueString($varUsuario_imagenesPlan, "int"));
$imagenesPlan = mysql_query($query_imagenesPlan, $crenesoft) or die(mysql_error());
$row_imagenesPlan = mysql_fetch_assoc($imagenesPlan);
$totalRows_imagenesPlan = mysql_num_rows($imagenesPlan);

$varUsuario_datos_canvas = "0";
if (isset($_SESSION["MM_idusuario"])) {
  $varUsuario_datos_canvas = $_SESSION["MM_idusuario"];
}
mysql_select_db($database_crenesoft, $crenesoft);
$query_datos_canvas = sprintf("SELECT * FROM canvas WHERE canvas.idcanvas = %s", GetSQLValueString($varUsuario_datos_canvas, "int"));
$datos_canvas = mysql_query($query_datos_canvas, $crenesoft) or die(mysql_error());
$row_datos_canvas = mysql_fetch_assoc($datos_canvas);
$totalRows_datos_canvas = mysql_num_rows($datos_canvas);

$varUsuarios_imagenescanvas = "0";
if (isset($_SESSION["MM_idusuario"])) {
  $varUsuarios_imagenescanvas = $_SESSION["MM_idusuario"];
}
mysql_select_db($database_crenesoft, $crenesoft);
$query_imagenescanvas = sprintf("SELECT * FROM imagenes_plan_canvas WHERE imagenes_plan_canvas.idimgcanvas = %s", GetSQLValueString($varUsuarios_imagenescanvas, "int"));
$imagenescanvas = mysql_query($query_imagenescanvas, $crenesoft) or die(mysql_error());
$row_imagenescanvas = mysql_fetch_assoc($imagenescanvas);
$totalRows_imagenescanvas = mysql_num_rows($imagenescanvas);
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Visualiza - <?php echo $row_unodatosusu['grupo']; ?></title>

</head>

<body>
<header>
  <h2 align="center"><?php echo $row_unodatosusu['grupo']; ?></h2>
<p>&nbsp;</p>
<p>&nbsp;</p>

<p>&nbsp;</p>
 <h2 align="center">
<?php if ($totalRows_unodatosusu > 0) { // Show if recordset not empty ?>
 <br><br>
 <?php if ($totalRows_plandenego = $row_plandenego['nombre_uno']) { // Show if recordset not empty ?>
  <?php echo $row_plandenego['nombre_uno']; ?>
  <?php } // Show if recordset not empty ?>
<br></br>
<?php if ($totalRows_plandenego = $row_plandenego['nombre_dos']) { // Show if recordset not empty ?>
  <?php echo $row_plandenego['nombre_dos']; ?>
  <?php } // Show if recordset not empty ?>
<br>
<?php if ($totalRows_plandenego = $row_plandenego['nombre_tres']) { // Show if recordset not empty ?>
  <?php echo $row_plandenego['nombre_tres']; ?>
  <?php } // Show if recordset not empty ?>
<?php } // Show if recordset not empty ?>
  </h2>
 <p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

<h2 align="center">Este documento fue creado con el software CreneSoft</h2>
<h2 align="center">visitanos en: crenesoft.hostei.com</h2>
<h2 align="center">2013</h2>
<p align="center">&nbsp;</p>
<p align="center">Logo de la Empresa</p>
<p align="center"><img src="http://localhost/crene/imagenes/logos/<?php echo $row_unodatosusu['imagen']; ?>" width="220" height="156"></p>

</header>
<ul>
<h2>Segmentos de clientes o de mercado</h2>
<li class="contenido"><?php echo $row_datos_canvas['segmentos']; ?></li>
<h5 align="center">
  <?php if ($totalRows_imagenescanvas = $row_imagenescanvas['imagen1']) { // Show if recordset not empty ?>
    <img src="http://localhost/crene/imagenes/plan_canvas/<?php echo $row_imagenescanvas['imagen1']; ?>"  width="380" height="250">
    <?php } // Show if recordset not empty ?>
</h5>

<h2>Propuesta de valor</h2>
<li class="contenido"><?php echo $row_datos_canvas['propuesta']; ?></li>
<h5 align="center">
  <?php if ($totalRows_imagenescanvas = $row_imagenescanvas['imagen2']) { // Show if recordset not empty ?>
    <img src="http://localhost/crene/imagenes/plan_canvas/<?php echo $row_imagenescanvas['imagen2']; ?>"  width="380" height="250">
    <?php } // Show if recordset not empty ?>
</h5>
 
<h2>Canales de distribución</h2>
<li class="contenido"><?php echo $row_datos_canvas['canales']; ?></li>
 <h5 align="center">
   <?php if ($totalRows_imagenescanvas = $row_imagenescanvas['imagen3']) { // Show if recordset not empty ?>
     <img src="http://localhost/crene/imagenes/plan_canvas/<?php echo $row_imagenescanvas['imagen3']; ?>"  width="380" height="250">
     <?php } // Show if recordset not empty ?>
 </h5>

<h2>Relacion con el cliente</h2>
<li class="contenido"><?php echo $row_datos_canvas['relacion']; ?></li>
 <h5 align="center">
   <?php if ($totalRows_imagenescanvas = $row_imagenescanvas['imagen4']) { // Show if recordset not empty ?>
     <img src="http://localhost/crene/imagenes/plan_canvas/<?php echo $row_imagenescanvas['imagen4']; ?>"  width="380" height="250">
     <?php } // Show if recordset not empty ?>
 </h5>

<h2>Fuente de ingresos</h2>
<li class="contenido"><?php echo $row_datos_canvas['flujos']; ?></li>
 <h5 align="center">
   <?php if ($totalRows_imagenescanvas = $row_imagenescanvas['imagen5'] ) { // Show if recordset not empty ?>
     <img src="http://localhost/crene/imagenes/plan_canvas/<?php echo $row_imagenescanvas['imagen5']; ?>"  width="380" height="250">
     <?php } // Show if recordset not empty ?>
 </h5>

<h2>Actividades clave</h2>
<li class="contenido"><?php echo $row_datos_canvas['actividades']; ?></li>
 <h5 align="center">
   <?php if ($totalRows_imagenescanvas = $row_imagenescanvas['imagen6']) { // Show if recordset not empty ?>
     <img src="http://localhost/crene/imagenes/plan_canvas/<?php echo $row_imagenescanvas['imagen6']; ?>"  width="380" height="250">
     <?php } // Show if recordset not empty ?>
 </h5>

<h2>Recursos</h2>
<li class="contenido"><?php echo $row_datos_canvas['recursos']; ?></li>
 <h5 align="center">
   <?php if ($totalRows_imagenescanvas = $row_imagenescanvas['imagen7']) { // Show if recordset not empty ?>
     <img src="http://localhost/crene/imagenes/plan_canvas/<?php echo $row_imagenescanvas['imagen7']; ?>"  width="380" height="250">
     <?php } // Show if recordset not empty ?>
 </h5>

 
 <h2>Red de partners</h2>
<li class="contenido"><?php echo $row_datos_canvas['red']; ?></li>
 <h5 align="center">
   <?php if ($totalRows_imagenescanvas = $row_imagenescanvas['imagen8']) { // Show if recordset not empty ?>
     <img src="http://localhost/crene/imagenes/plan_canvas/<?php echo $row_imagenescanvas['imagen8']; ?>"  width="380" height="250">
     <?php } // Show if recordset not empty ?>
 </h5>
</ul>
<ul>
<li>El flujo de caja presentado contempla costos de operación fija como muebles y
  enseres, equipos de funcionamiento, hosting y dominio, accesorios de
  funcionamiento, licencias de software, arriendo, costos de servicios públicos, entre
  otros; la inversión nominal contempla el personal y gastos preoperativos, indicando
  como resultado una inversión inicial de $209.250.000 los cuales serán financiados
  por los socios de la compañía
</li></ul>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td bgcolor="#CCCCCC">Valor inversion fija</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC">Numero de integrantes</td>
    <td><?php echo $row_costos['numero1']; ?>* $1500000</td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC">semanas trabajadas</td>
    <td><?php echo $row_costos['numero2']; ?> * $50000</td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC">Por programación</td>
    <td><?php echo $row_costos['numero3']; ?> * $150000</td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC">Muebles y enseres </td>
    <td><?php echo $row_costos['numero5']; ?> - Interes </td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC">Hosting y Dominio</td>
    <td>$<?php echo $row_costos['numero6']; ?></td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC">Licencias de software</td>
    <td>$<?php echo $row_costos['numero7']; ?></td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC">Servicios publicos</td>
    <td>$<?php echo $row_costos['numero8']; ?></td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC">Internete y telefono</td>
    <td>$<?php echo $row_costos['numero9']; ?></td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC">Otros gastos</td>
    <td>$<?php echo $row_costos['numero4']; ?> - Tasa interes</td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC">Sub Total:</td>
    <td>$<?php echo $row_costos['resultado']; ?></td>
  </tr>
</table>
<h2 align="center">Gastos preoperativos</h2> 
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td width="43%" bgcolor="#CCCCCC">Notaria </td>
    <td width="57%">$</td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC">Camara de Comercio</td>
    <td>$</td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC">Papeleria </td>
    <td>$</td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC">Publicidad</td>
    <td>$</td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC">Otros</td>
    <td>$</td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC">Sub Total</td>
    <td>$</td>
  </tr>
</table>

</body>
</html>
<?php
mysql_free_result($unodatosusu);

mysql_free_result($imagenescanvas);
?>
