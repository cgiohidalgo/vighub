<?php require_once('../Connections/crenesoft.php'); ?>
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
  $updateSQL = sprintf("UPDATE usuarios SET grupo=%s, email=%s, password=%s, activo=%s, imagen=%s WHERE idusuario=%s",
                       GetSQLValueString($_POST['grupo'], "text"),
                       GetSQLValueString($_POST['email'], "text"),
                       GetSQLValueString($_POST['password'], "text"),
                       GetSQLValueString($_POST['activo'], "int"),
                       GetSQLValueString($_POST['imagen'], "text"),
                       GetSQLValueString($_POST['idusuario'], "int"));

  mysql_select_db($database_crenesoft, $crenesoft);
  $Result1 = mysql_query($updateSQL, $crenesoft) or die(mysql_error());

  $updateGoTo = "grupos_lista.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

$varGrupo_Recordset1 = "0";
if (isset($_GET["recordID"])) {
  $varGrupo_Recordset1 = $_GET["recordID"];
}
mysql_select_db($database_crenesoft, $crenesoft);
$query_Recordset1 = sprintf("SELECT * FROM usuarios WHERE usuarios.idusuario = %s", GetSQLValueString($varGrupo_Recordset1, "int"));
$Recordset1 = mysql_query($query_Recordset1, $crenesoft) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);

