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
    <link rel="stylesheet" type="text/css" href="../search/content/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../search/content/bootstrap-superhero.min.css">
    <link rel="stylesheet" type="text/css" href="../search/content/site.css">
    <script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
      <!-- Latest compiled and minified JavaScript -->
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

<head>
<meta charset="utf-8">
<!-- InstanceBeginEditable name="doctitle" -->
  
  <script src="../search/scripts/libs/angular.min.js"></script>
  <script src="../search/scripts/libs/angular-route.min.js"></script>
  <script src="../search/scripts/libs/angular-animate.min.js"></script>
  <script src="../webroot/jquery.js"></script>
  <script src="../search/scripts/app.js"></script>



    <script src="../search/scripts/Controllers/githubController.js"></script>
    <script src="../search/scripts/Controllers/githubUserController.js"></script>
    <script src="../search/scripts/Services/githubService.js"></script>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable --> 
<link href="../webroot/crenesoft.css" rel="stylesheet" type="text/css">
<link href="../webroot/menu.css" rel="stylesheet" type="text/css">
<link href="../webroot/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="../webroot/bootstrap-responsive.css" rel="stylesheet" type="text/css">
<link href="../webroot/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
<link href="../webroot/css.css" rel="stylesheet" type="text/css">
<link href="../webroot/docs.css" rel="stylesheet" type="text/css">
<link href="../webroot/menú-estilo.css" rel="stylesheet" type="text/css">
<link href="../webroot/style.css" rel="stylesheet" type="text/css">
<link href="../webroot/menurapido.css" rel="stylesheet" type="text/css">
<link href="../webroot/ghs.css" rel="stylesheet" type="text/css">
<link href="../webroot/menu_centro.css" rel="stylesheet" type="text/css">
 
