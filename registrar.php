
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

// *** Redirect if username exists
$MM_flag="MM_insert";
if (isset($_POST[$MM_flag])) {
  $MM_dupKeyRedirect="/vighubjson/comprueba_correo_registro/";
  $loginUsername = $_POST['grupo'];
  $LoginRS__query = sprintf("SELECT grupo FROM usuarios WHERE grupo=%s", GetSQLValueString($loginUsername, "text"));
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
  $insertSQL = sprintf("INSERT INTO usuarios (grupo, email, password, imagen, categoria, activo) VALUES (%s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['grupo'], "text"),
                       GetSQLValueString($_POST['email'], "text"),
                       GetSQLValueString($_POST['password'], "text"),
                       GetSQLValueString($_POST['imagen'], "text"),
                       GetSQLValueString($_POST['categoria'], "text"),
             GetSQLValueString($_POST['activo'], "int"));

  mysql_select_db($database_crenesoft, $crenesoft);
  $Result1 = mysql_query($insertSQL, $crenesoft) or die(mysql_error());

  $insertGoTo = "/vighubjson/registro_ok/";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

mysql_select_db($database_crenesoft, $crenesoft);
$query_Recordset1 = "SELECT * FROM categoria ORDER BY categoria.descripcion ASC";
$Recordset1 = mysql_query($query_Recordset1, $crenesoft) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?>

<!doctype html>
<html><!-- InstanceBegin template="/Templates/default1.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf-8">
<!-- InstanceBeginEditable name="doctitle" -->
<title>VigTech</title>
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
  </header>
    <nav>
      <p> 
         
        </p>
    </nav>
    <section id="principal">
      <article> 
    <!-- InstanceBeginEditable name="Contenido" -->
       
<script> 
    function cargarimagen()
    {
    self.name = 'opener'; //degfine com ose llama esta ventana
    remote = open('gestionimagen.php', 'remote',  'width=400, height=150, location=no, scrollbars=yes, menubars=no, resizable=yes, fullscreen=no, status=yes'); //propieades de las imagenes
    remote.focus(); // esta ventanda que se abio pase a primer plano
    }
  
  </script>  
<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>


<script src="../webroot/parsley.js" type="text/javascript"></script>      


    <div id="contenedor_formulario" class="well">

       <fieldset class="well">
      <legend align="center">¡Registro!</legend>

           <div id="datos_usuario" class="span5">
    <!--==============================================================-->
    <!-- Datos de usuario -->
    <!--==============================================================-->
    <fieldset class="well">
      <!--==============================================================-->
      <!-- Titulo para el formulario -->
      <!--==============================================================-->
      <legend align="center">Información personal</legend>
      <div align="center" class="span4">
          <form  method="post" data-validate="parsley" name="form1" id="form1" action="<?php echo $editFormAction; ?>">
          <input name="grupo" type="text" required id="grupo" placeholder="Nombre*" value="" size="32" data-rangelength="[5,100]">
          <input type="email" name="email" placeholder="Correo*" required  value="" size="32">
          
          <input name="imagen" type="text" id="imagen" value="null" placeholder="Avatar. PNG O JPG"  size="32">
          
          <input type="button" name="button" onClick="javascript:cargarimagen();" id="button" class="btn btn-success" value="Subir">
          
          <input type="password" placeholder="Contraseña*" name="password" id="password" data-required="true"  data-rangelength="[5,15]" value="" size="32">
          <input type="password" name="password2" id="password3" placeholder="Repite contraseña" required data-equalTo="#password" data-error-message="password wrong" />
          <select name="categoria" id="categoria">
            <?php
do {  
?>
            <option value="<?php echo $row_Recordset1['descripcion']?>"><?php echo $row_Recordset1['descripcion']?></option>
            <?php
} while ($row_Recordset1 = mysql_fetch_assoc($Recordset1));
  $rows = mysql_num_rows($Recordset1);
  if($rows > 0) {
      mysql_data_seek($Recordset1, 0);
    $row_Recordset1 = mysql_fetch_assoc($Recordset1);
  }
?>
          </select>
          
          <br></br>
           <input type="submit" class="btn btn-primary"   value="
Registrarse">
           </div>
           </fieldset>
           </div>
            <div align="right" id="datos_usuario" class="span5">
      <div class="span4">
          
           <img src="../imagenes/crenesoft/bienvenidos.gif">
           </div>
           </div>
          <input type="hidden" name="activo" value="1">
          <input type="hidden" name="MM_insert" value="form1">
        </form>
          </div>
      </fieldset>
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
      <p></p>
    

          
           </div>
        </div></div></div></div>
</body>
<!-- InstanceEnd --></html>
<?php
mysql_free_result($Recordset1);
?>
