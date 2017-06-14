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
<html><!-- InstanceBegin template="/Templates/default1.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf-8">
<!-- InstanceBeginEditable name="doctitle" -->
<title>CreneSoft_Admin</title>
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
 <script> 
  	function cargarimagenuno()
  	{
	  self.name = 'opener'; //degfine com ose llama esta ventana
	  remote = open('gestionimagen_plan_normal.php', 'remote', 	'width=400, height=150, location=no, scrollbars=yes, menubars=no, resizable=yes, fullscreen=no, status=yes'); //propieades de las imagenes
	  remote.focus(); // esta ventanda que se abio pase a primer plano
	  }
  
  </script>
   <script> 
  	function cargarimagedos()
  	{
	  self.name = 'opener'; //degfine com ose llama esta ventana
	  remote = open('gestionimagen_plan_normal1.php', 'remote', 	'width=400, height=150, location=no, scrollbars=yes, menubars=no, resizable=yes, fullscreen=no, status=yes'); //propieades de las imagenes
	  remote.focus(); // esta ventanda que se abio pase a primer plano
	  }
  
  </script>
   <script> 
  	function cargarimagentres()
  	{
	  self.name = 'opener'; //degfine com ose llama esta ventana
	  remote = open('gestionimagen_plan_normal2.php', 'remote', 	'width=400, height=150, location=no, scrollbars=yes, menubars=no, resizable=yes, fullscreen=no, status=yes'); //propieades de las imagenes
	  remote.focus(); // esta ventanda que se abio pase a primer plano
	  }
  
  </script>
   <script> 
  	function cargarimagencuatro()
  	{
	  self.name = 'opener'; //degfine com ose llama esta ventana
	  remote = open('gestionimagen_plan_normal3.php', 'remote', 	'width=400, height=150, location=no, scrollbars=yes, menubars=no, resizable=yes, fullscreen=no, status=yes'); //propieades de las imagenes
	  remote.focus(); // esta ventanda que se abio pase a primer plano
	  }
  
  </script>
     <script> 
  	function cargarimagencinco()
  	{
	  self.name = 'opener'; //degfine com ose llama esta ventana
	  remote = open('gestionimagen_plan_normal4.php', 'remote', 	'width=400, height=150, location=no, scrollbars=yes, menubars=no, resizable=yes, fullscreen=no, status=yes'); //propieades de las imagenes
	  remote.focus(); // esta ventanda que se abio pase a primer plano
	  }
  
  </script>
  <script> 
  	function cargarimagencinco()
  	{
	  self.name = 'opener'; //degfine com ose llama esta ventana
	  remote = open('gestionimagen_plan_normal5.php', 'remote', 	'width=400, height=150, location=no, scrollbars=yes, menubars=no, resizable=yes, fullscreen=no, status=yes'); //propieades de las imagenes
	  remote.focus(); // esta ventanda que se abio pase a primer plano
	  }
  
  </script>
   <script> 
  	function cargarimagenseis()
  	{
	  self.name = 'opener'; //degfine com ose llama esta ventana
	  remote = open('gestionimagen_plan_normal6.php', 'remote', 	'width=400, height=150, location=no, scrollbars=yes, menubars=no, resizable=yes, fullscreen=no, status=yes'); //propieades de las imagenes
	  remote.focus(); // esta ventanda que se abio pase a primer plano
	  }
  
  </script>
    <script> 
  	function cargarimagensiete()
  	{
	  self.name = 'opener'; //degfine com ose llama esta ventana
	  remote = open('gestionimagen_plan_normal7.php', 'remote', 	'width=400, height=150, location=no, scrollbars=yes, menubars=no, resizable=yes, fullscreen=no, status=yes'); //propieades de las imagenes
	  remote.focus(); // esta ventanda que se abio pase a primer plano
	  }
  
  </script>
   <script> 
  	function cargarimagenocho()
  	{
	  self.name = 'opener'; //degfine com ose llama esta ventana
	  remote = open('gestionimagen_plan_normal8.php', 'remote', 	'width=400, height=150, location=no, scrollbars=yes, menubars=no, resizable=yes, fullscreen=no, status=yes'); //propieades de las imagenes
	  remote.focus(); // esta ventanda que se abio pase a primer plano
	  }
  
  </script>

  
 <div id="contenedor_formulario" class="well">

       <fieldset class="well">
      <legend align="center">¡Estas en el plan de negocios de forma tradicional!</legend>

		<!--==============================================================-->
		<fieldset class="well">
			<!--==============================================================-->
			<!-- Titulo para el formulario -->
			<!--==============================================================-->
			<legend align="center">Utiliza las ayudas y/o utiliza el boton <span class="label label-info"> <a  class="linkeos"  title="Esta es una prueba">Ver mas</a></span> pasando el cursor sobre el para guiarte</legend>
			
