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

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form1")) {
  $updateSQL = sprintf("UPDATE planes SET resumen=%s WHERE idplan=%s",
                       GetSQLValueString($_POST['resumen'], "text"),
                       GetSQLValueString($_POST['idplan'], "int"));

  mysql_select_db($database_crenesoft, $crenesoft);
  $Result1 = mysql_query($updateSQL, $crenesoft) or die(mysql_error());

  $updateGoTo = "modelo_normal.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form2")) {
  $updateSQL = sprintf("UPDATE planes SET descripcion=%s WHERE idplan=%s",
                       GetSQLValueString($_POST['descripcion'], "text"),
                       GetSQLValueString($_POST['idplan'], "int"));

  mysql_select_db($database_crenesoft, $crenesoft);
  $Result1 = mysql_query($updateSQL, $crenesoft) or die(mysql_error());

  $updateGoTo = "modelo_normal.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form3")) {
  $updateSQL = sprintf("UPDATE planes SET analisis=%s WHERE idplan=%s",
                       GetSQLValueString($_POST['analisis'], "text"),
                       GetSQLValueString($_POST['idplan'], "int"));

  mysql_select_db($database_crenesoft, $crenesoft);
  $Result1 = mysql_query($updateSQL, $crenesoft) or die(mysql_error());

  $updateGoTo = "modelo_normal.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form4")) {
  $updateSQL = sprintf("UPDATE planes SET cuerpo=%s WHERE idplan=%s",
                       GetSQLValueString($_POST['cuerpo'], "text"),
                       GetSQLValueString($_POST['idplan'], "int"));

  mysql_select_db($database_crenesoft, $crenesoft);
  $Result1 = mysql_query($updateSQL, $crenesoft) or die(mysql_error());

  $updateGoTo = "modelo_normal.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form5")) {
  $updateSQL = sprintf("UPDATE planes SET operaciones=%s WHERE idplan=%s",
                       GetSQLValueString($_POST['operaciones'], "text"),
                       GetSQLValueString($_POST['idplan'], "int"));

  mysql_select_db($database_crenesoft, $crenesoft);
  $Result1 = mysql_query($updateSQL, $crenesoft) or die(mysql_error());

  $updateGoTo = "modelo_normal.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form6")) {
  $updateSQL = sprintf("UPDATE planes SET ficha=%s WHERE idplan=%s",
                       GetSQLValueString($_POST['ficha'], "text"),
                       GetSQLValueString($_POST['idplan'], "int"));

  mysql_select_db($database_crenesoft, $crenesoft);
  $Result1 = mysql_query($updateSQL, $crenesoft) or die(mysql_error());

  $updateGoTo = "modelo_normal.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form7")) {
  $updateSQL = sprintf("UPDATE planes SET desarrollo=%s WHERE idplan=%s",
                       GetSQLValueString($_POST['desarrollo'], "text"),
                       GetSQLValueString($_POST['idplan'], "int"));

  mysql_select_db($database_crenesoft, $crenesoft);
  $Result1 = mysql_query($updateSQL, $crenesoft) or die(mysql_error());

  $updateGoTo = "modelo_normal.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form8")) {
  $updateSQL = sprintf("UPDATE planes SET des_proceso=%s WHERE idplan=%s",
                       GetSQLValueString($_POST['des_proceso'], "text"),
                       GetSQLValueString($_POST['idplan'], "int"));

  mysql_select_db($database_crenesoft, $crenesoft);
  $Result1 = mysql_query($updateSQL, $crenesoft) or die(mysql_error());

  $updateGoTo = "modelo_normal.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form9")) {
  $updateSQL = sprintf("UPDATE planes SET nece_reque=%s WHERE idplan=%s",
                       GetSQLValueString($_POST['nece_reque'], "text"),
                       GetSQLValueString($_POST['idplan'], "int"));

  mysql_select_db($database_crenesoft, $crenesoft);
  $Result1 = mysql_query($updateSQL, $crenesoft) or die(mysql_error());

  $updateGoTo = "modelo_normal.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form10")) {
  $updateSQL = sprintf("UPDATE planes SET plan_produ=%s WHERE idplan=%s",
                       GetSQLValueString($_POST['plan_produ'], "text"),
                       GetSQLValueString($_POST['idplan'], "int"));

  mysql_select_db($database_crenesoft, $crenesoft);
  $Result1 = mysql_query($updateSQL, $crenesoft) or die(mysql_error());

  $updateGoTo = "modelo_normal.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form11")) {
  $updateSQL = sprintf("UPDATE planes SET riesgos=%s WHERE idplan=%s",
                       GetSQLValueString($_POST['riesgos'], "text"),
                       GetSQLValueString($_POST['idplan'], "int"));

  mysql_select_db($database_crenesoft, $crenesoft);
  $Result1 = mysql_query($updateSQL, $crenesoft) or die(mysql_error());

  $updateGoTo = "modelo_normal.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}


if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form13")) {
  $updateSQL = sprintf("UPDATE imagenes_plan_normal SET imagen1=%s WHERE idimagenplan=%s",
                       GetSQLValueString($_POST['imagen1'], "text"),
                       GetSQLValueString($_POST['idimagenplan'], "int"));

  mysql_select_db($database_crenesoft, $crenesoft);
  $Result1 = mysql_query($updateSQL, $crenesoft) or die(mysql_error());

  $updateGoTo = "modelo_normal.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form14")) {
  $updateSQL = sprintf("UPDATE imagenes_plan_normal SET imagen2=%s WHERE idimagenplan=%s",
                       GetSQLValueString($_POST['imagen2'], "text"),
                       GetSQLValueString($_POST['idimagenplan'], "int"));

  mysql_select_db($database_crenesoft, $crenesoft);
  $Result1 = mysql_query($updateSQL, $crenesoft) or die(mysql_error());

  $updateGoTo = "modelo_normal.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form15")) {
  $updateSQL = sprintf("UPDATE imagenes_plan_normal SET imagen3=%s WHERE idimagenplan=%s",
                       GetSQLValueString($_POST['imagen3'], "text"),
                       GetSQLValueString($_POST['idimagenplan'], "int"));

  mysql_select_db($database_crenesoft, $crenesoft);
  $Result1 = mysql_query($updateSQL, $crenesoft) or die(mysql_error());

  $updateGoTo = "modelo_normal.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form16")) {
  $updateSQL = sprintf("UPDATE imagenes_plan_normal SET imagen4=%s WHERE idimagenplan=%s",
                       GetSQLValueString($_POST['imagen4'], "text"),
                       GetSQLValueString($_POST['idimagenplan'], "int"));

  mysql_select_db($database_crenesoft, $crenesoft);
  $Result1 = mysql_query($updateSQL, $crenesoft) or die(mysql_error());

  $updateGoTo = "modelo_normal.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form17")) {
  $updateSQL = sprintf("UPDATE imagenes_plan_normal SET imagen5=%s WHERE idimagenplan=%s",
                       GetSQLValueString($_POST['imagen5'], "text"),
                       GetSQLValueString($_POST['idimagenplan'], "int"));

  mysql_select_db($database_crenesoft, $crenesoft);
  $Result1 = mysql_query($updateSQL, $crenesoft) or die(mysql_error());

  $updateGoTo = "modelo_normal.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form18")) {
  $updateSQL = sprintf("UPDATE imagenes_plan_normal SET imagen6=%s WHERE idimagenplan=%s",
                       GetSQLValueString($_POST['imagen6'], "text"),
                       GetSQLValueString($_POST['idimagenplan'], "int"));

  mysql_select_db($database_crenesoft, $crenesoft);
  $Result1 = mysql_query($updateSQL, $crenesoft) or die(mysql_error());

  $updateGoTo = "modelo_normal.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form19")) {
  $updateSQL = sprintf("UPDATE imagenes_plan_normal SET imagen7=%s WHERE idimagenplan=%s",
                       GetSQLValueString($_POST['imagen7'], "text"),
                       GetSQLValueString($_POST['idimagenplan'], "int"));

  mysql_select_db($database_crenesoft, $crenesoft);
  $Result1 = mysql_query($updateSQL, $crenesoft) or die(mysql_error());

  $updateGoTo = "modelo_normal.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form20")) {
  $updateSQL = sprintf("UPDATE imagenes_plan_normal SET imagen8=%s WHERE idimagenplan=%s",
                       GetSQLValueString($_POST['imagen8'], "text"),
                       GetSQLValueString($_POST['idimagenplan'], "int"));

  mysql_select_db($database_crenesoft, $crenesoft);
  $Result1 = mysql_query($updateSQL, $crenesoft) or die(mysql_error());

  $updateGoTo = "modelo_normal.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

$varUsuario_Recordset1 = "0";
if (isset($_SESSION["MM_idusuario"])) {
  $varUsuario_Recordset1 = $_SESSION["MM_idusuario"];
}
mysql_select_db($database_crenesoft, $crenesoft);
$query_Recordset1 = sprintf("SELECT * FROM planes WHERE planes.idplan = %s", GetSQLValueString($varUsuario_Recordset1, "int"));
$Recordset1 = mysql_query($query_Recordset1, $crenesoft) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);

