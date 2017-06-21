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
  $updateSQL = sprintf("UPDATE canvas SET actividades=%s WHERE idcanvas=%s",
                       GetSQLValueString($_POST['actividades'], "text"),
                       GetSQLValueString($_POST['idcanvas'], "int"));

  mysql_select_db($database_crenesoft, $crenesoft);
  $Result1 = mysql_query($updateSQL, $crenesoft) or die(mysql_error());

  $updateGoTo = "fase7.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form2")) {
  $updateSQL = sprintf("UPDATE imagenes_plan_canvas SET imagen7=%s WHERE idimgcanvas=%s",
                       GetSQLValueString($_POST['imagen7'], "text"),
                       GetSQLValueString($_POST['idimgcanvas'], "int"));

  mysql_select_db($database_crenesoft, $crenesoft);
  $Result1 = mysql_query($updateSQL, $crenesoft) or die(mysql_error());

  $updateGoTo = "fase7.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

$varUsuario_conusltaCanvas = "0";
if (isset($_SESSION["MM_idusuario"])) {
  $varUsuario_conusltaCanvas = $_SESSION["MM_idusuario"];
}
mysql_select_db($database_crenesoft, $crenesoft);
$query_conusltaCanvas = sprintf("SELECT * FROM canvas WHERE canvas.idcanvas = %s", GetSQLValueString($varUsuario_conusltaCanvas, "int"));
$conusltaCanvas = mysql_query($query_conusltaCanvas, $crenesoft) or die(mysql_error());
$row_conusltaCanvas = mysql_fetch_assoc($conusltaCanvas);
$totalRows_conusltaCanvas = mysql_num_rows($conusltaCanvas);

$varUsuario_imageness = "0";
if (isset($_SESSION["MM_idusuario"])) {
  $varUsuario_imageness = $_SESSION["MM_idusuario"];
}
mysql_select_db($database_crenesoft, $crenesoft);
$query_imageness = sprintf("SELECT * FROM imagenes_plan_canvas WHERE imagenes_plan_canvas.idimgcanvas = %s", GetSQLValueString($varUsuario_imageness, "int"));
$imageness = mysql_query($query_imageness, $crenesoft) or die(mysql_error());
$row_imageness = mysql_fetch_assoc($imageness);
$totalRows_imageness = mysql_num_rows($imageness);
?>
<!doctype html>
<html><!-- InstanceBegin template="/Templates/default1.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf-8">
<!-- InstanceBeginEditable name="doctitle" -->
<title>Atividades clave</title>
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
  	function cargarimagensiete()
  	{
	  self.name = 'opener'; //degfine com ose llama esta ventana
	  remote = open('gestionimagen_plan_canvas7.php', 'remote', 'width=400, height=150, location=no, scrollbars=yes, menubars=no, resizable=yes, fullscreen=no, status=yes'); //propieades de las imagenes
	  remote.focus(); // esta ventanda que se abio pase a primer plano
	  }
  
  </script>
<fieldset class="well">
		<legend>Atividades clave</legend>
        <p align="justify"><h4>No hay duda de que todo modelo de negocios <a class="etapa">requiere establecer una serie de actividades para funcionar correctamente</a>, pero no son las mismas para todos los negocios, ni todas las actividades son clave. Con esto en mente, mira los bloques en los que has trabajado y piensa cuáles encierran actividades verdaderamente determinantes para el éxito de tu negocio en específico.</h4></p>

<p align="justify"><h4><a class="etapa">Un negocio puede verse como una serie de actividades o procesos.</a> Dependiendo del giro y de la manera en la que generas ingresos, algunas actividades son más importantes que otras. Así, por ejemplo, si vendes por Internet, la seguridad en el manejo de transacciones y la administración de datos del cliente son actividades muy importantes; por lo que debes poner especial atención en invertir en la tecnología de protección adecuada y, de ser posible, en obtener una certificación que avale la seguridad de tu sitio. Otro ejemplo es el de las farmacéuticas, cuya constante búsqueda de innovación exige que su actividad central sea la de investigación y desarrollo; o el de un sitio web cuyos ingresos se basan en publicidad, necesitará incluir actividades generadoras de mucho tráfico.</h4></p>

<p align="justify"><h4><a class="etapa">¿Qué más es una actividad clave? En sí mismo, los bloques anteriores las definen.</a> ¿Acaso no es una actividad clave llegar al mercado? ¿Lo que hagas para mantenerte comunicado con tus clientes? ¿Establecer canales de distribución eficientes? ¡Tranquilo! Yves Pigneur y Alex Osterwalder, los creadores del Canvas, te sugieren una <a class="etapa">clasificación sencilla que puedes usar para establecer tus actividades clave.</a></h4></p>

<p align="justify"><h4><a class="etapa">Actividades de Producción:</a> Los procesos de diseño, fabricación y entrega de un producto son generalmente actividades clave. Sobre todo si se requieren hacer en gran escala o con una calidad superior. Esto es importante, sobre todo, para empresas de manufactura y reparación.</h4></p>

<p align="justify"><h4><a class="etapa">Actividades de Solución de problemas:</a> Si tu oferta es materializar tu creatividad y tu conocimiento en soluciones para los problemas individuales de tus clientes, la actividad de solución es clave. Se ve todos los días en los hospitales, en las consultorías de negocios y en las agencias publicitarias; las soluciones hechas a la medida requieren que planees bien la administración del conocimiento de tus empleados/socios y que estos estén entrenados y actualizados.</h4></p>

<p align="justify"><h4><a class="etapa">Actividades de Creación de plataformas y construcción de redes:</a> Si estás intentando crear una plataforma de negocios o una red social, su actualización y mantenimiento son clave. Imagina qué pasaría si Facebook se mantuviera como cuando fue lanzada, difícilmente seguiría en el mercado; o qué pasaría si un banco que intenta crear una plataforma en línea no invirtiera en seguridad en el sitio. En general, en plataformas son clave las actividades de  administración, provisión del servicio y promoción de la plataforma. </h4></p>

<p align="justify"><h4>Al final, lo importante es que sepas reconocer cuáles son las actividades en las que te tienes que lucir y volverte un experto en ellas.</h4></p>
       	  <div id="wrap">
            <form method="post" name="form1" action="<?php echo $editFormAction; ?>">
              <table align="center">
                <tr valign="baseline">
                  <td nowrap align="right" valign="top"></td>
                  <td><textarea name="actividades" cols="50" style="width:190%" rows="10"><?php echo htmlentities($row_conusltaCanvas['actividades'], ENT_COMPAT, 'utf-8'); ?></textarea></td>
                </tr>
                <tr valign="baseline">
                  <td nowrap align="right">&nbsp;</td>
                  <td><input type="submit" class="btn btn-primary" value="Guardar"></td>
                </tr>
              </table>
              <input type="hidden" name="MM_update" value="form1">
              <input type="hidden" name="idcanvas" value="<?php echo $row_conusltaCanvas['idcanvas']; ?>">
            </form>
<fieldset class="well">
      <legend align="center">¡Selecciona una imagen para despues de esta etapa!</legend>
            <form method="post" name="form2" action="<?php echo $editFormAction; ?>">
            <div align="right" id="datos_usuario" class="span5">
                    <input type="hidden" name="imagen7" value="<?php echo htmlentities($row_imageness['imagen7'], ENT_COMPAT, 'utf-8'); ?>" size="32">
  <table align="center" cellpadding="4" cellspacing="4">
    <tr valign="baseline">
      <td rowspan="2" align="right" nowrap><img src="imagenes/plan_canvas/<?php echo $row_imageness['imagen7']; ?>" width="190" height="100"></td>
      <td><input type="button" name="button" onClick="javascript:cargarimagensiete();" class="btn btn-success" title="Si deseas saber como hacer un logo o imagen PNG con photoshopCS6 escribe en el link de ¿Dudas?" id="button" value="Cargar imagen"></td>
    </tr>
    <tr valign="baseline">
      <td><input type="submit"  class="btn btn-primary" value="Guardar Img"></td>
    </tr>
  </table>
  <input type="hidden" name="MM_update" value="form2">
  <input type="hidden" name="idimgcanvas" value="<?php echo $row_imageness['idimgcanvas']; ?>">
</form> 
   </div>
           </fieldset>
           </div>
</fieldset>
       
        <a class="btn btn-success" href="modelo_canvas_index.php">Regresar a etapas</a>
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
mysql_free_result($conusltaCanvas);

mysql_free_result($imageness);
?>