<div id="datos_personales" class="span5">	
		<fieldset class="well">
			<legend>1. Resumen Ejecutivo <span class="label label-info"> <a target="_blank" class="linkeos" href="webroot/archivos/PDN tradicional.pdf" title="En esta parte se hace la introducción al documento, este documento debe ser directo pero tiene que tener bases fuertes y lo suficientemente amplio para sostenerse y explicarse así mismo, dicho documento incluye:

Definición de objetivos, justificación y antecedentes del proyecto a realizar, análisis del sector, análisis del mercado y análisis de la competencia.

Se sugiere preparar un borrador inicial que sirve como guía durante la preparación del resto del plan y puede ser utilizado como una herramienta preliminar para comenzar a negociar con personas interesadas en el proyecto, una vez que se ha concluido el plan de negocios, entonces se procederá a revisar y actualizar el resumen ejecutivo.
">Ver mas</a></span></legend>
			<div class="span4">
				<label>Resumen Ejecutivo </label> 
                <fieldset class="well well-small">
                  <form method="post" name="form1" action="<?php echo $editFormAction; ?>">
                    <table align="center">
                      <tr valign="baseline">
                        <td nowrap align="right" valign="top"></td>
                        <td><textarea name="resumen" cols="62" style="width:95%" rows="18"><?php echo htmlentities($row_Recordset1['resumen'], ENT_COMPAT, 'utf-8'); ?></textarea></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">&nbsp;</td>
                        <td><input type="submit" class="btn btn-primary" value="Guardar"></td>
                      </tr>
                    </table>
                    <input type="hidden" name="MM_update" value="form1">
                    <input type="hidden" name="idplan" value="<?php echo $row_Recordset1['idplan']; ?>">
                  </form>
                </fieldset>
          </div>
        </fieldset>
          </div>
         
 <div id="datos_personales" class="span5">
		<fieldset class="well">
			<legend>2. Descripción del Negocio <span class="label label-info"> <a target="_blank" class="linkeos" href="webroot/archivos/PDN tradicional.pdf" title="El objetivo de esta sección, es proporcionar un panorama detallado de la empresa y de los productos o servicios que se planean ofrecer. Debe definirse la misión y visión de la empresa, deben establecerse las ventajas competitivas.">Ver mas</a></span></legend>
                <div class="span4">
				<label>Descripción del Negocio</label>
                 <fieldset class="well well-small">
                  <form method="post" name="form2" action="<?php echo $editFormAction; ?>">
                    <table align="center">
                      <tr valign="baseline">
                        <td nowrap align="right" valign="top"></td>
                        <td><textarea name="descripcion" cols="50" style="width:95%" rows="14"><?php echo htmlentities($row_Recordset1['descripcion'], ENT_COMPAT, 'utf-8'); ?></textarea></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">&nbsp;</td>
                        <td><input type="submit" class="btn btn-primary" value="Guardar"></td>
                      </tr>
                    </table>
                    <input type="hidden" name="MM_update" value="form2">
                    <input type="hidden" name="idplan" value="<?php echo $row_Recordset1['idplan']; ?>">
                  </form>

   <form method="post" name="form14" action="<?php echo $editFormAction; ?>">
                    <input type="hidden" name="imagen2" value="<?php echo htmlentities($row_imageness['imagen2'], ENT_COMPAT, 'utf-8'); ?>" size="32">
  <table align="center" cellpadding="4" cellspacing="4">
    <tr valign="baseline">
      <td rowspan="2" align="right" nowrap><img src="imagenes/plan_normal/<?php echo $row_imageness['imagen2']; ?>" width="100" height="100"></td>
      <td><input type="button" name="button" onClick="javascript:cargarimagedos();" class="btn btn-success" title="Si deseas saber como hacer un logo PNG con photoshop escribe en el link de ¿Dudas?" id="button" value="Cargar imagen"></td>
    </tr>
    <tr valign="baseline">
      <td><input type="submit"  class="btn btn-primary" value="Guardar Img"></td>
    </tr>
  </table>
  <input type="hidden" name="MM_update" value="form14">
  <input type="hidden" name="idimagenplan" value="<?php echo $row_imageness['idimagenplan']; ?>">