$varUsuario_imageness = "0";
if (isset($_SESSION["MM_idusuario"])) {
  $varUsuario_imageness = $_SESSION["MM_idusuario"];
}
mysql_select_db($database_crenesoft, $crenesoft);
$query_imageness = sprintf("SELECT * FROM imagenes_plan_normal WHERE imagenes_plan_normal.idimagenplan = %s", GetSQLValueString($varUsuario_imageness, "int"));
$imageness = mysql_query($query_imageness, $crenesoft) or die(mysql_error());
$row_imageness = mysql_fetch_assoc($imageness);
$totalRows_imageness = mysql_num_rows($imageness);
?>
<!doctype html>
<html ng-app="githubSearcher">
<!-- InstanceBegin template="/Templates/default1.dwt.php" codeOutsideHTMLIsLocked="false" --><head lang="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="search/content/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="search/content/bootstrap-superhero.min.css">
    <link rel="stylesheet" type="text/css" href="search/content/site.css">

<head>
<meta charset="utf-8">
<!-- InstanceBeginEditable name="doctitle" -->



 
 
 
  
  
  <script src="search/scripts/libs/angular.min.js"></script>
  <script src="search/scripts/libs/angular-route.min.js"></script>
  <script src="search/scripts/libs/angular-animate.min.js"></script>

