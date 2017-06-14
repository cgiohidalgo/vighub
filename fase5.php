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
  $updateSQL = sprintf("UPDATE canvas SET flujos=%s WHERE idcanvas=%s",
                       GetSQLValueString($_POST['flujos'], "text"),
                       GetSQLValueString($_POST['idcanvas'], "int"));

  mysql_select_db($database_crenesoft, $crenesoft);
  $Result1 = mysql_query($updateSQL, $crenesoft) or die(mysql_error());

  $updateGoTo = "fase5.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form2")) {
  $updateSQL = sprintf("UPDATE imagenes_plan_canvas SET imagen5=%s WHERE idimgcanvas=%s",
                       GetSQLValueString($_POST['imagen5'], "text"),
                       GetSQLValueString($_POST['idimgcanvas'], "int"));

  mysql_select_db($database_crenesoft, $crenesoft);
  $Result1 = mysql_query($updateSQL, $crenesoft) or die(mysql_error());

  $updateGoTo = "fase5.php";
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
<title>Flujos de ingreso</title>
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
  	function cargarimagencinco()
  	{
	  self.name = 'opener'; //degfine com ose llama esta ventana
	  remote = open('gestionimagen_plan_canvas5.php', 'remote', 'width=400, height=150, location=no, scrollbars=yes, menubars=no, resizable=yes, fullscreen=no, status=yes'); //propieades de las imagenes
	  remote.focus(); // esta ventanda que se abio pase a primer plano
	  }
  
  </script>
<fieldset class="well">
		<legend>Flujos de ingreso</legend>
       <p align="justify"><h4> ahora te hablaremos de cómo identificar posibles fuentes de ingreso.</h4></p>

<p align="justify"><h4>Si el cliente es el corazón del modelo de negocios, <a class="etapa">el flujo de ingresos es lo que lo mantendrá latiendo.</a> Para los nuevos proyectos el objetivo será identificar fuentes de ingreso, mientras que para los proyectos ya existentes el objetivo será pensar si la manera en la que se están generando es la mejor posible.</h4></p>

<p align="justify"><h4>Parte siempre de los segmentos de clientes que hasta ahora has identificado y <a class="etapa">reflexiona quiénes son los que están dispuestos a pagar más</a> por los diferentes aspectos de tu servicio. Esto no quiere decir que los segmentos menos rentables no puedan llegar a serlo (de hecho por eso existen los nichos de mercado), simplemente te dará una idea sobre qué puedes ofrecerle a cada uno, dada su capacidad de pago.</h4></p>

<p align="justify"><h4>Alex Osterwalder y Yves Pigneur nos comparten <a class="etapa">algunas maneras de generar ingresos:</a></h4></p>

<p align="justify">- Por la <a class="etapa">venta</a> de bienes o servicios.</p>

<p align="justify">- Cobrando una <a class="etapa">cuota por el uso</a> de un servicio; a mayor uso, mayor pago.</p>

<p align="justify">- Cobrando una <a class="etapa">suscripción o membresía</a> por el uso indefinido de un servicio durante un período.</p>

<p align="justify">- <a class="etapa">Prestar, rentar o alquilar</a> algo. Es interesante porque permite a las personas usar un bien sin tener que invertir en su adquisición.</p>

<p align="justify">- <a class="etapa">Licenciar el uso</a>, no la propiedad, de un producto protegido por derechos de propiedad intelectual.</p></p>

<p align="justify">- Cobrar <a class="etapa">comisión por Corretaje.</a> Si tienes un servicio de intermediación entre dos o más partes, puedes tomar un porcentaje de las transacciones efectuadas entre ambos. Por ejemplo, Mercado libre. </p></p>

<p align="justify">- Cobrar por <a class="etapa">espacios publicitarios.</a></p></p>

<p align="justify"><h4>Lo que es común a todas ellas es la <a class="etapa">necesidad de definir tu precio.</a> Entendemos que esto no siempre es fácil; hay expertos y toda una literatura en torno al tema. Sin embargo, lo que podemos recomendarte al hacer tu Canvas es que recuerdes que estás haciendo un prototipo, que te atrevas a proponer un precio o rangos de precios y que le preguntes a tu equipo de trabajo o a diferentes personas qué opinan sobre el monto que has establecido. Con esto podrás tener una idea de en qué rango debería oscilar el precio que la gente pagaría por tu oferta.</h4></p>

<p align="justify"><h4>Ten en mente que <a class="etapa">“los precios hablan” y comunican información relativa a la posición del producto</a> o servicio respecto a la de la competencia. Por ejemplo, un precio alto típicamente está asociado a calidad o a exclusividad; mientras que un precio demasiado bajo podría inspirar dudas sobre el desempeño de lo que ofreces.</h4></p>
       	  <div id="wrap">
            <form method="post" name="form1" action="<?php echo $editFormAction; ?>">
              <table align="center">
                <tr valign="baseline">
                  <td nowrap align="right" valign="top"></td>
                  <td><textarea name="flujos" cols="50" style="width:190%" rows="10"><?php echo htmlentities($row_conusltaCanvas['flujos'], ENT_COMPAT, 'utf-8'); ?></textarea></td>
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
                    <input type="hidden" name="imagen5" value="<?php echo htmlentities($row_imageness['imagen5'], ENT_COMPAT, 'utf-8'); ?>" size="32">
  <table align="center" cellpadding="4" cellspacing="4">
    <tr valign="baseline">
      <td rowspan="2" align="right" nowrap><img src="imagenes/plan_canvas/<?php echo $row_imageness['imagen5']; ?>" width="190" height="100"></td>
      <td><input type="button" name="button" onClick="javascript:cargarimagencinco();" class="btn btn-success" title="Si deseas saber como hacer un logo o imagen PNG con photoshopCS6 escribe en el link de ¿Dudas?" id="button" value="Cargar imagen"></td>
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