</form>
               </fieldset>
			</div>
            </fieldset>
      </div>
<div id="datos_personales" class="span5">
		<fieldset class="well">
			<legend>3. Análisis de Mercado <span class="label label-info"> <a target="_blank" class="linkeos" href="webroot/archivos/PDN tradicional.pdf" title="Aquí se describe el tamaño y crecimiento potencial del mercado, el perfil del consumidor  y/o cliente, además se debe decir en esta parte del proceso en que negocio va  a competir. El responsable o empresario debe de poner en claro por qué el proyecto es viable observando las condiciones actuales y futuras. ">Ver mas</a></span></legend>
			<div class="span4">
				<label>Análisis de Mercado</label>
              <fieldset class="well well-small">
                <form method="post" name="form3" action="<?php echo $editFormAction; ?>">
                    <table align="center">
                      <tr valign="baseline">
                        <td nowrap align="right" valign="top"></td>
                        <td><textarea name="analisis" cols="50" style="width:95%" rows="14"><?php echo htmlentities($row_Recordset1['analisis'], ENT_COMPAT, 'utf-8'); ?></textarea></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">&nbsp;</td>
                        <td><input type="submit" class="btn btn-primary" value="Guardar"></td>
                      </tr>
                    </table>
                    <input type="hidden" name="MM_update" value="form3">
                    <input type="hidden" name="idplan" value="<?php echo $row_Recordset1['idplan']; ?>">
                </form>
  <form method="post" name="form15" action="<?php echo $editFormAction; ?>">
                    <input type="hidden" name="imagen3" value="<?php echo htmlentities($row_imageness['imagen3'], ENT_COMPAT, 'utf-8'); ?>" size="32">
  <table align="center" cellpadding="4" cellspacing="4">
    <tr valign="baseline">
      <td rowspan="2" align="right" nowrap><img src="imagenes/plan_normal/<?php echo $row_imageness['imagen3']; ?>" width="100" height="100"></td>
      <td><input type="button" name="button" onClick="javascript:cargarimagentres();" class="btn btn-success" title="Si deseas saber como hacer un logo PNG con photoshop escribe en el link de ¿Dudas?" id="button" value="Cargar imagen"></td>
    </tr>
    <tr valign="baseline">
      <td><input type="submit"  class="btn btn-primary" value="Guardar Img"></td>
    </tr>
  </table>
  <input type="hidden" name="MM_update" value="form15">
  <input type="hidden" name="idimagenplan" value="<?php echo $row_imageness['idimagenplan']; ?>">
</form>
                  </fieldset>
          </div>
        </fieldset>
          </div>