<script src="search/scripts/app.js"></script>



    <script src="search/scripts/Controllers/githubController.js"></script>
    <script src="search/scripts/Controllers/githubUserController.js"></script>
    <script src="search/scripts/Services/githubService.js"></script>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable --> 
<link href="webroot/crenesoft.css" rel="stylesheet" type="text/css">
<link href="webroot/menu.css" rel="stylesheet" type="text/css">
<link href="webroot/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="webroot/bootstrap-responsive.css" rel="stylesheet" type="text/css">
<link href="webroot/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
<link href="webroot/css.css" rel="stylesheet" type="text/css">
<link href="webroot/docs.css" rel="stylesheet" type="text/css">
<link href="webroot/menú-estilo.css" rel="stylesheet" type="text/css">
<link href="webroot/style.css" rel="stylesheet" type="text/css">
<link href="webroot/menurapido.css" rel="stylesheet" type="text/css">
<link href="webroot/ghs.css" rel="stylesheet" type="text/css">
<link href="webroot/menu_centro.css" rel="stylesheet" type="text/css">
 
</head>
<body> 
	<header>  
  
 <div id="fa_toolbar" class="fa_fix fa_toolbar_XL_Sized"><div id="fa_right" class="fa_tbMainElement"></div><span id="fa_left" class="fa_tbMainElement"><a class="menu-login"><?php include("includes/catalogo.php"); ?></a></span></span></div>
 
		<div id="pun-intro" class="clearfix">
		  <div class="sun-intro"><img src="imagenes/crenesoft/logo2.png" alt="CreneSoft"></a>
	      
          
          <?php if($_SESSION['MM_UserGroup']=='Admin'){?>
          <div id="itemnavtop"><ul id="menu-topnav" class="menu sf-js-enabled sf-shadow"><li class="principal"><a href="inicio.php" title="Ir al inicio">Principal</a></li><li id="menu-item-3772" class="tutoriales menu-item menu-item-type-taxonomy menu-item-object-category current-post-ancestor menu-item-3772"><a href="#" class="sf-with-ul">Ayuda<span class="sf-sub-indicator"> »</span></a><ul class="sub-menu sf-js-enabled sf-shadow">
            
          
          <li id="menu-item-3774" class="menu-item menu-item-type-taxonomy menu-item-object-category current-post-ancestor current-menu-parent current-post-parent menu-item-3774"><a href="http://www.monografias.com/trabajos6/isof/isof.shtml" target="_blank" >Descargar Software</a></li>
           
          <li id="menu-item-3774" class="menu-item menu-item-type-taxonomy menu-item-object-category current-post-ancestor current-menu-parent current-post-parent menu-item-3774"><a href="webroot/archivos/plandenegocios.pdf" target="_blank" >GitHub</a></li>
          
            
          <li id="menu-item-3774" class="menu-item menu-item-type-taxonomy menu-item-object-category current-post-ancestor current-menu-parent current-post-parent menu-item-3774"><a href="webroot/archivos/manual.pdg" target="_blank" >Manual</a></li><li id="menu-item-3778" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3778"><a href="">Arquitectura base</a></li><li id="menu-item-3776" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3776"><a href="">Industria del Software libre</a></li></ul></li><li id="menu-item-5491" class="comunidad menu-item menu-item-type-custom menu-item-object-custom menu-item-5491"><a href="preguntas.php">¿Dudas?</a></li><li id="menu-item-3762" class="articulos menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3762"><a href="#" class="sf-with-ul">Enterate<span class="sf-sub-indicator"> »</span></a><ul class="sub-menu sf-js-enabled sf-shadow"><li id="menu-item-3763" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3763"><a href="">Vigilancia Tecnologica</a></li><li id="menu-item-4327" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-4327"><a href=""></a></li><li id="menu-item-3765" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3765"><a <a href="">¿Que es? ¿para para que sirve? esta platforma</a></li></ul></li><li id="menu-item-3768" class="descargas menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3768"><a href="#">Recursos<span class="sf-sub-indicator"> »</span></a><ul class="sub-menu sf-js-enabled sf-shadow"><li id="menu-item-3769" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3769"><a href="www.youtube.com/">Tienes problemas para utlizar el software</a></li><li id="menu-item-3764" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3764"><a href="Copia_seguridad.php">copia de seguridad de tus datos</a></li><li id="menu-item-3770" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3770"></li></ul></li></ul></div>
          
          <?php }?>
           <?php if($_SESSION['MM_UserGroup']=='Usuario'){?>
		<div id="itemnavtop"><ul id="menu-topnav" class="menu sf-js-enabled sf-shadow"><li class="principal"><a href="inicio.php" title="Ir al inicio">Principal</a></li><li id="menu-item-3772" class="tutoriales menu-item menu-item-type-taxonomy menu-item-object-category current-post-ancestor menu-item-3772"><a href="#" class="sf-with-ul">Ayuda<span class="sf-sub-indicator"> »</span></a><ul class="sub-menu sf-js-enabled sf-shadow">
            
          
          <li id="menu-item-3774" class="menu-item menu-item-type-taxonomy menu-item-object-category current-post-ancestor current-menu-parent current-post-parent menu-item-3774"><a href="http://www.monografias.com/trabajos6/isof/isof.shtml" target="_blank" >Descargar Software</a></li>
           
          <li id="menu-item-3774" class="menu-item menu-item-type-taxonomy menu-item-object-category current-post-ancestor current-menu-parent current-post-parent menu-item-3774"><a href="webroot/archivos/plandenegocios.pdf" target="_blank" >GitHub</a></li>
          
            
          <li id="menu-item-3774" class="menu-item menu-item-type-taxonomy menu-item-object-category current-post-ancestor current-menu-parent current-post-parent menu-item-3774"><a href="webroot/archivos/manual.pdg" target="_blank" >Manual</a></li><li id="menu-item-3778" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3778"><a href="">Arquitectura base</a></li><li id="menu-item-3776" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3776"><a href="">Industria del Software libre</a></li></ul></li><li id="menu-item-5491" class="comunidad menu-item menu-item-type-custom menu-item-object-custom menu-item-5491"><a href="preguntas.php">¿Dudas?</a></li><li id="menu-item-3762" class="articulos menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3762"><a href="#" class="sf-with-ul">Enterate<span class="sf-sub-indicator"> »</span></a><ul class="sub-menu sf-js-enabled sf-shadow"><li id="menu-item-3763" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3763"><a href="">Vigilancia Tecnologica</a></li><li id="menu-item-4327" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-4327"><a href=""></a></li><li id="menu-item-3765" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3765"><a <a href="">¿Que es? ¿para para que sirve? esta platforma</a></li></ul></li><li id="menu-item-3768" class="descargas menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3768"><a href="#">Recursos<span class="sf-sub-indicator"> »</span></a><ul class="sub-menu sf-js-enabled sf-shadow"><li id="menu-item-3769" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3769"><a href="www.youtube.com/">Tienes problemas para utlizar el software</a></li><li id="menu-item-3764" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3764"><a href="Copia_seguridad.php">copia de seguridad de tus datos</a></li><li id="menu-item-3770" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3770"></li></ul></li></ul></div>
        <?php } ?>
          
          
      <div id="pun-title" style="display:none;"><h1></h1></div><p id="pun-desc" style="display:none;"></p></div></div>

 <?php if($_SESSION['MM_UserGroup']=='Admin'){?> 
<div class="navbar navbar-inverse">
	<div class="navbar-inner">
		<div class="container">
			<a class="brand" href="#">Panel de administración</a>
				<div class="nav-collapse collapse navbar-inverse-collapse">
				<ul id="menu"> 

					<li ><a href="admin_agregar.php">Agregar Usuarios</a></li> 
					
				<li><a href="usuarios_lista.php">Lista de usuarios</a></li>
				<li><a href="categorias_ver.php">Categorias de Software</a></li>
				<li><a href="categorias_extras_ver.php">Categorias Extras</a></li>
				<li><a href="#">Contacto</a></li>
						<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" target="_black" href="preguntas_admin.php">Preguntas y Respuestas</a>
						<ul class="dropdown-menu">
					
							<li class="container">¡Hola!</li>
							<li>
								 
							</li>
						</ul>
				</li>
				</ul>
				<ul class="nav pull-right">								
								
									</a>
								</li>
								<li>
								 
							</ul>
			</div>
		</div>
	</div>
</div>
<?php } else{?>
		
        <?php } ?>
        <h1>VigTech - GitHub</h1> 
	</header>
    <nav>
    	<p> 
         
        </p>
    </nav>
    <section id="principal">
    	<article> 
		<!-- InstanceBeginEditable name="Contenido" -->      
 
  
 <div id="contenedor_formulario" class="well">

       


			<legend align="center">Utiliza las ayudas y/o utiliza el boton <span class="label label-info"> <a  class="linkeos"  title="Esta es una prueba">Ver mas</a></span> pasando el cursor sobre el para guiarte</legend>
			
		
        		 
        <fieldset class="well well-small">
                   
  
  




    

    <title>VigTech</title>
