<?php require_once('Connections/crenesoft.php'); ?>
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
?>
<?php
// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}

$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}

if (isset($_POST['email'])) {
  $loginUsername=$_POST['email'];
  $password=$_POST['password'];
  $MM_fldUserAuthorization = "";
  $MM_redirectLoginSuccess = "/vighubjson/inicio/";
  $MM_redirectLoginFailed = "/vighubjson/acceso_error/";
  $MM_redirecttoReferrer = false;
  mysql_select_db($database_crenesoft, $crenesoft);
  
  $LoginRS__query=sprintf("SELECT idusuario, email, password FROM usuarios WHERE email=%s AND password=%s",
    GetSQLValueString($loginUsername, "text"), GetSQLValueString($password, "text")); 
   
  $LoginRS = mysql_query($LoginRS__query, $crenesoft) or die(mysql_error());
  $row_LoginRS = mysql_fetch_assoc($LoginRS);
  $loginFoundUser = mysql_num_rows($LoginRS);
  if ($loginFoundUser) {
     $loginStrGroup = "";
    
	if (PHP_VERSION >= 5.1) {session_regenerate_id(true);} else {session_regenerate_id();}
    //declare two session variables and assign them
    $_SESSION['MM_Username'] = $loginUsername;
    $_SESSION['MM_UserGroup'] = $loginStrGroup;	 
	$_SESSION['MM_idusuario'] = $row_LoginRS["idusuario"];

    if (isset($_SESSION['PrevUrl']) && false) {
      $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];	
    }
    header("Location: " . $MM_redirectLoginSuccess );
  }
  else {
    header("Location: ". $MM_redirectLoginFailed );
  }
}
?>
<?php
// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}

$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}

if (isset($_POST['email'])) {
  $loginUsername=$_POST['email'];
  $password=$_POST['password'];
  $MM_fldUserAuthorization = "idusuario";
  $MM_redirectLoginSuccess = "/vighubjson/inicio/";
  $MM_redirectLoginFailed = "/vighubjson/acceso_error/";
  $MM_redirecttoReferrer = false;
  mysql_select_db($database_crenesoft, $crenesoft);
  	
  $LoginRS__query=sprintf("SELECT idusuario, email, idusuario FROM usuarios WHERE idusuario=%s AND email=%s",
  GetSQLValueString($loginUsername, "int"), GetSQLValueString($password, "text")); 
   
  $LoginRS = mysql_query($LoginRS__query, $crenesoft) or die(mysql_error());
  $loginFoundUser = mysql_num_rows($LoginRS);
  if ($loginFoundUser) {
    
    $loginStrGroup  = mysql_result($LoginRS,0,'idusuario');
    
	if (PHP_VERSION >= 5.1) {session_regenerate_id(true);} else {session_regenerate_id();}
    //declare two session variables and assign them
    $_SESSION['MM_Username'] = $loginUsername;
    $_SESSION['MM_UserGroup'] = $loginStrGroup;	      

    if (isset($_SESSION['PrevUrl']) && false) {
      $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];	
    }
    header("Location: " . $MM_redirectLoginSuccess );
  }
  else {
    header("Location: ". $MM_redirectLoginFailed );
  }
}
?>
<?php
// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}

$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}