<div id="datos_personales" class="span5">
		<fieldset class="well">
			<legend>4. Cuerpo directivo <span class="label label-info"> <a target="_blank" class="linkeos" href="webroot/archivos/PDN tradicional.pdf" title="En esta parte del proceso es importante resaltar los antecedentes de investigación, lo que se quiere alcanzar las habilidades, logros y demás cosas que demuestren que puede ser exitoso el proyecto por quienes van  a dirigir el proyecto. Así mismo se debe considerar que exista la oferta y demanda de todo tipo de mano de obra para echar a andar el proyecto.">Ver mas</a></span></legend>
			<div class="span4">
            <label>Cuerpo directivo</label>
			  <fieldset class="well well-small">
                <form method="post" name="form4" action="<?php echo $editFormAction; ?>">
                    <table align="center">
                      <tr valign="baseline">
                        <td nowrap align="right" valign="top"></td>
                        <td><textarea name="cuerpo" cols="50" style="width:95%" rows="14"><?php echo htmlentities($row_Recordset1['cuerpo'], ENT_COMPAT, 'utf-8'); ?></textarea></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">&nbsp;</td>
                        <td><input type="submit" class="btn btn-primary" value="Guardar"></td>
                      </tr>
                    </table>
                    <input type="hidden" name="MM_update" value="form4">
                    <input type="hidden" name="idplan" value="<?php echo $row_Recordset1['idplan']; ?>">
                </form>
                  <form method="post" name="form16" action="<?php echo $editFormAction; ?>">
                    <input type="hidden" name="imagen4" value="<?php echo htmlentities($row_imageness['imagen4'], ENT_COMPAT, 'utf-8'); ?>" size="32">
  <table align="center" cellpadding="4" cellspacing="4">
    <tr valign="baseline">
      <td rowspan="2" align="right" nowrap><img src="imagenes/plan_normal/<?php echo $row_imageness['imagen4']; ?>" width="100" height="100"></td>
      <td><input type="button" name="button" onClick="javascript:cargarimagencuatro();" class="btn btn-success" title="Si deseas saber como hacer un logo PNG con photoshop escribe en el link de ¿Dudas?" id="button" value="Cargar imagen"></td>
    </tr>
    <tr valign="baseline">
      <td><input type="submit"  class="btn btn-primary" value="Guardar Img"></td>
    </tr>
  </table>
                  <input type="hidden" name="MM_update" value="form16">
                  <input type="hidden" name="idimagenplan" value="<?php echo $row_imageness['idimagenplan']; ?>">
                </form>
              </fieldset>
			</div>
            </fieldset>
      </div>
            <div id="datos_usuario" class="span5">
		<fieldset class="well">
			<legend>5. Operaciones</legend>
            <div class="span4">
            <label>5.1 Ficha Técnica del Software <span class="label label-info"> <a target="_blank" class="linkeos" href="webroot/archivos/PDN tradicional.pdf" title="se describe las características del producto o servicio a desarrollar: capacidad, capacidades, diseño, servicio, tecnología, características fisicoquímicas (si se necesitan), características de empaque y embalaje, almacenaje, etc.">Ver mas</a></span></label>
			  <fieldset class="well well-small">
                <form method="post" name="form6" action="<?php echo $editFormAction; ?>">
                    <table align="center">
                      <tr valign="baseline">
                        <td nowrap align="right" valign="top"></td>
                        <td><textarea name="ficha" cols="50" style="width:95%" rows="5"><?php echo htmlentities($row_Recordset1['ficha'], ENT_COMPAT, 'utf-8'); ?></textarea></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">&nbsp;</td>
                        <td><input type="submit" class="btn btn-primary" value="Guardar"></td>
                      </tr>
                    </table>
                    <input type="hidden" name="MM_update" value="form6">
                    <input type="hidden" name="idplan" value="<?php echo $row_Recordset1['idplan']; ?>">
                </form>
  <form method="post" name="form17" action="<?php echo $editFormAction; ?>">
                    <input type="hidden" name="imagen5" value="<?php echo htmlentities($row_imageness['imagen5'], ENT_COMPAT, 'utf-8'); ?>" size="32">
  <table align="center" cellpadding="4" cellspacing="4">
    <tr valign="baseline">
      <td rowspan="2" align="right" nowrap><img src="imagenes/plan_normal/<?php echo $row_imageness['imagen5']; ?>" width="100" height="100"></td>
      <td><input type="button" name="button" onClick="javascript:cargarimagencinco();" class="btn btn-success" title="Si deseas saber como hacer un logo PNG con photoshop escribe en el link de ¿Dudas?" id="button" value="Cargar imagen"></td>
    </tr>
    <tr valign="baseline">
      <td><input type="submit"  class="btn btn-primary" value="Guardar Img"></td>
    </tr>
  </table>
  <input type="hidden" name="MM_update" value="form17">
  <input type="hidden" name="idimagenplan" value="<?php echo $row_imageness['idimagenplan']; ?>">