</head>

    <div class="container">
            
            <h1 align="center">Busqueda en GitHub </h1>
            <div class="row">
            <hr>
            <div class="page" ng-view></div>
        </div>
        <hr>
        <div class="row"></div>
       <div id="container1"><svg id="svg1"></svg></div>
    </div>
   

          
                </fieldset>
          
 		<!-- InstanceEndEditable -->
        </article>    	
    </section>
    <p>&nbsp;</p>
   
<div>
      <div>
          <div>
            <div>
                <div>
                  <div>
                      <ul>
                        <li>
    <!-- END html_validation -->
                        </li>
                      </ul>
                      <!-- BEGIN switch_footer_links -->
                      <ul>
                        <li>
                            <!-- BEGIN footer_link -->
                              <!-- BEGIN switch_separator --> | <!-- END switch_separator -->
                              </a>
                            <!-- END footer_link -->
                        </li>
                      </ul>
                      <!-- END switch_footer_links -->
                  </div>
                  <br />
                  <p class="center">
                      
                  </p>
                </div>
               
            </div>
          </div>  
      </div>
    </div>
     
    <div id="pun-foot"><div id="shitpe" style="display: block;"><img src="http://i.imgur.com/0LsMnPJ.png" onclick="javascript:history.back(-1);" title="Regresa uno pagina antes"></div><div id="pun-about" class="clearfix"><div class="logobottom"></div><div class="info-foot">
      <h2>SOBRE VIgtech | GHS</h2>
         
          Esta plataforma web está desarrollada única y exclusivamente con fines de emprendimiento y busca brindar al usuario la posibilidad de realizar vigilancia tecnologica con los datos de la plataforma GitHub
          
           </div>
        <h6 align="center">
				Este sitio está optimizado para <a href="https://www.google.com/intl/es/chrome/browser/?hl=es" target="_blank"><img src="imagenes/crenesoft/icon_google.png"> Google Chrome </h6></div></div></div></div>

