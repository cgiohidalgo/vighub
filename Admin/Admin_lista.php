<?php require_once('../Connections/crenesoft.php'); ?>
<?php
if(isset($_POST['password'])) {$_POST['password'] = sha1($_POST['password']);} 
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

// *** Redirect if username exists
$MM_flag="MM_insert";
if (isset($_POST[$MM_flag])) {
  $MM_dupKeyRedirect="comprueba_correo.php";
  $loginUsername = $_POST['email'];
  $LoginRS__query = sprintf("SELECT email FROM usuarios WHERE email=%s", GetSQLValueString($loginUsername, "text"));
  mysql_select_db($database_crenesoft, $crenesoft);
  $LoginRS=mysql_query($LoginRS__query, $crenesoft) or die(mysql_error());
  $loginFoundUser = mysql_num_rows($LoginRS);

  //if there is a row in the database, the username was found - can not add the requested username
  if($loginFoundUser){
    $MM_qsChar = "?";
    //append the username to the redirect page
    if (substr_count($MM_dupKeyRedirect,"?") >=1) $MM_qsChar = "&";
    $MM_dupKeyRedirect = $MM_dupKeyRedirect . $MM_qsChar ."requsername=".$loginUsername;
    header ("Location: $MM_dupKeyRedirect");
    exit;
  }
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO usuarios (email, password, admin_priv) VALUES (%s, %s, %s)",
                       GetSQLValueString($_POST['email'], "text"),
                       GetSQLValueString($_POST['password'], "text"),
                       GetSQLValueString($_POST['admin_priv'], "text"));

  mysql_select_db($database_crenesoft, $crenesoft);
  $Result1 = mysql_query($insertSQL, $crenesoft) or die(mysql_error());

  $insertGoTo = "grupos_lista.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}
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
 
 <div id="fa_toolbar" class="fa_fix fa_toolbar_XL_Sized"><div id="fa_right" class="fa_tbMainElement"></div><span id="fa_left" class="fa_tbMainElement"><a class="menu-login"><?php include("../includes/catalogoadmin.php"); ?></a></span></div></div>
 
    
    <div id="pun-intro" class="clearfix">
      <div class="sun-intro"><h1 id="VigHub">VigHub</h1>
        
          
          
          <div id="itemnavtop"><ul id="menu-topnav" class="menu sf-js-enabled sf-shadow"><li class="principal"><a href="inicio.php" title="Ir al inicio">Home</a></li><li id="menu-item-3772" class="tutoriales menu-item menu-item-type-taxonomy menu-item-object-category current-post-ancestor menu-item-3772"><a href="#" class="sf-with-ul">Help<span class="sf-sub-indicator"> »</span></a><ul class="sub-menu sf-js-enabled sf-shadow">
            
          
          <li id="menu-item-3774" class="menu-item menu-item-type-taxonomy menu-item-object-category current-post-ancestor current-menu-parent current-post-parent menu-item-3774"><a href="https://media.readthedocs.org/pdf/conociendogithub/latest/conociendogithub.pdf" target="_blank" >GitHub</a></li>
          
            
          <li id="menu-item-3774" class="menu-item menu-item-type-taxonomy menu-item-object-category current-post-ancestor current-menu-parent current-post-parent menu-item-3774"><a href="../webroot/archivos/manual.pdf" target="_blank" >Manual</a></li><li id="menu-item-3778" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3778"><a href="../webroot/archivos/architecture.pdf">Vighub architecture</a></li></ul></li></a>

          <li id="menu-item-3768" class="descargas menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3768"><a href="#">Resource<span class="sf-sub-indicator"> »</span></a><ul class="sub-menu sf-js-enabled sf-shadow"><li id="menu-item-3764" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3764"><a href="Copia_seguridad.php">Backup</a></li><li id="menu-item-3770" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3770"></li></ul></li></ul></div>


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
        <form method="post" name="form1" action="<?php echo $editFormAction; ?>">
          <table align="center">
            <tr valign="baseline">
              <td nowrap align="right">Email:</td>
              <td><input type="text" name="email" value="" size="32"></td>
            </tr>
            <tr valign="baseline">
              <td nowrap align="right">Password:</td>
              <td><input type="text" name="password" value="" size="32"></td>
            </tr>
            <tr valign="baseline">
              <td nowrap align="right">Admin_priv:</td>
              <td valign="baseline"><table>
                <tr>
                  <td><input type="radio" checked name="admin_priv" value="Admin" >
                    Administrador</td>
                </tr>
                <tr>
                  <td><input type="radio" name="admin_priv" value="Usuario" >
                    Usario</td>
                </tr>
              </table></td>
            </tr>
            <tr valign="baseline">
              <td nowrap align="right">&nbsp;</td>
              <td><input type="submit" value="Insertar registro"></td>
            </tr>
          </table>
          <input type="hidden" name="MM_insert" value="form1">
        </form>
        <p>&nbsp;</p>
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