</form>
                </fieldset>
          </div>
                
               <div class="span4">
            <label>5.2 Estado de desarrolo <span class="label label-info"> <a target="_blank" class="linkeos" href="webroot/archivos/PDN tradicional.pdf" title="se escribe que tan desarrollado tiene el producto o servicio y/o si se han desarrollado productos similares y que tan desarrollado ha sido.">Ver mas</a></span></label>
				<fieldset class="well well-small">
                  <form method="post" name="form7" action="<?php echo $editFormAction; ?>">
                    <table align="center">
                      <tr valign="baseline">
                        <td nowrap align="right" valign="top"></td>
                        <td><textarea name="desarrollo" cols="50" style="width:95%" rows="5"><?php echo htmlentities($row_Recordset1['desarrollo'], ENT_COMPAT, 'utf-8'); ?></textarea></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">&nbsp;</td>
                        <td><input type="submit" class="btn btn-primary" value="Guardar"></td>
                      </tr>
                    </table>
                    <input type="hidden" name="MM_update" value="form7">
                    <input type="hidden" name="idplan" value="<?php echo $row_Recordset1['idplan']; ?>">
                  </form>
   <form method="post" name="form18" action="<?php echo $editFormAction; ?>">
                    <input type="hidden" name="imagen6" value="<?php echo htmlentities($row_imageness['imagen6'], ENT_COMPAT, 'utf-8'); ?>" size="32">
  <table align="center" cellpadding="4" cellspacing="4">
    <tr valign="baseline">
      <td rowspan="2" align="right" nowrap><img src="imagenes/plan_normal/<?php echo $row_imageness['imagen6']; ?>" width="100" height="100"></td>
      <td><input type="button" name="button" onClick="javascript:cargarimagenseis();" class="btn btn-success" title="Si deseas saber como hacer un logo PNG con photoshop escribe en el link de ¿Dudas?" id="button" value="Cargar imagen"></td>
    </tr>
    <tr valign="baseline">
      <td><input type="submit"  class="btn btn-primary" value="Guardar Img"></td>
    </tr>
  </table>
  <input type="hidden" name="MM_update" value="form18">
  <input type="hidden" name="idimagenplan" value="<?php echo $row_imageness['idimagenplan']; ?>">
</form>
                </fieldset>
			</div> 
			<div class="span4">
            <label>5.3 Descripción del Proceso <span class="label label-info"> <a target="_blank" class="linkeos" href="webroot/archivos/PDN tradicional.pdf" title="se relaciona y se describe de forma secuencial cada una de las actividades y procedimientos que forman parte del flujo del proceso de producción del producto o servicio a ofrecer, se hace diagramas de flujo  y se los anexa al documento.">Ver mas</a></span></label>
			  <fieldset class="well well-small">
                <form method="post" name="form8" action="<?php echo $editFormAction; ?>">
                    <table align="center">
                      <tr valign="baseline">
                        <td nowrap align="right" valign="top"></td>
                        <td><textarea name="des_proceso" cols="50" style="width:95%" rows="5"><?php echo htmlentities($row_Recordset1['des_proceso'], ENT_COMPAT, 'utf-8'); ?></textarea></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">&nbsp;</td>
                        <td><input type="submit" class="btn btn-primary" value="Guardar"></td>
                      </tr>
                    </table>
                    <input type="hidden" name="MM_update" value="form8">
                    <input type="hidden" name="idplan" value="<?php echo $row_Recordset1['idplan']; ?>">
                </form>

  <form method="post" name="form19" action="<?php echo $editFormAction; ?>">
                    <input type="hidden" name="imagen7" value="<?php echo htmlentities($row_imageness['imagen7'], ENT_COMPAT, 'utf-8'); ?>" size="32">
  <table align="center" cellpadding="4" cellspacing="4">
    <tr valign="baseline">
      <td rowspan="2" align="right" nowrap><img src="imagenes/plan_normal/<?php echo $row_imageness['imagen7']; ?>" width="100" height="100"></td>
      <td><input type="button" name="button" onClick="javascript:cargarimagensiete();" class="btn btn-success" title="Si deseas saber como hacer un logo PNG con photoshop escribe en el link de ¿Dudas?" id="button" value="Cargar imagen"></td>
    </tr>
    <tr valign="baseline">
      <td><input type="submit"  class="btn btn-primary" value="Guardar Img"></td>
    </tr>
  </table>
  <input type="hidden" name="MM_update" value="form19">
  <input type="hidden" name="idimagenplan" value="<?php echo $row_imageness['idimagenplan']; ?>">