if (isset($_POST['email'])) {
  $loginUsername=$_POST['email'];
  $password=$_POST['password'];
  $MM_fldUserAuthorization = "admin_priv";
  $MM_redirectLoginSuccess = "/vighubjson/inicio/";
  $MM_redirectLoginFailed = "/vighubjson/acceso_error/";
  $MM_redirecttoReferrer = false;
  mysql_select_db($database_crenesoft, $crenesoft);
  	
  $LoginRS__query=sprintf("SELECT email, password, admin_priv FROM usuarios WHERE email=%s AND password=%s",
  GetSQLValueString($loginUsername, "text"), GetSQLValueString($password, "text")); 
   
  $LoginRS = mysql_query($LoginRS__query, $crenesoft) or die(mysql_error());
  $loginFoundUser = mysql_num_rows($LoginRS);
  if ($loginFoundUser) {
    
    $loginStrGroup  = mysql_result($LoginRS,0,'admin_priv');
    
	if (PHP_VERSION >= 5.1) {session_regenerate_id(true);} else {session_regenerate_id();}
    //declare two session variables and assign them
    $_SESSION['MM_Username'] = $loginUsername;
    $_SESSION['MM_UserGroup'] = $loginStrGroup;	      

    if (isset($_SESSION['PrevUrl']) && false) {
      $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];	
    }
    header("Location: " . $MM_redirectLoginSuccess );
  }
  else {
    header("Location: ". $MM_redirectLoginFailed );
  }
}
?>
<!doctype html>
<html><!-- InstanceBegin template="/Templates/default1.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf-8">
<!-- InstanceBeginEditable name="doctitle" -->
<title>VigHub</title>
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
	
	      
          
          <?php if($_SESSION['MM_UserGroup']=='Admin'){?>
          <div id="itemnavtop"><ul id="menu-topnav" class="menu sf-js-enabled sf-shadow"><li class="principal"><a href="inicio.php" title="Ir al inicio">Principal</a></li><li id="menu-item-3772" class="tutoriales menu-item menu-item-type-taxonomy menu-item-object-category current-post-ancestor menu-item-3772"><a href="#" class="sf-with-ul">Ayuda<span class="sf-sub-indicator"> »</span></a><ul class="sub-menu sf-js-enabled sf-shadow">
            
          
          <li id="menu-item-3774" class="menu-item menu-item-type-taxonomy menu-item-object-category current-post-ancestor current-menu-parent current-post-parent menu-item-3774"><a href="http://www.monografias.com/trabajos6/isof/isof.shtml" target="_blank" >Descargar Software</a></li>
           
          <li id="menu-item-3774" class="menu-item menu-item-type-taxonomy menu-item-object-category current-post-ancestor current-menu-parent current-post-parent menu-item-3774"><a href="webroot/archivos/plandenegocios.pdf" target="_blank" >GitHub</a></li>
          
            
          <li id="menu-item-3774" class="menu-item menu-item-type-taxonomy menu-item-object-category current-post-ancestor current-menu-parent current-post-parent menu-item-3774"><a href="webroot/archivos/manual.pdg" target="_blank" >Manual</a></li><li id="menu-item-3778" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3778"><a href="">Arquitectura base</a></li><li id="menu-item-3776" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3776"><a href="">Industria del Software libre</a></li></ul></li><li id="menu-item-5491" class="comunidad menu-item menu-item-type-custom menu-item-object-custom menu-item-5491"><a href="preguntas.php">¿Dudas?</a></li><li id="menu-item-3762" class="articulos menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3762"><a href="#" class="sf-with-ul">Enterate<span class="sf-sub-indicator"> »</span></a><ul class="sub-menu sf-js-enabled sf-shadow"><li id="menu-item-3763" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3763"><a href="">Vigilancia Tecnologica</a></li><li id="menu-item-4327" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-4327"><a href=""></a></li><li id="menu-item-3765" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3765"><a <a href="">¿Que es? ¿para para que sirve? esta platforma</a></li></ul></li><li id="menu-item-3768" class="descargas menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3768"><a href="#">Recursos<span class="sf-sub-indicator"> »</span></a><ul class="sub-menu sf-js-enabled sf-shadow"><li id="menu-item-3769" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3769"><a href="www.youtube.com/">Tienes problemas para utlizar el software</a></li><li id="menu-item-3764" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3764"><a href="Copia_seguridad.php">copia de seguridad de tus datos</a></li><li id="menu-item-3770" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3770"></li></ul></li></ul></div>
          
          <?php }?>
           <?php if($_SESSION['MM_UserGroup']=='Usuario'){?>
    <div id="itemnavtop"><ul id="menu-topnav" class="menu sf-js-enabled sf-shadow"><li class="principal"><a href="inicio.php" title="Ir al inicio">Principal</a></li><li id="menu-item-3772" class="tutoriales menu-item menu-item-type-taxonomy menu-item-object-category current-post-ancestor menu-item-3772"><a href="#" class="sf-with-ul">Ayuda<span class="sf-sub-indicator"> »</span></a><ul class="sub-menu sf-js-enabled sf-shadow">
            
          
          <li id="menu-item-3774" class="menu-item menu-item-type-taxonomy menu-item-object-category current-post-ancestor current-menu-parent current-post-parent menu-item-3774"><a href="../webroot/archivos/plandenegocios.pdf" target="_blank" >GitHub</a></li>
          
            
          <li id="menu-item-3774" class="menu-item menu-item-type-taxonomy menu-item-object-category current-post-ancestor current-menu-parent current-post-parent menu-item-3774"><a href="../webroot/archivos/manual.pdg" target="_blank" >Manual</a></li><li id="menu-item-3778" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3778"><a href="">Arquitectura base</a></li><li id="menu-item-3776" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3776"><a href="">Industria del Software libre</a></li></ul></li></a>

          <li id="menu-item-3768" class="descargas menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3768"><a href="#">Recursos<span class="sf-sub-indicator"> »</span></a><ul class="sub-menu sf-js-enabled sf-shadow"><li id="menu-item-3769" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3769"><a href="www.youtube.com/">Tienes problemas para utlizar el software</a></li><li id="menu-item-3764" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3764"><a href="Copia_seguridad.php">copia de seguridad de tus datos</a></li><li id="menu-item-3770" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3770"></li></ul></li></ul></div>
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
     <p>&nbsp;</p>
   
    <section id="principal">
    	<article> 
		<!-- InstanceBeginEditable name="Contenido" -->      
        
        <article id="inicio_sesion">
       
        <form name="form1" method="POST" action="<?php echo $loginFormAction; ?>">
        
        <fieldset class="well">
        <br></br>
		<legend>Credentials</legend>
			
		      <input align="absbottom" placeholder="Correo Electronico" required type="text" name="email" id="email">
		      <input type="password" placeholder="Contraseña" required name="password" id="password">
             
		      <br></br>
		      <input type="submit" class="btn btn-primary"  value="Sing in"> 
              <a class="btn btn-success" href="/vighubjson/registrar/">check in</a>
        </fieldset></form>
        <img class="logotipovighub" src="imagenes/logo.png">
        </article>
		<!-- InstanceEndEditable -->
        </article>    	
    </section>
    </br>
   
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
      <p></p>
    

          
           </div>
        </div></div></div></div>
</body>
<!-- InstanceEnd --></html>