$varGrupo_Recordset2 = "0";
if (isset($_GET["recordID"])) {
  $varGrupo_Recordset2 = $_GET["recordID"];
}
mysql_select_db($database_crenesoft, $crenesoft);
$query_Recordset2 = sprintf("SELECT * FROM usuarios WHERE usuarios.idusuario = %s", GetSQLValueString($varGrupo_Recordset2, "int"));
$Recordset2 = mysql_query($query_Recordset2, $crenesoft) or die(mysql_error());
$row_Recordset2 = mysql_fetch_assoc($Recordset2);
$totalRows_Recordset2 = mysql_num_rows($Recordset2);
?>
<!doctype html>
<html><!-- InstanceBegin template="/Templates/defaultadmin.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf-8">
<!-- InstanceBeginEditable name="doctitle" -->
<title>Documento sin título</title>
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

 
</head>
<body>   
	<header>  
 
 <div id="fa_toolbar" class="fa_fix fa_toolbar_XL_Sized"><div id="fa_right" class="fa_tbMainElement"></div><span id="fa_left" class="fa_tbMainElement"><a class="menu-login"><?php include("../includes/catalogoadmin.php"); ?></a></span></span></div>
 
		<div id="pun-intro" class="clearfix">
		  <div class="sun-intro"><div class="multimenu"><div class="outerarr"><a href="#" class="lilarr" rel="friend"><div class="arr"></div></a></div><ul style="display: none;"><li><h4 class="wt"><a href="#" title="WebSite1">WebsSite</a></h4><div class="multimenu_slogan"><span id="IL_AD11" class="IL_AD">website</span></div></li><li><h4 class="pt"><a href="#" title="WebSite2" rel="friend">WebsSite</a></h4><div class="multimenu_slogan">website</div></li></ul></div>
		    <a href="/" id="pun-logo"><img src="../imagenes/crenesoft/logo2.png" alt="15-tronos | Diseñamos Tu Foro"></a>
	      <div id="itemnavtop"><ul id="menu-topnav" class="menu sf-js-enabled sf-shadow"><li class="principal"><a href="index.php" title="Iniciar Sesion">Principal</a></li><li id="menu-item-3772" class="tutoriales menu-item menu-item-type-taxonomy menu-item-object-category current-post-ancestor menu-item-3772"><a href="#" class="sf-with-ul">Ayuda<span class="sf-sub-indicator"> »</span></a><ul class="sub-menu sf-js-enabled sf-shadow">
          
          
          <li id="menu-item-3774" class="menu-item menu-item-type-taxonomy menu-item-object-category current-post-ancestor current-menu-parent current-post-parent menu-item-3774"><a href="http://www.monografias.com/trabajos6/isof/isof.shtml" target="_blank" >PND - Software</a></li>
          
          <li id="menu-item-3774" class="menu-item menu-item-type-taxonomy menu-item-object-category current-post-ancestor current-menu-parent current-post-parent menu-item-3774"><a href="../webroot/archivos/plandenegocios.pdf" target="_blank" >Garntia y control</a></li>
          
          
          <li id="menu-item-3774" class="menu-item menu-item-type-taxonomy menu-item-object-category current-post-ancestor current-menu-parent current-post-parent menu-item-3774"><a href="../webroot/archivos/plandenegocios.pdf" target="_blank" >PDN Completo</a></li><li id="menu-item-3778" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3778"><a href="http://www.crear-empresas.com/">PDN normas</a></li><li id="menu-item-3776" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3776"><a href="http://revistaing.uniandes.edu.co/pdf/rev5art5.pdf">Industria del Software</a></li></ul></li><li id="menu-item-5491" class="comunidad menu-item menu-item-type-custom menu-item-object-custom menu-item-5491"><a href="/memberlist">Comunidad</a></li><li id="menu-item-3762" class="articulos menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3762"><a href="#" class="sf-with-ul">Articulos<span class="sf-sub-indicator"> »</span></a><ul class="sub-menu sf-js-enabled sf-shadow"><li id="menu-item-3763" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3763"><a href="/f39-soporte">Soporte</a></li><li id="menu-item-4327" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-4327"><a href="/f17-themes">Skin</a></li><li id="menu-item-3765" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3765"><a href="/f28-theme-pedidos">Pedir Skin</a></li></ul></li><li id="menu-item-3768" class="descargas menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3768"><a href="#">Recursos<span class="sf-sub-indicator"> »</span></a><ul class="sub-menu sf-js-enabled sf-shadow"><li id="menu-item-3769" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3769"><a href="/f16-caja-de-imagenes">Botones</a></li><li id="menu-item-3764" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3764"><a href="/f16-caja-de-imagenes">Rangos</a></li><li id="menu-item-3770" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3770"><a href="/f16-caja-de-imagenes">Otros</a></li></ul></li></ul></div><div id="pun-title" style="display:none;"><h1>15-tronos | Diseñamos Tu Foro</h1></div><p id="pun-desc" style="display:none;">15-tronos | Diseñamos Tu Foro</p></div></div>

		<h1>CreneSoft</h1>
    </header>
    <nav>
    	<p>
        
        </p>
    </nav>
     <nav id="menu-principal">
           <ul>
				  
                <li> 
				 <?php include("../includes/cabeceraadmin.php"); ?>
				</li>        
		  </ul>     
        </nav> 
    <section id="contenidos"> 
    	<article>
       
		<!-- InstanceBeginEditable name="Contenido" -->