</form>
                </fieldset>
		  </div>
			<div class="span4">
            <label>5.4 Necesidades y Requerimientos <span class="label label-info"> <a target="_blank" class="linkeos" href="webroot/archivos/PDN tradicional.pdf" title="materiales e insumos requeridos para la creación  del producto, descripción de equipos y máquinas; capacidad instalada  requerida; mantenimiento necesario; Situación tecnológica de la empresa: necesidades técnicas y tecnológicas; Mano de obra operativa especializada requerida. Cuantificación del presupuesto requerido para el cubrimiento de las necesidades y requerimientos.">Ver mas</a></span></label>
				<fieldset class="well well-small">
                  <form method="post" name="form9" action="<?php echo $editFormAction; ?>">
                    <table align="center">
                      <tr valign="baseline">
                        <td nowrap align="right" valign="top"></td>
                        <td><textarea name="nece_reque" cols="50" style="width:95%" rows="5"><?php echo htmlentities($row_Recordset1['nece_reque'], ENT_COMPAT, 'utf-8'); ?></textarea></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">&nbsp;</td>
                        <td><input type="submit" class="btn btn-primary" value="Guardar"></td>
                      </tr>
                    </table>
                    <input type="hidden" name="MM_update" value="form9">
                    <input type="hidden" name="idplan" value="<?php echo $row_Recordset1['idplan']; ?>">
                  </form>
                  <form method="post" name="form13" action="<?php echo $editFormAction; ?>">
                    <input type="hidden" name="imagen1" value="<?php echo htmlentities($row_imageness['imagen1'], ENT_COMPAT, 'utf-8'); ?>" size="32">
  <table align="center" cellpadding="4" cellspacing="4">
    <tr valign="baseline">
      <td rowspan="2" align="right" nowrap><img src="imagenes/plan_normal/<?php echo $row_imageness['imagen1']; ?>" width="100" height="100"></td>
      <td><input type="button" name="button" onClick="javascript:cargarimagenuno();" class="btn btn-success" title="Si deseas saber como hacer un logo PNG con photoshop escribe en el link de ¿Dudas?" id="button" value="Cargar imagen"></td>
    </tr>
    <tr valign="baseline">
      <td><input type="submit"  class="btn btn-primary" value="Guardar Img"></td>
    </tr>
  </table>
  <input type="hidden" name="MM_update" value="form13">
  <input type="hidden" name="idimagenplan" value="<?php echo $row_imageness['idimagenplan']; ?>">
