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
?>
<?php
$imagen=$row_unodatosusu['imagen'];
$filename=$row_unodatosusu['grupo'];
header("Content-type:application/pdf");
header("Content-Disposition:attachment;filename=$filename - CreneSoft.PDF");
header('Expires: 0');
header('Pragma: cache');
header('Cache-Control: private');
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>

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

 <h2>1. Resumen Ejecutivo</h2>
 <li class="contenido"><?php echo $row_plandenego['resumen']; ?></li>
 <h2>2 Descripcion</h2>
 <li><?php echo $row_plandenego['descripcion']; ?></li>
 <h5 align="center">
   <?php if ($totalRows_imagenesPlan = $row_imagenesPlan['imagen2']) { // Show if recordset not empty ?>
     <img src="http://localhost/crene/imagenes/plan_normal/<?php echo $row_imagenesPlan['imagen2']; ?>"  width="380" height="250">
     <?php } // Show if recordset not empty ?>
 </h5>
 <h2>3 Análisis de Mercado</h2>
 <li ><?php echo $row_plandenego['analisis']; ?></li>
  <h5 align="center">
    <?php if ($totalRows_imagenesPlan = $row_imagenesPlan['imagen3']) { // Show if recordset not empty ?>
      <img src="http://localhost/crene/imagenes/plan_normal/<?php echo $row_imagenesPlan['imagen3']; ?>" width="380" height="250">
      <?php } // Show if recordset not empty ?>
  </h5>
 <h2>4 Cuerpo Directivo</h2>
 <li ><?php echo $row_plandenego['cuerpo']; ?></li>
  <h5 align="center">
    <?php if ($totalRows_imagenesPlan = $row_imagenesPlan['imagen4']) { // Show if recordset not empty ?>
      <img src="http://localhost/crene/imagenes/plan_normal/<?php echo $row_imagenesPlan['imagen4']; ?>"  width="380" height="250">
      <?php } // Show if recordset not empty ?>
  </h5>
 <h2 align="center">5 OPERACIONES</h2>
 <p>&nbsp;</p>
 <h2>5.1 Ficha tecnica</h2>
 <li ><?php echo $row_plandenego['ficha']; ?></li>
  <h5 align="center">
    <?php if ($totalRows_imagenesPlan = $row_imagenesPlan['imagen5']) { // Show if recordset not empty ?>
      <img src="http://localhost/crene/imagenes/plan_normal/<?php echo $row_imagenesPlan['imagen5']; ?>"  width="380" height="250">
      <?php } // Show if recordset not empty ?>
  </h5>
 <h2>5.2 Estado de Desarrollo</h2>
 <li ><?php echo $row_plandenego['desarrollo']; ?></li>
  <h5 align="center">
    <?php if ($totalRows_imagenesPlan = $row_imagenesPlan['imagen6']) { // Show if recordset not empty ?>
      <img src="http://localhost/crene/imagenes/plan_normal/<?php echo $row_imagenesPlan['imagen6']; ?>"  width="380" height="250">
      <?php } // Show if recordset not empty ?>
  </h5>
 <h2>5.3 Descripción del Proceso</h2>
 <li ><?php echo $row_plandenego['des_proceso']; ?></li>
 <h2>5.4 Necesidades y Requerimientos</h2>
 <li ><?php echo $row_plandenego['nece_reque']; ?></li>
 <h5 align="center">
   <?php if ($totalRows_imagenesPlan = $row_imagenesPlan['imagen1']) { // Show if recordset empty ?>
     <img src="http://localhost/crene/imagenes/plan_normal/<?php echo $row_imagenesPlan['imagen1']; ?>"  width="380" height="250">
     <?php } // Show if recordset empty ?>
 </h5>
 <h2>5.5 Plan de Produccion</h2>
 <li ><?php echo $row_plandenego['plan_produ']; ?></li>
 <h5 align="center">
   <?php if ($totalRows_imagenesPlan = $row_imagenesPlan['imagen7']) { // Show if recordset not empty ?>
     <img src="http://localhost/crene/imagenes/plan_normal/<?php echo $row_imagenesPlan['imagen7']; ?>"  width="380" height="250">
     <?php } // Show if recordset not empty ?>
 </h5>
 <h2>6 Riesgo Productivos</h2>
 <li ><?php echo $row_plandenego['riesgos']; ?></li>
 <h2>7 Proyecciones Financieras</h2>
 <li ><?php echo $row_plandenego['proyeccion']; ?></li>
</ul>
<ul>
<h2>9 Proyecciones del flujo de caja</h2>
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

mysql_free_result($imagenesPlan);
?>
