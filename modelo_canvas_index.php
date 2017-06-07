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
?>
<!doctype html>
<html><!-- InstanceBegin template="/Templates/default1.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf-8">
<!-- InstanceBeginEditable name="doctitle" -->
<title>Documento sin título</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
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
      	 
		<fieldset class="well">
			<legend>Modelo Canvas</legend>
               
				<label>Nota</label>
            <fieldset class="well well-small">
           
            <object align="right"  classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="640" height="360" id="FLVPlayer">
              <param name="movie" value="FLVPlayer_Progressive.swf" />
              <param name="quality" value="high">
              <param name="wmode" value="opaque">
              <param name="scale" value="noscale">
              <param name="salign" value="lt">
              <param name="FlashVars" value="&amp;MM_ComponentVersion=1&amp;skinName=Clear_Skin_1&amp;streamName=imagenes/crenesoft/ModeloCanvas&amp;autoPlay=false&amp;autoRewind=false" />
              <param name="swfversion" value="8,0,0,0">
              <!-- Esta etiqueta param indica a los usuarios de Flash Player 6.0 r65 o posterior que descarguen la versión más reciente de Flash Player. Elimínela si no desea que los usuarios vean el mensaje. -->
              <param name="expressinstall" value="Scripts/expressInstall.swf">
              <!-- La siguiente etiqueta object es para navegadores distintos de IE. Ocúltela a IE mediante IECC. -->
              <!--[if !IE]>-->
              <object type="application/x-shockwave-flash" data="FLVPlayer_Progressive.swf" width="640" height="360">
                <!--<![endif]-->
                <param name="quality" value="high">
                <param name="wmode" value="opaque">
                <param name="scale" value="noscale">
                <param name="salign" value="lt">
                <param name="FlashVars" value="&amp;MM_ComponentVersion=1&amp;skinName=Clear_Skin_1&amp;streamName=imagenes/crenesoft/ModeloCanvas&amp;autoPlay=false&amp;autoRewind=false" />
                <param name="swfversion" value="8,0,0,0">
                <param name="expressinstall" value="Scripts/expressInstall.swf">
                <!-- El navegador muestra el siguiente contenido alternativo para usuarios con Flash Player 6.0 o versiones anteriores. -->
                <div>
                  <h4>El contenido de esta página requiere una versión más reciente de Adobe Flash Player.</h4>
                  <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Obtener Adobe Flash Player" /></a></p>
                </div>
                <!--[if !IE]>-->
              </object>
              <!--<![endif]-->
            </object>
         <p class="alert alert-warning">Se recomienda <strong>ver el video </strong>para  tener una mayor claridad de cómo funciona el modelo Canvas y tengas bien estructurado tu <strong>Plan de Negocio</strong> para tu <strong>Software. </strong></p>
        
          </fieldset>
         
        
        <div id="">
		<div class="center">

<legend>Seleccione la etapa en la que desea trabajar, aunque se recomienda comenzar por la etapa I</legend>
			<fieldset class="well">
          
			<ul class="three-column clearfix">
								<li class="clearfix item-0">
                                
                                <img width="100px" height="80px"src="imagenes/crenesoft/segmentos.png" onmouseover="this.width=620;this.height=293;" onmouseout="this.width=100;this.height=80;" width="100" height="80" />Fase I
				<a href="fase1.php"><h3>Segmentos de clientes</h3></a>
				<p>VIdentificar a qué clientes atender no es una tarea sencilla, pero si no lo haces tu proyecto no vivirá mucho tiempo, pues probablemente no atenderás bien a las personas u organizaciones ...</p>
                </li>
			  <li class="clearfix item-0">
				 <img width="100px" height="80px"src="imagenes/crenesoft/propuesta.png" onmouseover="this.width=620;this.height=293;" onmouseout="this.width=100;this.height=80;" width="100" height="80" />Fase II
				<a href="fase2.php"><h3>Propuesta de valor</h3></a>
				<p>Ya conoces la idea general del Business Model Canvas y ya identificaste uno o varios segmentos de clientes a los que quieres atender. Ahora, deberás pensar en la propuesta...</p>
			  </li>
              <li class="clearfix item-0">
				 <img width="100px" height="80px"src="imagenes/crenesoft/canales.png"
onmouseover="this.width=620;this.height=293;" onmouseout="this.width=100;this.height=80;" width="100" height="80" />Fase III
				<a href="fase3.php"><h3>Canales de distribucion</h3></a>
				<p>Es clave porque implica que el cliente tendrá una experiencia con tu marca, producto o servicio. Además, inevitablemente creará una imagen de ti y te asignará una reputación, por lo que...</p>
			  </li>
				<li class="clearfix item-0">
				 <img width="100px" height="80px"src="imagenes/crenesoft/relacion con el cliente.png" onmouseover="this.width=620;this.height=293;" onmouseout="this.width=100;this.height=80;" width="100" height="80" />Fase IV
				<a href="fase4.php"><h3>Relacion con el cliente</h3></a>
				<p>Las relaciones que tu compañía establece con cada segmento de clientes debe ser cuidada porque el trato que les das les hace vivir una experiencia...</p>
				</li>

<li class="clearfix item-0">
				 <img width="100px" height="80px"src="imagenes/crenesoft/flujos.png" onmouseover="this.width=620;this.height=293;" onmouseout="this.width=100;this.height=80;" width="100" height="80" />Fase V
				<a href="fase5.php"><h3>Flujos de ingreso</h3></a>
				<p>Si el cliente es el corazón del modelo de negocios, el flujo de ingresos es lo que lo mantendrá latiendo.</a> Para los nuevos proyectos el objetivo será...</p>
			  </li>

<li class="clearfix item-0">
				<img width="100px" height="80px"src="imagenes/crenesoft/recursos.png"onmouseover="this.width=620;this.height=293;" onmouseout="this.width=100;this.height=80;" width="100" height="80" />Fase VI
				<a href="fase6.php"><h3>Recrusos clave</h3></a>
				<p>Recapitulemos un poco. Ya conoces la idea general del Canvas, identificaste a los clientes que te gustaría atender, definiste una propuesta de valor...</p>
			  </li>
				<li class="clearfix item-0">
				 <img width="100px" height="80px"src="imagenes/crenesoft/c.png" onmouseover="this.width=620;this.height=293;" onmouseout="this.width=100;this.height=80;" width="100" height="80" />Fase VII
				<a href="fase7.php"><h3>Atividades clave</h3></a>
				<p>requiere establecer una serie de actividades para funcionar correctamente, pero no son las mismas para todos los negocios, ni todas las actividades...</p>
				</li>
				
                <li class="clearfix item-0">
				 <img width="100px" height="80px"src="imagenes/crenesoft/c.png" onmouseover="this.width=620;this.height=293;" onmouseout="this.width=100;this.height=80;" width="100" height="80" />Fase VIII
				<a href="fase8.php"><h3>Rede de partners</h3></a>
				<p>Éstas se dan con quiénes subcontratas procesos. algunas actividades se externalizan y algunos recursos se obtienen fuera de la empresa...</p>
			  </li>
			  </ul></fieldset>

			<pl><big class="highlighted message"><a href="continua_canvas.php">Continuar con con el PLAN!</a> La Fase IX (Estructura de costos) no se encuentra en la lista porque aún no termina tu plan cuando esté listo todo CreneSoft te ayudara a sacar el costo total. </big></pl>

		</div><!-- /center -->
	</div>
        
        
		<script type="text/javascript">
swfobject.registerObject("FLVPlayer");
        </script>
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