<style type="text/css">

#container1 {
  background: none repeat scroll 0 0 rgba rgba(0,0,0,1);
  -webkit-border-radius: 20px 20px 20px 20px;
  -moz-border-radius: 20px 20px 20px 20px;
  /*border-radius: 20px 20px 20px 20px;
  -webkit-box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.09) inset;
  -moz-box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.09) inset;
  box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.09) inset;*/
  margin-left: -73%;
}
svg{
  width: 1216px;
}
circle.nodeg {
fill: lightsteelblue;
stroke: #555;
stroke-width: 3px;
}
circle.node {
fill: lightsteelblue;
stroke: #555;
stroke-width: 3px;
}
circle.leaf {
stroke: #fff;
stroke-width: 1.5px;
}
path.hull {
fill: lightsteelblue;
fill-opacity: 0.3;
}
line.link {
stroke: #333;
stroke-opacity: 0.5;
pointer-events: none;
}
</style>
<script type="text/javascript">
    <?php 
$query_Recordset1 = "SELECT id,consulta FROM resultclustering WHERE userid=".$_SESSION["MM_idusuario"]." ORDER BY id DESC LIMIT 10";
mysql_select_db($database_crenesoft, $crenesoft);
$Recordset1 = mysql_query($query_Recordset1, $crenesoft) or die (mysql_error());
     