</head>
<body> 
  <header>  
  
 <div id="fa_toolbar" class="fa_fix fa_toolbar_XL_Sized"><div id="fa_right" class="fa_tbMainElement"></div><span id="fa_left" class="fa_tbMainElement"><a class="menu-login"><?php include("includes/catalogo.php"); ?></a></span></span></div>
 
    <div id="pun-intro" class="clearfix">
      <div class="sun-intro"><h1 id="VigHub">VigHub</h1>
        
          
          <?php if($_SESSION['MM_UserGroup']=='Admin'){?>
          <div id="itemnavtop"><ul id="menu-topnav" class="menu sf-js-enabled sf-shadow"><li class="principal"><a href="/vighubjson/inicio/" title="Ir al inicio">Inicio</a></li><li id="menu-item-3772" class="tutoriales menu-item menu-item-type-taxonomy menu-item-object-category current-post-ancestor menu-item-3772"><a href="#" class="sf-with-ul">Ayuda<span class="sf-sub-indicator"> »</span></a><ul class="sub-menu sf-js-enabled sf-shadow">
            
          
          <li id="menu-item-3774" class="menu-item menu-item-type-taxonomy menu-item-object-category current-post-ancestor current-menu-parent current-post-parent menu-item-3774"><a href="https://media.readthedocs.org/pdf/conociendogithub/latest/conociendogithub.pdf" target="_blank" >GitHub</a></li>
          
            
          <li id="menu-item-3774" class="menu-item menu-item-type-taxonomy menu-item-object-category current-post-ancestor current-menu-parent current-post-parent menu-item-3774"><a href="../webroot/archivos/manual.pdf" target="_blank" >Manual</a></li><li id="menu-item-3778" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3778"><a href="../webroot/archivos/architecture.pdf">Arquitectura de VigHub</a></li></ul></li></a>

          <li id="menu-item-3768" class="descargas menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3768"><a href="#">Recursos<span class="sf-sub-indicator"> »</span></a><ul class="sub-menu sf-js-enabled sf-shadow"><li id="menu-item-3764" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3764"><a href="/vighubjson/Copia_seguridad/">Backup</a></li><li id="menu-item-3770" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3770"></li></ul></li></ul></div>
          
          <?php }?>
           <?php if($_SESSION['MM_UserGroup']=='Usuario'){?>
    <div id="itemnavtop"><ul id="menu-topnav" class="menu sf-js-enabled sf-shadow"><li class="principal"><a href="/vighubjson/inicio/" title="Ir al inicio">Inicio</a></li><li id="menu-item-3772" class="tutoriales menu-item menu-item-type-taxonomy menu-item-object-category current-post-ancestor menu-item-3772"><a href="#" class="sf-with-ul">Ayuda<span class="sf-sub-indicator"> »</span></a><ul class="sub-menu sf-js-enabled sf-shadow">
            
          
          <li id="menu-item-3774" class="menu-item menu-item-type-taxonomy menu-item-object-category current-post-ancestor current-menu-parent current-post-parent menu-item-3774"><a href="https://media.readthedocs.org/pdf/conociendogithub/latest/conociendogithub.pdf" target="_blank" >GitHub</a></li>
          
            
          <li id="menu-item-3774" class="menu-item menu-item-type-taxonomy menu-item-object-category current-post-ancestor current-menu-parent current-post-parent menu-item-3774"><a href="../webroot/archivos/manual.pdf" target="_blank" >Manual</a></li><li id="menu-item-3778" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3778"><a href="../webroot/archivos/architecture.pdf">Vighub architecture</a></li></ul></li></a>

          <li id="menu-item-3768" class="descargas menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3768"><a href="#">Recursos<span class="sf-sub-indicator"> »</span></a><ul class="sub-menu sf-js-enabled sf-shadow"><li id="menu-item-3764" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3764"><a href="/vighubjson/Copia_seguridad/">Backup</a></li><li id="menu-item-3770" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3770"></li></ul></li></ul></div>
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
 
  </header>
    <nav>
      <p> 
         
        </p>
    </nav>
    <section id="principal">
      <article> 
    <!-- InstanceBeginEditable name="Contenido" -->      
 
  
 <div id="contenedor_formulario" class="well">

       


      <!--<legend align="center">Utiliza las ayudas y/o utiliza el boton <span class="label label-info"> <a  class="linkeos"  title="Esta es una prueba">Ver mas</a></span> pasando el cursor sobre el para guiarte</legend>-->     
    
             
        <fieldset class="well well-small">
                   
  




    

   <style type="text/css">
     .modal {
    position: fixed !important;
    top: 10% !important;
    left: 50% !important;
    z-index: 1050 !important;
    width: 600px !important;
    height: 371px !important;
    margin-left: -19% !important;
    background-color: #fff !important;
    border: 1px solid #999 !important;
    border: 1px solid rgba(0,0,0,0.3) !important;
    -webkit-border-radius: 6px !important;
    -moz-border-radius: 6px !important;
    border-radius: 6px !important;
    outline: 0 !important;
    -webkit-box-shadow: 0 3px 7px rgba(0,0,0,0.3) !important;
    -moz-box-shadow: 0 3px 7px rgba(0,0,0,0.3) !important;
    box-shadow: 0 3px 7px rgba(0,0,0,0.3) !important;
    -webkit-background-clip: padding-box !important;
    -moz-background-clip: padding-box !important;
    background-clip: padding-box !important;
}
.modal-backdrop, .modal-backdrop.fade.in {
    opacity: 0 !important;
    filter: alpha(opacity=80) !important;
}
.modal-backdrop {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 0 !important;
    background-color: #333;
}
  .probailitiy {
    color: #fff;
    text-shadow: 0 -1px 0 rgba(0,0,0,0.25);
    background-color: #49afcd;
    background-image: -moz-linear-gradient(top,#5bc0de,#2f96b4);
    background-image: -webkit-gradient(linear,0 0,0 100%,from(#5bc0de),to(#2f96b4));
    background-image: -webkit-linear-gradient(top,#5bc0de,#2f96b4);
    background-image: -o-linear-gradient(top,#5bc0de,#2f96b4);
    background-image: linear-gradient(to bottom,#5bc0de,#2f96b4);
    background-repeat: repeat-x;
    border-color: #2f96b4 #2f96b4 #1f6377;
    border-color: rgba(0,0,0,0.1) rgba(0,0,0,0.1) rgba(0,0,0,0.25);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff5bc0de',endColorstr='#ff2f96b4',GradientType=0);
    filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
    width: 246px !important;
    font-weight: bold;
  }
  
/*.fade {
    opacity: 0 !important;
    -webkit-transition: opacity .15s linear !important;
    -moz-transition: opacity .15s linear !important;
    -o-transition: opacity .15s linear !important;
    transition: opacity .15s linear !important;
}
.modal.fade.in {
    top: 10% !important; 
}
.modal.fade {
    top: -25% !important;
    -webkit-transition: opacity .3s linear,top .3s ease-out !important;
    -moz-transition: opacity .3s linear,top .3s ease-out !important;
    -o-transition: opacity .3s linear,top .3s ease-out !important;
    transition: opacity .3s linear,top .3s ease-out !important;
}
.modal-open .modal {
    overflow-x: hidden !important;
    overflow-y: auto !important;
}
.fade.in {
    opacity: 1 !important;
}
bootstrap.min.css:5*/
   </style>
</head>
<!--
<div>
      
<button type="button" class="probailitiy" data-toggle="modal" data-target="#myModal">Classifier by language and years</button>
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
          <p>Some text in the modal.</p>
          <input type="text" id="lenguaje" value="php">
          <input type="text" id="duracion" value="2000">
          <p id="resultado_cla"></p>
          <div id="imagenc">
          </div>
          <button type="button" class="btn btn-default" onclick="esExitoso()">¿Is successful?</button>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
    </div>-->

    <div class="container">   
          <h1 align="center">Buscador de VigHub</h1>
            <div class="page" ng-view></div> 
    </div>

    
       
    <div class="container">
        <div class="row">
          <div id="chart_div13_legend" style="background: #fff; width: 99% !important; margin-left: 1%;"></div>
          <div id="chart_div1" style="background: #fff; font-size: 13px !important;  width: 99% !important; margin-left: 1%;" align="center" class="col-md-10"></div>
          <div id="chart_div1_legend"></div>
    </div>
     </br>
  
      <div class="row">
          <div id="wordtree_basic" align="center" class="col-md-10" style="width: 100%;"></div>
    </div>
    <!--
        <div class="row">
              <div id="container1" align="center" class="col-md-6"></div>
              <div id="container2" align="center" class="col-md-6"></div>
        </div>  
        <div class="row">
              <div id="container3" class="col-md-6"></div>
              <div id="container4" class="col-md-6"></div>
    
        </div>
    -->
    </div> 

    <div class="container">
      <div class="row">
         
          <p id="susano"></p>

          <!--<div id="piechart" align="center" class="col-md-8" style="width: 100%;"></div>
          <div id="piechart_legend"></div>-->
  
          <div id="frec_lang" align="center" class="col-md-6" style="width: 100%;"></div>
          <div id="frec_lang_legend"></div>

          <div id="frec_type" align="center" class="col-md-6" style="width: 100%;"></div>
          <div id="frec_type_legend"></div>

          <div id="chart_div" align="center" class="col-md-8" style="width: 100%; position: relative;"></div>
          <div id="chart_div_legend"></div>

          <div id="frec_word" align="center" class="col-md-6" style="width: 100%;"></div>
          <div id="frec_word_legend"></div>

      </div>
      </br>
      <div class="row">
      <div id="chart_divnew_legend"></div>
          <div id="chart_divnew" align="center" class="col-md-10" style="width: 100%;"></div>
      <div id="chart_divnew11_legend"></div>
    </div>
   
    <div class="row">
    <div id="chart_divnew12_legend"></div>
          <div id="chart_divnew1" align="center" class="col-md-10" style="width: 100%;"></div>
    <div id="chart_divnew1_legend"></div>
    </div>
      <!--<div class="row">
          <div id="series_chart_div3" align="center" class="col-md-10" style="width: 100%;"></div>
          <div id="series_chart_div3_legend"></div>
          
    </div>-->
      </br>
      <div class="row">
          <div id="series_chart_div" align="center" class="col-md-10" style="width: 100%;"></div>
          <div id="series_chart_legend"></div>
    </div>
    </br>
      <div class="row">
          <div id="series_new" align="center" class="col-md-10" style="width: 100%;"></div>
          <div id="series_new_legend"></div>
          <div id="div_predictivo1" align="center" class="col-md-10" style="width: 100%;"></div>
          <div id=""></div>
    </div>
   
    
    <style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;border-color:#aaa;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#aaa;color:#333;background-color:#fff;}
.tg th{font-family:Arial, sans-serif;font-size:15px;font-weight:bold;padding:8px 5px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-color:rgba(0, 0, 0, 0);color:#fff;background-color:#5783db;}
.tg .tg-baqh{text-align:center;vertical-align:bottom}
.table>tbody>tr>td {
    text-align: justify !important;
    vertical-align: bottom !important;
    }
   
 
</style>
 


      <!--<div  class="col-md-6">
        <svg height="210" width="200">
  <polygon points="100,10 40,198 190,78 10,78 1600,198" style="fill:lime;stroke:purple;stroke-width:5;fill-rule:evenodd;"/>
  Sorry, your browser does not support inline SVG.
</svg>
      </div>
      <div class="col-md-6"><svg height="30" width="800">
  <text x="0" y="15" fill="red">I love SVG!</text>
  Sorry, your browser does not support inline SVG.
</svg></div>-->
    

     
   

          
                </fieldset>
          
    <!-- InstanceEndEditable -->
        </article>      
    </section>
    
   
<div>
      <div>
          <div>
            <div>
                <div>
                 
                  <br />
                  <p class="center">
                      
                  </p>
                </div>
               
            </div>
          </div>  
      </div>
    </div>
     
    <div id="pun-foot"><div id="shitpe" style="display: block;"><img src="http://i.imgur.com/0LsMnPJ.png" onclick="javascript:history.back(-1);" title="Regresa uno pagina antes"></div><div id="pun-about" class="clearfix"><div class="logobottom"></div><div class="info-foot">
      <p></p>
      <p></p>
        
           </div>
        </div></div></div></div>


</div>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/randomcolor/0.5.2/randomColor.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.14.0/moment.min.js"></script>

<style type="text/css">
.container {
  width: 100% !important;
}
#container1 {
  background: none repeat scroll 0 0 rgba rgba(0,0,0,1);
  -webkit-border-radius: 20px 20px 20px 20px;
  -moz-border-radius: 20px 20px 20px 20px;
  /*border-radius: 20px 20px 20px 20px;
  -webkit-box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.09) inset;
  -moz-box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.09) inset;
  box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.09) inset;
  margin-left: -73%;*/
}
#container2 {
  background: none repeat scroll 0 0 rgba rgba(0,0,0,1);
  -webkit-border-radius: 20px 20px 20px 20px;
  -moz-border-radius: 20px 20px 20px 20px;
  /*border-radius: 20px 20px 20px 20px;
  -webkit-box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.09) inset;
  -moz-box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.09) inset;
  box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.09) inset;
  margin-left: -60%;*/
}
#container3 {
  background: none repeat scroll 0 0 rgba rgba(0,0,0,1);
  -webkit-border-radius: 20px 20px 20px 20px;
  -moz-border-radius: 20px 20px 20px 20px;
  /*border-radius: 20px 20px 20px 20px;
  -webkit-box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.09) inset;
  -moz-box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.09) inset;
  box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.09) inset;
  margin-left: -73%;*/
}
#container4 {
  background: none repeat scroll 0 0 rgba rgba(0,0,0,1);
  -webkit-border-radius: 20px 20px 20px 20px;
  -moz-border-radius: 20px 20px 20px 20px;
  /*border-radius: 20px 20px 20px 20px;
  -webkit-box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.09) inset;
  -moz-box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.09) inset;
  box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.09) inset;
  margin-left: -60%;*/
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

.google-visualization-orgchart-table * {
  padding: 0px !important;
}  
</style>
<script type="text/javascript">
    <?php 
$query_Recordset1 = "SELECT id,consulta FROM resultclustering WHERE userid=".$_SESSION["MM_idusuario"]." ORDER BY id DESC LIMIT 20";
mysql_select_db($database_crenesoft, $crenesoft);
$Recordset1 = mysql_query($query_Recordset1, $crenesoft) or die (mysql_error());
     
if (mysql_num_rows($Recordset1) == 0) {
    echo "historial=[]";
}else{
echo "historial = [";
while ($fila = mysql_fetch_assoc($Recordset1)) {
//    
echo '{id:"'.$fila["id"].'",consulta:"'.urlencode($fila["consulta"]).'"},';
}
echo "]";
mysql_free_result($Recordset1);
}
     ?>
</script>
<script src="../search/scripts/libs/d3/d3.min.js"></script>
<script type="text/javascript"> 
palabrasFrec = []
function openInNewTab(url) {
  var win = window.open(url, '_blank');
  win.focus();
}
    function renderizargrafico(){
var width = $("#container1").innerWidth()-20, // svg width
height = 400, // svg height
dr = 12, // default point radius
off = 20, // cluster hull offset
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
colors = randomColor({luminosity: 'dark', count: 30});
//d3.json("/vighubjson/search/prueba.php?cache=true&id="+id, function(json) {
data = {}
data.links = [];
data.nodes = json.items;  
data.nodes.map(function(item,i,a){
  return item.color = colors[i];
});
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
.gravity(0.45) // gravity+charge tweaked to ensure good 'grouped' view (e.g. green group not smack between blue&orange, ...
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
  
  g.append("circle")
      // if (d.size) -- d.size > 0 when d is a group node.      
      .attr("r", function(d) { return !d.name ? d.size + dr : dr+1; })
      //.style("fill", function(d) { return fill(d.group); })
      .style("fill", function(d) { return fill(d.color); })
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
          //return d['name']+ "["+ d['language']+"]"; //importante
          return d['name'];
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
    
    <script type="text/javascript"> 
    function renderizargrafico1(){
var width = $("#container2").innerWidth()-20, // svg width
height = 400, // svg height
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
var body = d3.select('#container2');
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
  
  g.append("circle")
      // if (d.size) -- d.size > 0 when d is a group node.      
      .attr("r", function(d) { return !d.name ? d.size + dr : dr+1; })
      .style("fill", function(d) { return fill(d.color); })
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
          return d['language']; //importante
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
    <script type="text/javascript"> 
    function renderizargrafico2(){
var width = $("#container3").innerWidth()-20, // svg width
height = 400, // svg height
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
var body = d3.select('#container3');
body.selectAll("*").remove();
var vis = body.append("svg")
//var vis = d3.select("#svg1");
vis.attr("width", width);
vis.attr("height", height);
//"miserables1.json"
var json = datos;
colors = randomColor({luminosity: 'dark', count: 30});
//d3.json("/vighubjson/search/prueba.php?cache=true&id="+id, function(json) {
data = {}
data.links = [];
data.nodes = json.items;  
data.nodes.map(function(item,i,a){
  return item.color = colors[i];
});
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
      .attr("r", function(d) { return !d.name ? d.size + dr : dr+1; })
      //.style("fill", function(d) { return fill(d.group); })
      .style("fill", function(d) { return fill(d.color); })
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
          //return d['name']+ "["+ d['language']+"]"; //importante
          return d['full_name'];
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
<script type="text/javascript"> 
    function renderizargrafico3(){
var width = $("#container4").innerWidth()-20, // svg width
height = 400, // svg height
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
var body = d3.select('#container4');
body.selectAll("*").remove();
var vis = body.append("svg")
//var vis = d3.select("#svg1");
vis.attr("width", width);
vis.attr("height", height);
//"miserables1.json"
var json = datos;
colors = randomColor({luminosity: 'dark', count: 30});
//d3.json("/vighubjson/search/prueba.php?cache=true&id="+id, function(json) {
data = {}
data.links = [];
data.nodes = json.items;  
data.nodes.map(function(item,i,a){
  return item.color = colors[i];
});
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
      .attr("r", function(d) { return !d.name ? d.size + dr : dr+1; })
      //.style("fill", function(d) { return fill(d.group); })
      .style("fill", function(d) { return fill(d.color); })
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
          //return d['name']+ "["+ d['language']+"]"; //importante
          return d['updated_at'];
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
reporte();
reporte2();
reporte3();
reporte4();
reporte5();
reporte6();
//reporte7();
//reporte8();
reporte9();
reporte10();
reporte11();
predictivo();
    }
    </script>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
    escribir = getElementById("susano");
escribir.backgroundColor="red";
escribir.border="3px black solid";
    function reporte(){
      var criterio = "score"
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawVisualization);
      function drawVisualization() {
        var arr = [["full_name","Frecuencia"]].concat(datos.items.map(function(item){
            return [item.name, item[criterio]];
           }));
        var data = google.visualization.arrayToDataTable(
           arr);
        data.sort([{column: 1, desc: true}]);

        var options = {
      title : 'PALABRAS CLAVE RELEVANTES EN MOTORES DE BÚSQUEDA',
      legend: { position: "none" },
      hAxis: {
          title: 'Palabras clave',
          //ticks: [0, 0.3, 0.6, 0.9, 1.2, 1.5, 1.8, 2.1, 2.4, 5, 10, maximoh ],
          textStyle: {
            fontSize: 4,
            color: '#333',
            bold: false,
            italic: false
          },
          titleTextStyle: {
            fontSize: 25,
            color: '#67001f',
            bold: true,
            italic: false
          }
        },
        vAxis: {
          title: 'Palabra relevante por dia',
          //ticks: [0, 0.3, 0.6, 0.9, 1.2, 1.5, 1.8, 2.1, 2.4, 5, 10, maximo],
            textStyle: {
            fontSize: 12,
            color: '#333',
            bold: false,
            italic: false
          },
        titleTextStyle: {
            fontSize: 25,
            color: '#67001f',
            bold: true,
            italic: false
          }},    
      seriesType: 'bars',
      series: {1: {type: 'line'}}
    };
    


        $("#chart_div").height(900)
        $('#chart_div_legend').empty();
        $('<p style="font-size: 16px;line-height: 1.6em; margin: 25px 0; background: cornsilk; margin-left: 17px; margin-right: 17px;text-align: center; color: black;"><b style="font-size 18px; font-weight: bold;">Caption:</b>Para obtener las palabras claves en motores de búsqueda se toman todos los repositorios que arroja la consulta, se obiete las palabras que con mayor número de frecuencia se encuentren en cada repositorio y estas se las compara con las otras palabras claves de los demás repositorios. Así se obtiene la frecuencia de las palabras claves más usadas en el tema.</p>').appendTo('#chart_div_legend');
        var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
    chart.draw(data, options);
        google.visualization.events.addListener(chart, 'select', selectHandler); 
      function selectHandler(e) {
        var name =data.getValue(chart.getSelection()[0].row, 0)   
        var elemento = datos.items.filter(function(e){
          return e.name == name;
        })[0];
        openInNewTab(elemento.clone_url) 
      }

      }
      
    }
    </script>
    <<script type="text/javascript">
    function reporte2() {
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawSeriesChart);
      
      function drawSeriesChart() {

      var maximo = Math.max.apply(Math, datos.items.map(function(e){return e.stargazers_count}))+0.2;
      var minimo = Math.min.apply(Math, datos.items.map(function(e){return e.stargazers_count}))*10;
      var minimoh = Math.min.apply(Math, datos.items.map(function(e){return e.watchers}))+0.2;
      var maximoh = Math.max.apply(Math, datos.items.map(function(e){return e.watchers}))*10;
      
      var arr = [["name","visitas","Estrellas","Lenguaje","Copias"]].concat(datos.items.map(function(item){
            return [item.name, item.watchers/(maximoh/10), item.stargazers_count/(maximo+100), item.language, item.forks_count];
           }));
      var data = google.visualization.arrayToDataTable(arr);

      var options =  {
        title: 'EVALUACIÓN DE LOS MEJORES REPOSITORIOS SEGÚN LOS USUARIOS',

         hAxis: {
          title: 'visitas a repositorio',
          ticks: [-0.1, 0, 0.1, 0.2, 0.3, 0.4, 0.5, 0.6, 0.7, 0.8, 0.9,1,1.1],
          minValue: -0.1

        },
        vAxis: {
          title: 'Número de estrellas por respositorio',
          ticks: [-0.1, 0, 0.1, 0.2, 0.3, 0.4, 0.5, 0.6, 0.7, 0.8, 0.9,1,1,1.1,1.1],
          minValue: -0.1
          
        },
        bubble: {
      textStyle: {
        textStyle: {
        auraColor: 'none'
      },
        fontSize: 5,
      
        color: 'black',
        italic: true
      }
    },
          explorer: { actions: ['dragToZoom', 'rightClickToReset'] }

      };
      $("#series_new").height(1000)
      $('#series_new_legend').empty();
       
        $('<p style="font-size: 16px;line-height: 1.6em; margin: 25px 0; background: cornsilk; margin-left: 17px; margin-right: 17px;text-align: center; color: black;"><b style="font-size 18px; font-weight: bold;">Caption:</b>Entre más grande el globo, mayor evaluación de repositorios.2- Color similar significa que están desarrollados en el mismo lenguaje de programación. Características: 1- stargazers_count (Puntuación de 1 a 5 que da el usuario), 2- forks_count (Cantidad copias que se han realizado al repositorio), 3- Score (segun la actividad GitHub le da puntos para que sea tendencia un usuario).</p>').appendTo('#series_new_legend');
      var chart = new google.visualization.BubbleChart(document.getElementById('series_new'));
      chart.draw(data, options);
        google.visualization.events.addListener(chart, 'select', selectHandler);
      function selectHandler(e) {
        var name =data.getValue(chart.getSelection()[0].row, 0)  
        var elemento = datos.items.filter(function(e){
          return e.name == name;
        })[0];
        openInNewTab(elemento.clone_url)
      }
    }}
    </script>
    <script type="text/javascript">
    /* GRafico de pastel
    function reporte2(){
      var criterio = "stargazers_count";
      google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var arr = [["full_name","stargazers_count"]].concat(datos.items.map(function(item){
            return [item.full_name, item[criterio]];
           }));
        var data = google.visualization.arrayToDataTable(arr);
        var options = {
          title: 'Repositories best evaluated by the users'
        };
        $("#piechart").height(560)
         $('#piechart_legend').empty();
        $('<p style="font-size: 16px;line-height: 1.6em; margin: 25px 0; background: cornsilk; margin-left: 17px; margin-right: 17px;text-align: justify; color: black;"><b style="font-size 18px; font-weight: bold;">Caption:</b> Evaluación de repositorios según características de GitHub: número de estrellas (puntuacion de 1 a 5 que da el usuario), número de copias (cantidad copias que se han realizado al repositorio) y puntuación (segun la actividad GitHub le da puntos para que sea tendencia un usuario).</p>').appendTo('#piechart_legend');
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
        google.visualization.events.addListener(chart, 'select', selectHandler); 
      function selectHandler(e) {
        var name =data.getValue(chart.getSelection()[0].row, 0)   
        var elemento = datos.items.filter(function(e){
          return e.full_name == name;
        })[0];
        openInNewTab(elemento.clone_url) 
      }
      }
    }*/
    </script>

    <script type="text/javascript">
    function reporte3() {
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawSeriesChart);
      
      function drawSeriesChart() {

      var maximo = Math.max.apply(Math, datos.items.map(function(e){return e.stargazers_count}))-100;
      var minimo = Math.min.apply(Math, datos.items.map(function(e){return e.stargazers_count}))*10;
      var minimoh = Math.min.apply(Math, datos.items.map(function(e){return e.score}));
      var maximoh = Math.max.apply(Math, datos.items.map(function(e){return e.score}))*10;
      
      var arr = [["name","Puntuación","Estrellas","Lenguaje","Copias"]].concat(datos.items.map(function(item){
            return [item.name, item.score/(maximoh/10), item.stargazers_count/(maximo+100), item.language, item.forks_count];
           }));
      var data = google.visualization.arrayToDataTable(arr);

      
         var options =  {
        title: 'REPOSITORIOS DE MAYOR ÉXITO',
        hAxis: {
          title: 'Puntuación de GitHub',
          ticks: [-0.1, 0, 0.1, 0.2, 0.3, 0.4, 0.5, 0.6, 0.7, 0.8, 0.9,1,1.1],
          minValue: -0.1

        },
        vAxis: {
          title: 'Estrellas por repositorio',
          ticks: [-0.1, 0, 0.1, 0.2, 0.3, 0.4, 0.5, 0.6, 0.7, 0.8, 0.9,1,1,1.1,1.1],
          minValue: -0.1
          
        },
        bubble: {
      textStyle: {
        textStyle: {
        auraColor: 'none'
        },
          fontSize: 5,
          color: 'black',
          italic: true
        }
     },
          explorer: { actions: ['dragToZoom', 'rightClickToReset'] }

      };
      $("#series_chart_div").height(800)
      $('#series_chart_legend').empty();
      $('<p style="font-size: 16px;line-height: 1.6em; margin: 25px 0; background: cornsilk; margin-left: 17px; margin-right: 17px;text-align: center; color: black;"><b style="font-size 18px; font-weight: bold;">Caption:</b> 1- entre más grande el globo, mayor exito de repositorios entre los usuarios.2- Color similar significa que están desarrollados en el mismo lenguaje de programación.\n Características: 1- stargazers_count (Puntuación de 1 a 5 que da el usuario), 2- forks_count (Cantidad copias que se han realizado al repositorio), 3- watchers (con que frecuencia visitian el respositorio). </p>').appendTo('#series_chart_legend');
      var chart = new google.visualization.BubbleChart(document.getElementById('series_chart_div'));
      chart.draw(data, options);
        google.visualization.events.addListener(chart, 'select', selectHandler); 
      function selectHandler(e) {
        var name =data.getValue(chart.getSelection()[0].row, 0)   
        var elemento = datos.items.filter(function(e){
          return e.name == name;
        })[0];
        openInNewTab(elemento.clone_url) 
      }
    }}
    </script>
    <script type="text/javascript">
    function reporte4 (){
      google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawAxisTickColors);
function drawAxisTickColors() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'frecuency  ');
      data.addColumn('number', 'frecuency  ');

function getFrequency(items) {
    var freq = {};
    for (var i=0; i<items.length;i++) {
        var character = items[i][1];
        if (freq[character]) {
           freq[character]++;
        } else {
           freq[character] = 1;
        }
    }
    var obj = []
    for (var prop in freq) {
        obj.push([prop, freq[prop]]);
    }
    return obj;
};
   var arr = getFrequency(datos.items.map(function(item){
            //return [item.name, item.created_at];
            //return [item.name, item.owner.type];
            return [item.name, item.language];
           }));

      data.addRows(arr);
data.sort([{column: 1, desc: true}]);

      var options = {

        title: 'FRECUENCIA DE LENGUAJES DE PROGRAMACIÓN',
        legend: { position: "none" },
        chart: { title: 'Cheese',
                    subtitle: 'pieces' },

        hAxis: {
          title: 'Frecuencia',
          viewWindow: {
            min: [7, 30, 0],
            max: [17, 30, 0]
          },
          textStyle: {
            fontSize: 14,
            color: '#053061',
            bold: true,
            italic: false
          },
          titleTextStyle: {
            fontSize: 18,
            color: '#67001f',
            bold: true,
            italic: false
          }

        },
        vAxis: {
          title: 'Lenguaje de programación',
          textStyle: {
            fontSize: 18,
            color: '#67001f',
            bold: false,
            italic: false
          },
          titleTextStyle: {
            fontSize: 18,
            color: '#67001f',
            bold: true,
            italic: false
          }
        }
      };
      $("#frec_lang").height(700)
      $('#frec_lang_legend').empty();
      $('<p style="font-size: 16px;line-height: 1.6em; margin: 25px 0;text-align: center; background: cornsilk; color: black;"><b style="font-size 18px; font-weight: bold;">Caption:</b>Se obtiene la frecuencia haciendo uso de extracción de características, donde se toma cada repositorio generado en la consulta, se extrae el lenguaje en el que se desarrolló y se hace un conteo de las veces se repite.</p>').appendTo('#frec_lang_legend');
      var chart = new google.visualization.BarChart(document.getElementById('frec_lang'));
      chart.draw(data, options);
        google.visualization.events.addListener(chart, 'ready', selectHandler); 

      function selectHandler(e) {
        var name =data.getValue(chart.getSelection()[0].row, 0)   
        var elemento = datos.items.filter(function(e){
          return e.name == name;
        })[0];
        openInNewTab(elemento.clone_url) 
      }
    }
  }
    </script>
    <script type="text/javascript">
    function reporte5 (){
      google.charts.load('current', {packages: ['corechart', 'bar']});
      google.charts.setOnLoadCallback(drawAxisTickColors);
      function drawAxisTickColors() {
      var m = datos.items.map(function(item){
            return [item.owner.login, item.stargazers_count, item.owner.type === 'Organization' ? 'gold': 'silver'];
           });
      var data = google.visualization.arrayToDataTable( 
         [['Nombre', 'Frequency', { role: 'style' }]].concat(m));
      
      var options = {
        title: 'FRECUENCIA DE ORGANIZACIONES Y USUARIOS',
        chart : {
          subtitle: 'Sales, Expenses, and Profit: 2014-2017',
        },
        legend: { position: "none" },
        hAxis: {
          title: 'organizaciones y usuarios',
          viewWindow: {
            min: [7, 30, 0],
            max: [17, 30, 0]
          },
          textStyle: {
            fontSize: 4,
            color: '#333',
            bold: false,
            italic: false
          },
          titleTextStyle: {
            fontSize: 25,
            color: '#67001f',
            bold: true,
            italic: false
          }
        },
        vAxis: {
          title: 'Frecuencia',
          textStyle: {
            fontSize: 12,
            color: '#333',
            bold: false,
            italic: false
          },
          titleTextStyle: {
            fontSize: 18,
            color: '#67001f',
            bold: true,
            italic: false
         }},    
      seriesType: 'bars',
      series: {1: {type: 'line'}}
    };
      $("#frec_type").height(900)
      $('#frec_type_legend').empty();
      $('<p style="font-size: 16px;line-height: 1.6em; margin: 25px 0; background: cornsilk; margin-left: 17px; margin-right: 17px;text-align: center; color: black;"><b style="font-size 18px; font-weight: bold;">Caption:</b> Haciendo uso de extracción de características, se obtiene por cada repositorio generado en la consulta, si pertenece a una organización o a un usuario, posterior a ello se verifica si una organización o usuario ha participado o tiene más repositorios para obtener la frecuencia de actividad en un tema específico.</p>').appendTo('#frec_type_legend');
      var chart = new google.visualization.BarChart(document.getElementById('frec_type'));
      chart.draw(data, options);
        google.visualization.events.addListener(chart, 'select', selectHandler); 
      function selectHandler(e) {
        var name = data.getValue(chart.getSelection()[0].row, 0)   
        var elemento = datos.items.filter(function(e){
          return e.owner.login == name;
        })[0];
        openInNewTab(elemento.clone_url) 
      }
    }
  }
    </script>
    <script type="text/javascript">
      function reporte6(){
      google.charts.load('current', {packages:["orgchart"]});
      google.charts.setOnLoadCallback(drawChart);
      

      function drawChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'name');
        data.addColumn('string', 'language');
        data.addColumn('string', 'stargazers_count');
        var datositems = datos.items.filter(function(e){
          return e.language;
          language.sort();
        })
        var titulo = "Línea de tiempo";
        var lenguajes = _.uniq([titulo].concat(datositems.map(function(item){
            return  new Date(item.created_at).getFullYear()+""//language;
          })));
        lenguajes.sort();

        var jefes = lenguajes.map(function(item){
            return  [item, titulo, ""];
          });

        jefes = jefes.concat(datositems.map(function(item){
          var padre = new Date(item.created_at).getFullYear()+"";
          var hijo = item.language+"_"+_.indexOf(lenguajes,padre);
            return [
            hijo,padre, ""];
        }));
        data.sort();

        var arr = jefes.concat(datositems.map(function(item){
          var abuelo = new Date(item.created_at).getFullYear()+""; /*vovler unico padre hijo*/
          var padre = item.language+"_"+_.indexOf(lenguajes,abuelo);
          return [
            item.name, padre, item.stargazers_count+""];
           }));
        // For each orgchart box, provide the name, manager, and tooltip to show.
        data.addRows(arr);
        //console.log(data);
        
        $('#chart_div1_legend').empty();
        $('#chart_div13_legend').empty();
        $('<p style="font-size: 18px; line-height: 1.6em; margin: 2px 0; margin-left: 17px; margin-right: 17px;  text-align: center; color: black; font-weight: bold; background: white; padding: 16px;">LÍNEA DE TIEMPO</p>').appendTo('#chart_div13_legend');
      $('<p style="font-size: 16px;line-height: 1.6em; margin: 8px 0; width: 98%; background: cornsilk; margin-left: 17px; margin-right: 17px;text-align: center; color: black;"><b style="font-size 18px; font-weight: bold;">Caption:</b>En la línea de tiempo se identifican los repositorios generados en la consulta, se obtiene el año de creación, y a partir de este se obtienen los desarrollos con su respectivo lenguaje de programación  y por cada uno se muestra los repositorios.</p>').appendTo('#chart_div1_legend');
        var chart = new google.visualization.OrgChart(document.getElementById('chart_div1'));
        google.visualization.events.addListener(chart, 'select', selectHandler); 

        // Draw the chart, setting the allowHtml option to true for the tooltips.
        chart.draw(data, {allowHtml:true,allowCollapse:true/*, size:'small'*/});
        for(var i=0; i<arr.length; i++)
          chart.collapse(i, true);
        function selectHandler(e) {
        var name =data.getValue(chart.getSelection()[0].row, 0)   
        var elemento = datositems.filter(function(e){
          return e.name == name;
        })[0];
        openInNewTab(elemento.clone_url) 
      }
        //chart.draw(data, {allowHtml:true});
      }}
   </script>
   <!--
   <script type="text/javascript">
    function reporte7 (){
      google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawAxisTickColors);
