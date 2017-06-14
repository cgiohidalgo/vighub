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

	function ObtenerNombreUsuario($identificador)
{
	global $database_crenesoft, $crenesoft;
	mysql_select_db($database_crenesoft, $crenesoft);
	$query_consultafunciones = sprintf("SELECT usuarios.grupo FROM usuarios WHERE usuarios.idusuario = %s", $identificador);
	$consultafunciones = mysql_query($query_consultafunciones, $crenesoft) or die(mysql_error());
	$row_consultafunciones = mysql_fetch_assoc($consultafunciones);
	$totalRows_consultafunciones = mysql_num_rows($consultafunciones);
	 echo $row_consultafunciones['grupo']; 
	mysql_free_result($consultafunciones);
}
?>