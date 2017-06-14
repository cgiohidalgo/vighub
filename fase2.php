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
  $updateSQL = sprintf("UPDATE canvas SET propuesta=%s WHERE idcanvas=%s",
                       GetSQLValueString($_POST['propuesta'], "text"),
                       GetSQLValueString($_POST['idcanvas'], "int"));

  mysql_select_db($database_crenesoft, $crenesoft);
  $Result1 = mysql_query($updateSQL, $crenesoft) or die(mysql_error());

  $updateGoTo = "fase2.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form2")) {
  $updateSQL = sprintf("UPDATE imagenes_plan_canvas SET imagen2=%s WHERE idimgcanvas=%s",
                       GetSQLValueString($_POST['imagen2'], "text"),
                       GetSQLValueString($_POST['idimgcanvas'], "int"));

  mysql_select_db($database_crenesoft, $crenesoft);
  $Result1 = mysql_query($updateSQL, $crenesoft) or die(mysql_error());

  $updateGoTo = "fase2.php";
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
<title>Propuesta de valor</title>
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
  	function cargarimagendos()
  	{
	  self.name = 'opener'; //degfine com ose llama esta ventana
	  remote = open('gestionimagen_plan_canvas2.php', 'remote', 'width=400, height=150, location=no, scrollbars=yes, menubars=no, resizable=yes, fullscreen=no, status=yes'); //propieades de las imagenes
	  remote.focus(); // esta ventanda que se abio pase a primer plano
	  }
  
  </script>
<fieldset class="well">
		<legend>Propuesta de valor</legend>
        <p align="justify"><h4>Ya conoces la idea general del Business Model Canvas y ya identificaste uno o varios segmentos de clientes a los que quieres atender. Ahora, deberás pensar en la propuesta de valor que le harás a tus clientes. <a class="etapa">He aquí cómo atacar el tercer bloque del Canvas: el bloque de la Propuesta de Valor.</a></h4></p>

<p align="justify"><h4>Esencialmente, <a class="etapa">creas valor para tu cliente cuando le resuelves un problema de manera satisfactoria</a>, por lo que el beneficio que percibe al adquirir tus productos o servicios es mayor al precio que paga por ellos. Sin embargo, en este bloque sólo debes destacar qué necesidades de cada segmento de clientes quieres satisfacer y, específicamente, cuáles de sus problemas planeas resolver a través de una <a class="">oferta específica y concreta</a> de productos y servicios. A esto le llamamos "la base de la propuesta de valor". </h4></p>

<p align="justify"><h4>Recuerda que el Canvas no es un plan de negocios, sino una herramienta para proponer y equivocarse; por eso te recomiendo lo siguiente:</h4></p>

<p align="justify">- Piensa en generar una propuesta base y luego completala con <a class="etapa">elementos diferenciadores</a> que la conviertan en una propuesta única y difícilmente imitable.</p>

<p align="justify">- No te desvíes del objetivo. Por ahora <a class="etapa">no pienses en la sustentabilidad financiera</a> de tu propuesta, eso lo harás en otros bloques puesto que todavía no tienes los elementos para saber si tu idea es rentable o no.</p>

<p align="justify">- No pienses que es imposible ofrecer el servicio que tienes en mente. Si tu idea es buena, hay muchos inversionistas que estarán encantados de fondearla.</p>

<p align="justify"><h4>Dicho esto, estas son algunas de las maneras en que puedes crear valor con tus productos y servicios:</h4></p>

<p align="justify"><h4><a class="etapa">Ofreciendo novedad</a> - Puedes crear valor ofreciendo un concepto que satisface <a class="etapa">necesidades que tus clientes no sabían que tenían</a>, pues no existía una oferta similar a la tuya en el mercado. Esto ocurre sobre todo en industrias tecnológicas: piensa cómo el teléfono móvil o las redes sociales vinieron a cambiar la forma en que nos comunicamos y a hacernos descubrir la necesidad que algunas personas tenemos de estar hiperconectadas.</h4></p>

<p align="justify"><h4><a class="etapa">A través de mejoras en desempeño</a> - Puedes crear valor si logras mejorar el desempeño de un producto o servicio ya existente. Esto ocurre año con año cuando salen nuevas computadoras al mercado y traen mejores gráficos, mayor capacidad de procesamiento, mayor compatibilidad con otros productos, etcétera. Sin embargo, no siempre tendrás éxito, pues incluso las <a class="etapa">mejoras están limitadas por la demanda</a> de las personas. Por ponerte un ejemplo, piensa en cómo la tecnología Blu-Ray no ha sido ampliamente adoptada a pesar de ser un mejor estándar audiovisual, y es que las personas aún perciben al DVD como un excelente sustituto, toda vez que tiene un menor precio y que han invertido recursos para generar una colección de películas en otro formato.</h4></p>

<p align="justify"><h4><a class="etapa">Personalización</a> - Puedes crear valor al adaptar tus productos y servicios a las necesidades específicas de un cliente o grupo de clientes. Hay distintos grados de personalización; por ejemplo, puedes variar algunos atributos de tus productos, según los gustos de los clientes, pero con cambios predeterminados. O bien, puedes intentar atender específicamente las exigencias de un cliente en particular.</h4></p>

<p align="justify"><h4><a class="etapa">El valor de "cumplir con el trabajo"</a> - Un producto o servicio puede crear valor simplemente por ayudar a que el cliente pueda enfocarse en otras actividades, confiando que tu producto o servicio simplemente funciona y disminuirá sus costos de operación. Por ejemplo, todos los servicios de subcontratación.</h4></p>

<p align="justify"><h4><a class="etapa">Diseño</a> - Puedes crear valor si tu oferta destaca por un diseño superior; sin embargo, es un elemento difícil de medir. Por ejemplo, Apple se caracteriza por cuidar que sus productos sean muy bellos y minimalistas; si puedes crear un estilo de diseño propio, te distinguirás de la competencia y crearás una imagen agradable al cliente</h4></p>

<p align="justify"><h4><a class="etapa">Marca/status</a> - Los clientes pueden encontrar valor solo por usar y mostrar una marca. Pueden sentirse bien al usar un reloj Rolex, o conducir un automóvil de lujo.</h4></p>

<p align="justify"><h4><a class="etapa">Precio</a> - Ofrecer un valor similar a un menor precio, es una forma común de satisfacer las necesidades de aquellos segmentos de clientes que son sensibles al precio. Típicamente una estrategia de precios bajos, requerirá que reduzcas costos en otros elementos del negocio y que aspires a una ganancia por volumen, pero cada vez adquieren más valor los <a class="etapa">modelos tipo "Freemium"</a>. Bajo este esquema el producto/servicio es gratuito porque se prevé generar un ingreso por otros medios, por ejemplo, un blog o un periódico que planean ganar ingresos por publicidad.</h4></p>

<p align="justify"><h4><a class="etapa">Reducción de costos</a> - Si tu producto o servicio ayuda a <a class="etapa">que el cliente reduzca sus costos</a> de manera importante, ello es en si mismo una gran oferta de valor. Por ejemplo, si creas un buen software para administración de inventarios, permites que tu cliente evite el costo de desarrollar, instalar y administrar un sistema desde cero, y además lo beneficias al reducir los costos originados por mermas.</h4></p>

<p align="justify"><h4><a class="etapa">Reducción de riesgos</a> - Los clientes valoran aquello que les permite el reducir el riesgo en el que incurren al realizar una compra. Por ejemplo, al comprador de cualquier producto usado, siempre le traerá confianza que dicho producto cuente con una garantía de reparación.</h4></p>

<p align="justify"><h4><a class="etapa">Accesibilidad</a> - Hacer que tus productos y servicios estén disponibles para clientes que antes no podían acceder a ellos es otra forma de crear valor. No es directamente una reducción de precio, sino un resultado de nuevas tecnologías o de una forma de organizar la manera en la que entregas el bien a tus clientes. Por ejemplo, los fondos de inversión dieron acceso a personas que no tenían el monto necesario para invertir en instrumentos riesgosos; al final estas sustituyendo a un cliente grande por darle accesibilidad a varios clientes pequeños y ello puede funcionar.</h4></p>

<p align="justify"><h4><a class="etapa">Conveniencia y/o usabilidad</a> - Hacer <a class="etapa">cosas más convenientes o más fáciles de usar</a> puede crear un valor substancial. Piensa cómo Apple facilitó comprar, descargar y escuchar música digital a través de iTunes. Se creó un gran valor que en pocos años lo llevó a liderar ese mercado.</h4></p>

<p align="justify"><h4>Aquí termina el bloque de Propuesta de Valor. Vale la pena tomarse un tiempo en esta parte, ya que es donde te puedes poner creativo y diferenciarte de tus competidores. <a class="etapa">El valor es algo que se construye continuamente</a>, y tu propuesta es susceptible de ser actualizada; no dudes que regresarás a esta parte al revisar otros bloques del Canvas. </h4></p>
       	  <div id="wrap">
            <form method="post" name="form1" action="<?php echo $editFormAction; ?>">
              <table align="center">
                <tr valign="baseline">
                  <td nowrap align="right" valign="top"></td>
                  <td><textarea name="propuesta"  style="width:190%" cols="50" rows="10.5"><?php echo htmlentities($row_conusltaCanvas['propuesta'], ENT_COMPAT, 'utf-8'); ?></textarea></td>
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
                    <input type="hidden" name="imagen2" value="<?php echo htmlentities($row_imageness['imagen2'], ENT_COMPAT, 'utf-8'); ?>" size="32">
  <table align="center" cellpadding="4" cellspacing="4">
    <tr valign="baseline">
      <td rowspan="2" align="right" nowrap><img src="imagenes/plan_canvas/<?php echo $row_imageness['imagen2']; ?>" width="190" height="100"></td>
      <td><input type="button" name="button" onClick="javascript:cargarimagendos();" class="btn btn-success" title="Si deseas saber como hacer un logo o imagen PNG con photoshopCS6 escribe en el link de ¿Dudas?" id="button" value="Cargar imagen"></td>
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