if (mysql_num_rows($Recordset1) == 0) {
    echo "historial=[]";
}else{
echo "historial = [";
while ($fila = mysql_fetch_assoc($Recordset1)) {
//    
echo '{id:"'.$fila["id"].'",consulta:"'.$fila["consulta"].'"},';
}
echo "]";
mysql_free_result($Recordset1);
}
     ?>
</script>
<script src="search/scripts/libs/d3/d3.min.js"></script>
<script type="text/javascript"> 
    function renderizargrafico(){
var width = window.innerWidth-20, // svg width
height = window.innerHeight-21, // svg height
dr = 8, // default point radius
off = 10, // cluster hull offset
expand = {}, // expanded clusters
data, net, force, hullg, hull, linkg, link, nodeg, node;
var curve = d3.svg.line()
.interpolate("cardinal-closed")
.tension(.75);
var fill = d3.scale.category20();
function noop() { return false; }
function nodeid(n) {
return n.size ? "_g_"+n.group : n.name;
}
function linkid(l) {
var u = nodeid(l.source),
v = nodeid(l.target);
return u<v ? u+"|"+v : v+"|"+u;
}
function getGroup(n) { return n.group; }
// constructs the network to visualize
function network(data, prev, index, expand) {
expand = expand || {};
var gm = {}, // group map
nm = {}, // node map
lm = {}, // link map
gn = {}, // previous group nodes
gc = {}, // previous group centroids
nodes = [], // output nodes
links = []; // output links
// process previous nodes for reuse or centroid calculation
if (prev) {
prev.nodes.forEach(function(n) {
var i = index(n), o;
if (n.size > 0) {
gn[i] = n;
n.size = 0;
} else {
o = gc[i] || (gc[i] = {x:0,y:0,count:0});
o.x += n.x;
o.y += n.y;
o.count += 1;
}
});
}
// determine nodes
for (var k=0; k<data.nodes.length; ++k) {
var n = data.nodes[k],
i = index(n),
l = gm[i] || (gm[i]=gn[i]) || (gm[i]={group:i, size:0, nodes:[]});
if (expand[i]) {
// the node should be directly visible
nm[n.name] = nodes.length;
nodes.push(n);
if (gn[i]) {
// place new nodes at cluster location (plus jitter)
n.x = gn[i].x + Math.random();
n.y = gn[i].y + Math.random();
}
} else {
// the node is part of a collapsed cluster
if (l.size == 0) {
// if new cluster, add to set and position at centroid of leaf nodes
nm[i] = nodes.length;
nodes.push(l);
if (gc[i]) {
l.x = gc[i].x / gc[i].count;
l.y = gc[i].y / gc[i].count;
}
}
nodes.push(n);
}
// always count group size as we also use it to tweak the force graph strengths/distances
l.size += 1;
n.group_data = l;
}
for (i in gm) { gm[i].link_count = 0; }
// determine links
for (k=0; k<data.links.length; ++k) {
var e = data.links[k],
u = index(e.source),
v = index(e.target);
if (u != v) {
gm[u].link_count++;
gm[v].link_count++;
}
u = expand[u] ? nm[e.source.name] : nm[u];
v = expand[v] ? nm[e.target.name] : nm[v];
var i = (u<v ? u+"|"+v : v+"|"+u),
l = lm[i] || (lm[i] = {source:u, target:v, size:0});
l.size += 1;
}
for (i in lm) { links.push(lm[i]); }
return {nodes: nodes, links: links};
}
function convexHulls(nodes, index, offset) {
var hulls = {};
// create point sets
for (var k=0; k<nodes.length; ++k) {
var n = nodes[k];
if (n.size) continue;
var i = index(n),
l = hulls[i] || (hulls[i] = []);
l.push([n.x-offset, n.y-offset]);
l.push([n.x-offset, n.y+offset]);
l.push([n.x+offset, n.y-offset]);
l.push([n.x+offset, n.y+offset]);
}
// create convex hulls
var hullset = [];
for (i in hulls) {
hullset.push({group: i, path: d3.geom.hull(hulls[i])});
}
return hullset;
}
function drawCluster(d) {
return curve(d.path); // 0.8
}
// --------------------------------------------------------
var body = d3.select('#container1');
body.selectAll("*").remove();
var vis = body.append("svg")
//var vis = d3.select("#svg1");
vis.attr("width", width);
vis.attr("height", height);
//"miserables1.json"
var json = datos;
//d3.json("/vighubjson/search/prueba.php?cache=true&id="+id, function(json) {
data = {}
data.links = [];
data.nodes = json.items;  
for (var i=0; i<data.links.length; ++i) {
o = data.links[i];
o.source = data.nodes[o.source];
o.target = data.nodes[o.target];
}
hullg = vis.append("g");
linkg = vis.append("g");
nodeg = vis.append("g");
init(); 

vis.attr("opacity", 1e-6)
.transition()
.duration(1000)
.attr("opacity", 1);
//});
function init() {
if (force) force.stop();

net = network(data, net, getGroup, expand);
force = d3.layout.force()
.nodes(net.nodes)
.links(net.links)
.size([width, height])
.linkDistance(function(l, i) {
var n1 = l.source, n2 = l.target;
// larger distance for bigger groups:
// both between single nodes and _other_ groups (where size of own node group still counts),
// and between two group nodes.
//
// reduce distance for groups with very few outer links,
// again both in expanded and grouped form, i.e. between individual nodes of a group and
// nodes of another group or other group node or between two group nodes.
//
// The latter was done to keep the single-link groups ('blue', rose, ...) close.
return 30 +
Math.min(20 * Math.min((n1.size || (n1.group != n2.group ? n1.group_data.size : 0)),
(n2.size || (n1.group != n2.group ? n2.group_data.size : 0))),
-30 +
30 * Math.min((n1.link_count || (n1.group != n2.group ? n1.group_data.link_count : 0)),
(n2.link_count || (n1.group != n2.group ? n2.group_data.link_count : 0))),
100);
//return 150;
})
.linkStrength(function(l, i) {
return 1;
})
.gravity(0.85) // gravity+charge tweaked to ensure good 'grouped' view (e.g. green group not smack between blue&orange, ...
.charge(-3000) // ... charge is important to turn single-linked groups to the outside
.friction(0.2) // friction adjusted to get dampened display: less bouncy bouncy ball [Swedish Chef, anyone?]
.start();
hullg.selectAll("path.hull").remove();
hull = hullg.selectAll("path.hull")
.data(convexHulls(net.nodes, getGroup, off))
.enter().append("path")
.attr("class", "hull")
.attr("d", drawCluster)
.style("fill", function(d) { return fill(d.group); })
.on("click", function(d) {
console.log("hull click", d, arguments, this, expand[d.group]);
expand[d.group] = false; init();
});
link = linkg.selectAll("line.link").data(net.links, linkid);
link.exit().remove();
link.enter().append("line")
.attr("class", "link")
.attr("x1", function(d) { return d.source.x; })
.attr("y1", function(d) { return d.source.y; })
.attr("x2", function(d) { return d.target.x; })
.attr("y2", function(d) { return d.target.y; })
.style("stroke-width", function(d) { return d.size || 1; });

node = nodeg.selectAll("g.node").data(net.nodes, nodeid);
node.exit().remove();
var onEnter = node.enter();
  var g = onEnter
      .append("g")
      .attr("class", function(d) { return "node" + (d.size?"":" leaf"); })
      .attr("transform", function(d) { 
          return "translate(" + d.x + "," + d.y + ")"; 
      }); 

function openInNewTab(url) {
  var win = window.open(url, '_blank');
  win.focus();
}
  
  g.append("circle")
      // if (d.size) -- d.size > 0 when d is a group node.      
      .attr("r", function(d) { return d.size ? d.size + dr : dr+1; })
      .style("fill", function(d) { return fill(d.group); })
      .on("click", function(d) {
if(d.clone_url)
openInNewTab(d.clone_url) 
console.log("node click", d, arguments, this, expand[d.group]);
 
        expand[d.group] = !expand[d.group];
init();
});
//aqui 
g.append("text")
      .attr("fill","black")
  

  .text(function(d,i){
      if (d['name']){          
          return d['name']+ "["+ d['language']+"]"; //importante
      }
  });

node.call(force.drag);
force.on("tick", function() {
if (!hull.empty()) {
hull.data(convexHulls(net.nodes, getGroup, off))
.attr("d", drawCluster);
}
link.attr("x1", function(d) { return d.source.x; })
  .attr("y1", function(d) { return d.source.y; })
  .attr("x2", function(d) { return d.target.x; })
  .attr("y2", function(d) { return d.target.y; });

node.attr("transform", function(d){
    return "translate("+d.x+","+d.y+")"});
});
}
    }
    </script>
</body>
<!-- InstanceEnd --></html>