</form>
             
                </fieldset>
		  </div>
			<div class="span4">
            <label>5.5 Plan de Producción <span class="label label-info"> <a target="_blank" class="linkeos" href="webroot/archivos/PDN tradicional.pdf" title="se establece las cantidades de a producir por periodo, teniendo en cuenta las políticas de inventario de acuerdo a la naturaleza del negocio. Por Ej. Cajas de tomate por /mes, numero de almuerzo producidos y vendidos por mes, Etc.), presente el incremento de la producción en el tiempo por Ej. Primer mes = 0 cajas de 50 unidades,.......quinto  mes = 300 cajas de 50 unidades,....sexto mes= 400 cajas de 50 unidades,... mes n= 1000 cajas de 50 unidades.">Ver mas</a></span></label>
			  <fieldset class="well well-small">
                <form method="post" name="form10" action="<?php echo $editFormAction; ?>">
                    <table align="center">
                      <tr valign="baseline">
                        <td nowrap align="right" valign="top"></td>
                        <td><textarea name="plan_produ" cols="50" style="width:95%" rows="5"><?php echo htmlentities($row_Recordset1['plan_produ'], ENT_COMPAT, 'utf-8'); ?></textarea></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">&nbsp;</td>
                        <td><input type="submit" class="btn btn-primary" value="Guardar"></td>
                      </tr>
                    </table>
                    <input type="hidden" name="MM_update" value="form10">
                    <input type="hidden" name="idplan" value="<?php echo $row_Recordset1['idplan']; ?>">
                </form>
  <form method="post" name="form20" action="<?php echo $editFormAction; ?>">
                    <input type="hidden" name="imagen8" value="<?php echo htmlentities($row_imageness['imagen8'], ENT_COMPAT, 'utf-8'); ?>" size="32">
  <table align="center" cellpadding="4" cellspacing="4">
    <tr valign="baseline">
      <td rowspan="2" align="right" nowrap><img src="imagenes/plan_normal/<?php echo $row_imageness['imagen8']; ?>" width="100" height="100"></td>
      <td><input type="button" name="button" onClick="javascript:cargarimagenocho();" class="btn btn-success" title="Si deseas saber como hacer un logo PNG con photoshop escribe en el link de ¿Dudas?" id="button" value="Cargar imagen"></td>
    </tr>
    <tr valign="baseline">
      <td><input type="submit"  class="btn btn-primary" value="Guardar Img"></td>
    </tr>
  </table>
  <input type="hidden" name="MM_update" value="form20">
  <input type="hidden" name="idimagenplan" value="<?php echo $row_imageness['idimagenplan']; ?>">
</form>
                </fieldset>
		  </div>
            </fieldset>
            </div>
            
			<div id="datos_usuario" class="span5">
		<fieldset class="well">
			<legend>6. Riesgos críticos <span class="label label-info"> <a target="_blank" class="linkeos" href="webroot/archivos/PDN tradicional.pdf" title="Muchos empresarios prefieren omitir o evitar esta sección porque piensan que va en detrimento del negocio el presentar los riesgos potenciales que el plan presenta y que esto disminuirá las posibilidades de conseguir financiamiento. Pero al contrario el hecho de incluir un análisis completo de los riesgos del negocio, demuestra al futuro socio, que el empresario ha considerado todas las posibilidades y que incluso ha considerado soluciones a los posibles riesgos.">Ver mas</a></span></legend>
            <div class="span4">
            <label>Riesgos críticos</label>
				<fieldset class="well well-small">
                  <form method="post" name="form11" action="<?php echo $editFormAction; ?>">
                    <table align="center">
                      <tr valign="baseline">
                        <td nowrap align="right" valign="top"></td>
                        <td><textarea name="riesgos" cols="50" style="width:95%" rows="30"><?php echo htmlentities($row_Recordset1['riesgos'], ENT_COMPAT, 'utf-8'); ?></textarea></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">&nbsp;</td>
                        <td><input type="submit" class="btn btn-primary" value="Guardar"></td>
                      </tr>
                    </table>
                    <input type="hidden" name="MM_update" value="form11">
                    <input type="hidden" name="idplan" value="<?php echo $row_Recordset1['idplan']; ?>">
                  </form>
                </fieldset>
		  </div>
            </fieldset>
            </div>	
	
			
	<div class="clearfix"></div>
	<div class="centrado span12">

	</div>
    
    <pl><big class="highlighted message"><a href="continua_normal.php">Continuar con con el PLAN!</a> Para apoyarte con los costos porfavor lee los articulos  de la pestaña (ayuda) que se encuentra en la parte de arriba del sistema CreneSoft. </big></pl>
</div>
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
</body>
<!-- InstanceEnd --></html>
<?php
mysql_free_result($Recordset1);

mysql_free_result($imageness);
?>