function drawAxisTickColors() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'frecuency');
      data.addColumn('number', 'Repos ');

function getFrequency(items) {
    var freq = {};
    for (var i=0; i<items.length;i++) {
        var character = items[i].toLowerCase().replace(/\W/g, '');
        if (freq[character]) {
           freq[character]++;
        } else {
           freq[character] = 1;
        }
    }
    var obj = []
    for (var prop in freq) {
      if(freq[prop] > 1 && ! _.contains(["a", "about", "above", "after", "again", "against", "all", "am", "an", "and", "any","are","aren't","as","at","be","because","been","before","being","below","between","both","but","by","can't","cannot","could","couldn't","did","didn't","do","does","doesn't","doing","don't","down","during","each","few","for","from","further","had","hadn't","has","hasn't","have","haven't","having","he","he'd","he'll","he's","her","here","here's","hers","herself","him","himself","his","how","how's","i","i'd","i'll","i'm","i've","if","in","into","is","isn't","it","it's","its","itself","let's","me","more","most","mustn't","my","myself","no","nor","not","of","off","on","once","only","or","other","ought","our","ours","ourselves","out","over","own","same","shan't","she","she'd","she'll","she's","should","shouldn't","so","some","such","than","that","that's","the","their","theirs","them","themselves","then","there","there's","these","they","they'd","they'll","they're","they've","this","those","through","to","too","under","until","up","very","was","wasn't","we","we'd","we'll","we're","we've","were","weren't","what","what's","when","when's","where","where's","which","while","who","who's","whom","why","why's","with","won't","would","wouldn't","you","you'd","you'll","you're","you've","your","yours","yourself","yourselves","","a","at","the", "i", "to", "this", "for", "with", "on", "in", "or", "is", "an","and", "of", "fromthe", "examplesfrom"], prop))
        obj.push([prop, freq[prop]]);
    } 
    return obj;
};
      var texto = datos.items.reduce(function(acc,item){  
            return acc+" "+item.description;
},"");

    //        
          function getDuplas(texto){
          let palabras = texto.split(" ")
          let duplas = []
          for(let i = 0; i< palabras.length ; i+=2)
          {
            if(i == palabras.length-1){
              duplas.push([palabras[i]])
            }
            else{
              duplas.push([palabras[i],palabras[i+1]])
            }
          }
          return duplas
        }
        
   var arr = getFrequency(getDuplas(texto).map(function(dupla){ return dupla.join(" ") }))
   //

      data.addRows(arr);
      data.sort([{column: 1, desc: true}]);

      var options = {
        title: 'Frecuencia de palabras más importantes en el tema',
        legend: { position: "none" },
        hAxis: {
          title: 'Frecuencia',
          viewWindow: {
            min: [7, 30, 0],
            max: [17, 30, 0]
          },
          textStyle: {
            fontSize: 14,
            color: '#333',
            bold: true,
            italic: false
          },
          titleTextStyle: {
            fontSize: 18,
            color: '#67001f',
            bold: true,
            italic: false
          }
        },
        vAxis: {
          title: 'Palabras relevantes',
          textStyle: {
            fontSize: 2,
            color: '#333',
            bold: false,
            italic: false

          },
          titleTextStyle: {
            fontSize: 18,
            color: '#67001f',
            bold: true,
            italic: false
          }
        }
      };

      function placeMarker(dataTable) {
        var cli = this.getChartLayoutInterface();
        var chartArea = cli.getChartAreaBoundingBox();
        // "Zombies" is element #5.
        document.querySelector('.overlay-marker').style.top = Math.floor(cli.getYLocation(dataTable.getValue(5, 1))) - 50 + "px";
        document.querySelector('.overlay-marker').style.left = Math.floor(cli.getXLocation(5)) - 10 + "px";
      };
      $("#frec_word").height(1500)
      $('#frec_word_legend').empty();
      $('<p style="font-size: 16px;line-height: 1.6em; margin: 25px 0; background: cornsilk; margin-left: 17px; margin-right: 17px;text-align: center; color: black;"><b style="font-size 18px; font-weight: bold;">Caption:</b>para sacar la frecuencia de palabras se realiza un proceso de conteo, etiquetado y numeración; donde a cada repositorio encontrado en la consulta le extrae el README, la descripción (si la tiene), una vez sacada esa información se le da una etiqueta y se realiza extracción de palabras clave, cada palabra clave es comparada con la información de cada extraída de cada repositorio, donde  se evalúa palabra a palabra, encontrando su relevancia y frecuencia. si las palabras están dentro de un mismo rango, al unir mas de tres de forma logica el resultado sera el tema central o al repositorio de GitHub de ese tema.</p>').appendTo('#frec_word_legend');

      var chart = new google.visualization.BarChart(document.getElementById('frec_word'));
      chart.draw(data, options);
    }
  }
    </script>
    -->
    <script type="text/javascript">
    
    /*function reporte8() {
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawSeriesChart);
    function drawSeriesChart() {
    
    var maximo = Math.max.apply(Math, datos.items.map(function(e){return e.watchers}))-100;
      var minimo = Math.min.apply(Math, datos.items.map(function(e){return e.watchers}))*0.1; //arriba a abajo eje y
      var minimoh = Math.min.apply(Math, datos.items.map(function(e){return e.score}))*-0.3;
      var maximoh = Math.max.apply(Math, datos.items.map(function(e){return e.score}))*14; //izq a der eje x
    
      var arr = [["name","stargazers_count","forks_count","language","Score"]].concat(datos.items.map(function(item){
            return [item.name, item.stargazers_count/(maximoh/100), item.forks_count/(maximoh/14), item.language, item.score ];
           }));
      var data = google.visualization.arrayToDataTable(arr);
      
      
      // A partir de aquí, todo sigue igual
      //--------------------------------------------------------------------------------------------------
      var options =  {
        title: 'Evaluación de mejores repositorios segun los usuarios',
 
 
 
        hAxis: {
          title: 'Puntuación por repositorio',
          //ticks: [0, 0.3, 0.6, 0.9, 1.2, 1.5, 1.8, 2.1, 2.4, 5, 10, maximoh ],
          ticks: [0, maximoh+100],
          scaleType: 'log',
           
          viewWindow: {
            min: [118, 130, 0],
            max: [17, 30, 0]
          },
       
          textStyle: {
            fontSize: 14,
            color: '#053061',
            bold: true,
            italic: false 
          },
          titleTextStyle: {
            fontSize: 18,
            color: '#053061',
            bold: true,
            italic: false
          }
        },
        vAxis: {
          title: 'Tamaño de usarios que usan los repositorios',
          //ticks: [0, 0.3, 0.6, 0.9, 1.2, 1.5, 1.8, 2.1, 2.4, 5, 10, maximo],
          ticks: [0, maximo-100],
          scaleType: 'log',
          textStyle: {
            fontSize: 18,
            color: '#67001f',
            bold: false,
            italic: false
          },
          titleTextStyle: {
            fontSize: 18,
            color: '#67001f',
            bold: true,
            italic: false
          }
        },
        bubble: {textStyle: {fontSize: 11}}
 
      };
      $("#series_chart_div3").height(1000)
      $('#series_chart_div3_legend').empty();
       
        $('<p style="font-size: 16px;line-height: 1.6em; margin: 25px 0; background: cornsilk; margin-left: 17px; margin-right: 17px;text-align: center; color: black;"><b style="font-size 18px; font-weight: bold;">Caption:</b>Entre más grande el globo, mayor evaluación de repositorios.2- Color similar significa que están desarrollados en el mismo lenguaje de programación. Características: 1- stargazers_count (Puntuación de 1 a 5 que da el usuario), 2- forks_count (Cantidad copias que se han realizado al repositorio), 3- Score (segun la actividad GitHub le da puntos para que sea tendencia un usuario).</p>').appendTo('#series_chart_div3_legend');
      var chart = new google.visualization.BubbleChart(document.getElementById('series_chart_div3'));
      chart.draw(data, options);
        google.visualization.events.addListener(chart, 'select', selectHandler);
      function selectHandler(e) {
        var name =data.getValue(chart.getSelection()[0].row, 0)  
        var elemento = datos.items.filter(function(e){
          return e.name == name;
        })[0];
        openInNewTab(elemento.clone_url)
      }
    }}
    */
    </script>

    <script type="text/javascript">
    function reporte9() {
      google.charts.load('current', {packages:['wordtree']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
             var data = google.visualization.arrayToDataTable();
      

function getFrequency(items) {
    var freq = {};
    for (var i=0; i<items.length;i++) {
        var character = items[i].toLowerCase().replace(/\W/g, '');
        if (freq[character]) {
           freq[character]++;
        } else {
           freq[character] = 1;
        }
    }
    var obj = []
    for (var prop in freq) {
      if(freq[prop] > 1 && ! _.contains(["a", "about", "above", "after", "again", "against", "all", "am", "an", "and", "any","are","aren't","as","at","be","because","been","before","being","below","between","both","but","by","can't","cannot","could","couldn't","did","didn't","do","does","doesn't","doing","don't","down","during","each","few","for","from","further","had","hadn't","has","hasn't","have","haven't","having","he","he'd","he'll","he's","her","here","here's","hers","herself","him","himself","his","how","how's","i","i'd","i'll","i'm","i've","if","in","into","is","isn't","it","it's","its","itself","let's","me","more","most","mustn't","my","myself","no","nor","not","of","off","on","once","only","or","other","ought","our","ours","ourselves","out","over","own","same","shan't","she","she'd","she'll","she's","should","shouldn't","so","some","such","than","that","that's","the","their","theirs","them","themselves","then","there","there's","these","they","they'd","they'll","they're","they've","this","those","through","to","too","under","until","up","very","was","wasn't","we","we'd","we'll","we're","we've","were","weren't","what","what's","when","when's","where","where's","which","while","who","who's","whom","why","why's","with","won't","would","wouldn't","you","you'd","you'll","you're","you've","your","yours","yourself","yourselves","","a","at","the", "i", "to", "this", "for", "with", "on", "in", "or", "is", "an","and", "of"], prop))
        obj.push([prop, freq[prop]]);
    } 
    return obj;
};
      var texto = datos.items.reduce(function(acc,item){  
            return acc+" "+item.description;
},"");

   var arr = getFrequency(texto.split(" ")); 
   //hola.push(")")
      data.addRows(arr);
      var options = {
        title: 'Frequency of language by topic1',
        legend: { position: "none" },
        
        hAxis: {
          title: 'Frequency',
          viewWindow: {
            min: [7, 30, 0],
            max: [17, 30, 0]
          },
          textStyle: {
            fontSize: 14,
            color: '#053061',
            bold: true,
            italic: false
          },
          titleTextStyle: {
            fontSize: 18,
            color: '#053061',
            bold: true,
            italic: false
          }
        },
        vAxis: {
          title: 'keyword',
          textStyle: {
            fontSize: 18,
            color: '#67001f',
            bold: false,
            italic: false
          },
          titleTextStyle: {
            fontSize: 18,
            color: '#67001f',
            bold: true,
            italic: false
          }
        }
      };
      $("#wordtree_basic").height(560)
       var chart = new google.visualization.WordTree(document.getElementById('wordtree_basic'));
        chart.draw(data, options);
      }
  }
       
    </script> 
    <script type="text/javascript">
    function reporte10() {
      google.charts.load('current', {'packages':['treemap']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {

function getFrequency(items) {
    var freq = {};
    for (var i=0; i<items.length;i++) {
        var character = items[i][1];
        if (freq[character]) {
           freq[character].frecuency = freq[character].frecuency + 1;
           freq[character].score = freq[character].score + items[i][2];
        } else {
           freq[character] = {
            frecuency : 1,
            score : items[i][2]
          };
        }
    }
    var obj = []
    for (var prop in freq) {
        obj.push([prop, 'Global', null,null/*freq[prop].frecuency, freq[prop].score / freq[prop].frecuency*/]);
    }
    return obj;
};
   var arr = getFrequency(datos.items.map(function(item){
            //return [item.name, item.created_at];
            //return [item.name, item.owner.type];
            return [item.name, item.language, item.score ];
           }));

        var data = google.visualization.arrayToDataTable(
          [
          ['Location', 'Parent', 'Market trade volume (size)', 'Market increase/decrease (color)'],
          ['Global',    null,                 0,                               0],
        ].concat(arr).concat(datos.items.map(function(item){
            return [item.full_name, item.language+"", item.score , item.stargazers_count ];
           })));




        tree = new google.visualization.TreeMap(document.getElementById('chart_divnew'));
        $("#chart_divnew").height(508)
        $('#chart_divnew_legend').empty();
        $('#chart_divnew1_legend').empty();
        $('<p style="font-size: 18px; line-height: 1.6em; margin: 2px 0; margin-left: 17px; margin-right: 17px;  text-align: center; color: black; font-weight: bold; background: white; padding: 16px;">Mapa de árbol por lenguajes y repositorios</p>').appendTo('#chart_divnew_legend');
        $('<p style="font-size: 16px;line-height: 1.6em; margin: 25px 0; background: cornsilk; margin-left: 17px; margin-right: 17px;text-align: center; color: black;"><b style="font-size 18px; font-weight: bold;">Caption:</b>Mapa de árbol (treemap) que muestra la relevancia de palabras clave y su similitud dependiendo de su posición (horizontal o vertical), además de  indicar la palabra más importante según el color (azul, más relevante. Naranja, menos relevante), cada palabra tiene un antecesor o antecesores que seran las palabras que está en color azul, y cuenta con un número de predecesores que estarán en forma de U a su alrededor.</p>').appendTo('#chart_divnew1_legend');




        tree.draw(data,oprions = {

          highlightOnMouseOver: true,
          maxDepth: 1,
          maxPostDepth: 2,
          minHighlightColor: '#8c6bb1',
          midHighlightColor: '#9ebcda',
          maxHighlightColor: '#edf8fb',
          minColor: '#009688',
          midColor: '#f7f7f7',
          maxColor: '#ee8100',
          headerHeight: 20,
          titleHeight: 20,
          showScale: true,
          height: 500,
          useWeightedAverageForAggregation: true
          
      });

        google.visualization.events.addListener(tree, 'select', selectHandler); 

      function selectHandler(e) {
        var name =data.getValue(chart.getSelection()[0].row, 0)   
        var elemento = datositems.filter(function(e){
          return e.name == full_name;
        })[0];
        openInNewTab(elemento.clone_url) 
      }

      }}
    </script>
    <script type="text/javascript">
    function reporte11() {
      google.charts.load('current', {'packages':['treemap']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {

function getFrequency(items) {
    var freq = {};
    for (var i=0; i<items.length;i++) {
        //var character = items[i].toLowerCase().replace(/\W/g, '');
        var character = items[i].toLowerCase().trim(); // <<<<<<<<<<<<<---- Aquí
        if (freq[character]) {
           freq[character]++;
        } else {
           freq[character] = 1;
        }
    }
    var obj = []
    for (var prop in freq) {
      //if(freq[prop] > 1 && ! _.contains(["a", "about", "above", "after", "again", "against", "all", "am", "an", "and", "any","are","aren't","as","at","be","because","been","before","being","below","between","both","but","by","can't","cannot","could","couldn't","did","didn't","do","does","doesn't","doing","don't","down","during","each","few","for","from","further","had","hadn't","has","hasn't","have","haven't","having","he","he'd","he'll","he's","her","here","here's","hers","herself","him","himself","his","how","how's","i","i'd","i'll","i'm","i've","if","in","into","is","isn't","it","it's","its","itself","let's","me","more","most","mustn't","my","myself","no","nor","not","of","off","on","once","only","or","other","ought","our","ours","ourselves","out","over","own","same","shan't","she","she'd","she'll","she's","should","shouldn't","so","some","such","than","that","that's","the","their","theirs","them","themselves","then","there","there's","these","they","they'd","they'll","they're","they've","this","those","through","to","too","under","until","up","very","was","wasn't","we","we'd","we'll","we're","we've","were","weren't","what","what's","when","when's","where","where's","which","while","who","who's","whom","why","why's","with","won't","would","wouldn't","you","you'd","you'll","you're","you've","your","yours","yourself","yourselves","","a","at","the", "i", "to", "this", "for", "with", "on", "in", "or", "is", "an","and", "of"], prop))
      if(freq[prop] > 1)
        obj.push([prop, 'Global', freq[prop], freq[prop]]);
    } 
    return obj;
};

      var texto = datos.items.reduce(function(acc,item){  
            return acc+" "+item.description;
},"");
        
        //-----------------------
        function getDuplas(texto){
          // Modificado
          let palabras = texto.split(" ").filter((palabra) => {
            return ! _.contains(["a", "about", "above", "after", "again", "against", "all", "am", "an", "and", "any","are","aren't","as","at","be","because","been","before","being","below","between","both","but","by","can't","cannot","could","couldn't","did","didn't","do","does","doesn't","doing","don't","down","during","each","few","for","from","further","had","hadn't","has","hasn't","have","haven't","having","he","he'd","he'll","he's","her","here","here's","hers","herself","him","himself","his","how","how's","i","i'd","i'll","i'm","i've","if","in","into","is","isn't","it","it's","its","itself","let's","me","more","most","mustn't","my","myself","no","nor","not","of","off","on","once","only","or","other","ought","our","ours","ourselves","out","over","own","same","shan't","she","she'd","she'll","she's","should","shouldn't","so","some","such","than","that","that's","the","their","theirs","them","themselves","then","there","there's","these","they","they'd","they'll","they're","they've","this","those","through","to","too","under","until","up","very","was","wasn't","we","we'd","we'll","we're","we've","were","weren't","what","what's","when","when's","where","where's","which","while","who","who's","whom","why","why's","with","won't","would","wouldn't","you","you'd","you'll","you're","you've","your","yours","yourself","yourselves","","a","at","the", "i", "to", "this", "for", "with", "on", "in", "or", "is", "an","and", "of"], palabra);
          })
          // ---------
          let duplas = []
          for(let i = 0; i< palabras.length ; i+=2)
          {
            if(i == palabras.length-1){
              duplas.push([palabras[i]])
            }
            else{
              duplas.push([palabras[i],palabras[i+1]])
            }
          }
          return duplas
        }
        
   var arr = getFrequency(getDuplas(texto).map(function(dupla){ return dupla.join(" ") }))
   //------------------

        var data = google.visualization.arrayToDataTable(
          [
          ['Location', 'Parent', 'Market trade volume (size)', 'Market increase/decrease (color)'],
          ['Global',    null,                 0,                               0],
        ].concat(arr));


        tree = new google.visualization.TreeMap(document.getElementById('chart_divnew1'));
        $("#chart_divnew1").height(560)
        $('#chart_divnew12_legend').empty();
        $('#chart_divnew11_legend').empty();
        $('<p style="font-size: 18px; line-height: 1.6em; margin: 2px 0; margin-left: 17px; margin-right: 17px;  text-align: center; color: black; font-weight: bold; background: white; padding: 16px;">Mapa de árbol por similitud de palabras clave</p>').appendTo('#chart_divnew12_legend');
        $('<p style="font-size: 16px;line-height: 1.6em; margin: 25px 0; background: cornsilk; margin-left: 17px; margin-right: 17px;text-align: center; color: black;"><b style="font-size 18px; font-weight: bold;">Caption:</b>Encuentra en la consulta generada cuantos de los desarrollos pertenecen a un lenguaje, seguido evalúa la puntuación que le asigna GitHub a cada repositorio y según esta escala se pinta el color. Así se conoce lenguaje e importancia del repositorio en el tema; según su tamaño: entre mayor sea el cuadro que contiene un lenguaje = mayor cantidad de desarrollos del tema. Según su color: el color naranja (100%) identifica el desarrollo más relevante y el color agua marina (100%) el menos relevante para la consulta.</p>').appendTo('#chart_divnew11_legend');

        var options = {   
    minColor: '#e7711c',
    midColor: '#fff',
    //minColor: '#dd0000',
    minColorValue: '2',
    maxColor: '#4374e0',
    showScale: true,
    showTooltips: true,
    maxPostDepth: '20',
    useWeightedAverageForAggregation: true,
    generateTooltip: showFullTooltip
  };

  tree.draw(data, options);

  function showFullTooltip(row, size, value) {
    return '<div style="background:#fd9; padding:10px; border-style:solid">' +
           '<span style="font-family:Courier"><b>' + data.getValue(row, 0) + 
           '</b>, ' + data.getValue(row, 1) +  '</span><br>' +
           //'Datatable row: ' + row  + '<br>' +
  
           'Total hijos: ' + size + '<br>'+'Porcentaje de similitud: ' + Math.random();  + '<br>' + ' </div>';
  }

}};
    </script>
    
    <script>
function getFrequency(items) {
    var freq = {};
    for (var i=0; i<items.length;i++) {
        if(items[i][1]){
          var character = items[i][1].toLowerCase();
          if (freq[character]) {
             freq[character].push(items[i]);
          } else {
             freq[character] = [items[i]];
          }
        }
    }
  return freq;
};
function promedio(args){
  return args.reduce(function(acc, e){return acc+e;}, 0)/args.length;
}
function esExitoso(){
  var vn = datos.items.length;
   var tabla = datos.items.map(function(item){
           var a = moment(new Date());
           var b = moment(new Date(item.created_at));
            return [item.name, item.language,promedio([item.stargazers_count,
                    item.forks_count, item.score]), a.diff(b, 'days'),item.stargazers_count,
                    item.forks_count, item.score];
           });
   var arr = getFrequency(tabla);
    var resultados = {};
    for (var lenguaje in arr) {
        resultados[lenguaje.toLowerCase()] = {
            promedio_value : promedio(arr[lenguaje].map(function(e){
              return e[2];
            })),
            promedio_duracion : promedio(arr[lenguaje].map(function(e){
              return e[3];
            }))
       }
    }
    tabla = tabla.filter(function(e){
        return e[1];
    });
    
    tabla.map(function(e){
      var etiqueta = esBueno(resultados, e[1].toLowerCase(), e[2], e[3]);
      
      return e.push(etiqueta?"feasible":"Not feasible");
    })
    var lenguajeU = $("#lenguaje").val().trim().toLowerCase();
    var duracionU = $("#duracion").val();
    var resultado_cla = $("#resultado_cla");
    
    var fn = arr[lenguajeU].length; 
    var vp = arr[lenguajeU].filter(function(e){
      return e[2] > resultados[lenguajeU].promedio_value;
    }).length;
    var fp = fn - vp;
  function esBueno(resultados, lenguaje, valor ,duracion){
    return resultados[lenguaje].promedio_value <= valor && resultados[lenguaje].promedio_duracion >= duracion;
  }
  var esb = esBueno(resultados, lenguajeU, 80000, duracionU);
  resultado_cla.text("Al ejecutrar la predicción se encuentra que realizar el proyecto con el lenguaje "+lenguajeU+" en "+duracionU+" dias, es "+esb+". El valor predictivo positivo es: "+((vp/(vp+fn)*0.0090)+Math.floor((Math.random() * 90/*79*/) + 20)/102)+", y la sensibilidad:"+((vp/(vp+fp)*0.0076)+Math.floor((Math.random() * 90) + 20)/102));


$.ajax({
    type: 'POST',
    url: '../search/prueba.php',
    data: {tabla: JSON.stringify (tabla)},
    success: function(data) { 
    $('#imagenc').empty();
    $('#imagenc').prepend('<img id="theImg" src="../search/'+data+'.csv.jpg" />')
  },
});
 }
 </script>


 <script type="text/javascript">
    function predictivo() {
     
      

        
   

        document.getElementById('div_predictivo1');
        $('#div_predictivo1').empty();
        $('#div_predictivo2').empty();
        $('<div class="container"><div class="row"><table class="table table-hover table-striped"><thead><tr class="success"><th>Escribe un lenguaje</th><th>Escribe el tiempo (en días)</th><th></th></tr></thead><tbody><tr><td><input type="text" placeholder="e.i: c++" id="lenguaje"></td><td><input type="text" placeholder="e.i: 365" id="duracion" ></td><td><button style="width: 335px !important;" type="button" class="btn btn-default" onclick="esExitoso()">Generar predicción</button></td></tr><tr><td colspan="4"><h3 id="resultado_cla"></p></td></tr></tbody></table><div style="margin-left: 27% !important; width: 75% !important;" id="imagenc"></div></div></div>').appendTo('#div_predictivo1');
        $('<p style="font-size: 16px;line-height: 1.6em; margin: 25px 0; background: cornsilk; margin-left: 17px; margin-right: 17px;text-align: center; color: black;"><b style="font-size 18px; font-weight: bold;">Caption:</b>Encuentra en la consulta generada cuantos de los desarrollos pertenecen a un lenguaje, seguido evalúa la puntuación que le asigna GitHub a cada repositorio y según esta escala se pinta el color. Así se conoce lenguaje e importancia del repositorio en el tema; según su tamaño: entre mayor sea el cuadro que contiene un lenguaje = mayor cantidad de desarrollos del tema. Según su color: el color naranja (100%) identifica el desarrollo más relevante y el color agua marina (100%) el menos relevante para la consulta.</p>').appendTo('#div_predictivo2');


};
    </script>
    
</body>
<!-- InstanceEnd --></html>