<script> 
  	function cargarimagen()
  	{
	  self.name = 'opener'; //degfine com ose llama esta ventana
	  remote = open('gestionimagen.php', 'remote', 	'width=400, height=150, location=no, scrollbars=yes, menubars=no, resizable=yes, fullscreen=no, status=yes'); //propieades de las imagenes
	  remote.focus(); // esta ventanda que se abio pase a primer plano
	  }
  
  </script>
        <form method="post" name="form1" action="<?php echo $editFormAction; ?>">
          <table align="center">
            <tr valign="baseline">
              <td nowrap align="right">Grupo:</td>
              <td><input type="text" name="grupo" value="<?php echo htmlentities($row_Recordset1['grupo'], ENT_COMPAT, 'utf-8'); ?>" size="32"></td>
            </tr>
            <tr valign="baseline">
              <td nowrap align="right">Email:</td>
              <td><input type="text" name="email" value="<?php echo htmlentities($row_Recordset1['email'], ENT_COMPAT, 'utf-8'); ?>" size="32"></td>
            </tr>
            <tr valign="baseline">
              <td nowrap align="right">Password:</td>
              <td><input type="text" name="password" value="<?php echo htmlentities($row_Recordset1['password'], ENT_COMPAT, 'utf-8'); ?>" size="32"></td>
            </tr>
            <tr valign="baseline">
              <td nowrap align="right">Activo:</td>
              <td><select name="activo">
                <option value="1" <?php if (!(strcmp(1, htmlentities($row_Recordset1['activo'], ENT_COMPAT, 'utf-8')))) {echo "SELECTED";} ?>>activo</option>
                <option value="0" <?php if (!(strcmp(0, htmlentities($row_Recordset1['activo'], ENT_COMPAT, 'utf-8')))) {echo "SELECTED";} ?>>inactivo</option>
              </select></td>
            </tr>
            <tr valign="baseline">
              <td nowrap align="right">Imagen:</td>
              <td><input type="text" name="imagen" id="imagen" value="<?php echo htmlentities($row_Recordset1['imagen'], ENT_COMPAT, 'utf-8'); ?>" size="32">
              <input type="button" name="button" onClick="javascript:cargarimagen();" id="button" value="Subir logo"></td>
            </tr>
            <tr valign="baseline">
              <td nowrap align="right">&nbsp;</td>
              <td><input type="submit" value="Actualizar registro"></td>
            </tr>
          </table>
          <input type="hidden" name="MM_update" value="form1">
          <input type="hidden" name="idusuario" value="<?php echo $row_Recordset1['idusuario']; ?>">
        </form>
        <p>&nbsp;</p>
<h1>Editar Grupo</h1>
        
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
                              <!-- BEGIN switch_separator -->  <!-- END switch_separator -->
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
    <div id="pun-foot"><div id="shitpe" style="display: block;"><img src="http://i.imgur.com/0LsMnPJ.png" onClick= "$('html,body').animate({scrollTop: $('html').offset().top},1000);" title="Ir al TOP"></div><div id="pun-about" class="clearfix"><div class="logobottom"><a href="/" id="logo-bottom"><img src="../imagenes/crenesoft/logo4.png" title="Giovanny Hidalgo Suarez"></a></div><div class="info-foot"><h2>SOBRE CreneSoft | Ingenieria</h2>
          <p><br>
          Esta plataforma web está desarrollada única y exclusivamente con fines de  emprendimiento y brinda  al usuario la posibilidad de crear planes de negocios  para la  industria del software libre.<br>Todo lo que se haga dentro de la plataforma web CreneSoft no tiene ningún costo, esperamos sea de gran utilidad para  los usuarios.</br>
          </p>
      <ul class="socialmedia"><li class="facebook"><a href="https://www.facebook.com">facebook</a></li><li class="twitter"><a href="#">twitter</a></li><li class="youtube"><a href="http://www.youtube.com">youtube</a></li></ul></div><ul id="linkfa"><li><strong><a href="http://www.GiovannyHidalgo.com/" target="_blank">Quieres aprender</a></strong>&nbsp;|&nbsp;<span class="gensmall">©</span> <a href="http://www.foroactivo.com/es/punbb/" target="_blank">PHP</a>&nbsp;|&nbsp;<a name="bottom" href="http://asistencia.foroactivo.com/" target="_blank">JavaScript</a>&nbsp;|&nbsp;<a name="bottom" href="/statistics" rel="nofollow">Html5</a>&nbsp;|&nbsp;<a name="bottom" href="/donate" rel="nofollow">CSS3</a>&nbsp;|&nbsp;<a name="bottom" href="/contact" rel="nofollow">Contactar</a>&nbsp;|&nbsp;<a href="/abuse?page=%2Ft1182-footer-elegante-punbb&amp;report=1" rel="nofollow">Denunciar un abuso</a></li></ul></div><br><p class="center"><strong></strong></p></div>
    
    
                  </div>
	
</body>
<!-- InstanceEnd --></html>
<?php
mysql_free_result($Recordset1);

mysql_free_result($Recordset2);
?>
