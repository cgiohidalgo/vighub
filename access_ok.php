<?php
if (!isset($_SESSION)) {
  session_start();
}
$MM_authorizedUsers = "";
$MM_donotCheckaccess = "true";

// *** Restrict Access To Page: Grant or deny access to this page
function isAuthorized($strUsers, $strGroups, $UserName, $UserGroup) { 
  // For security, start by assuming the visitor is NOT authorized. 
  $isValid = False; 

  // When a visitor has logged into this site, the Session variable MM_Username set equal to their username. 
  // Therefore, we know that a user is NOT logged in if that Session variable is blank. 
  if (!empty($UserName)) { 
    // Besides being logged in, you may restrict access to only certain users based on an ID established when they login. 
    // Parse the strings into arrays. 
    $arrUsers = Explode(",", $strUsers); 
    $arrGroups = Explode(",", $strGroups); 
    if (in_array($UserName, $arrUsers)) { 
      $isValid = true; 
    } 
    // Or, you may restrict access to only certain users based on their username. 
    if (in_array($UserGroup, $arrGroups)) { 
      $isValid = true; 
    } 
    if (($strUsers == "") && true) { 
      $isValid = true; 
    } 
  } 
  return $isValid; 
}

$MM_restrictGoTo = "index.php";
if (!((isset($_SESSION['MM_Username'])) && (isAuthorized("",$MM_authorizedUsers, $_SESSION['MM_Username'], $_SESSION['MM_UserGroup'])))) {   
  $MM_qsChar = "?";
  $MM_referrer = $_SERVER['PHP_SELF'];
  if (strpos($MM_restrictGoTo, "?")) $MM_qsChar = "&";
  if (isset($_SERVER['QUERY_STRING']) && strlen($_SERVER['QUERY_STRING']) > 0) 
  $MM_referrer .= "?" . $_SERVER['QUERY_STRING'];
  $MM_restrictGoTo = $MM_restrictGoTo. $MM_qsChar . "accesscheck=" . urlencode($MM_referrer);
  header("Location: ". $MM_restrictGoTo); 
  exit;
}
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
		  <div class="sun-intro"><h1 id="VigHub">VigHub</h1>
	      
          
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
    <section id="principal">
    	<article> 
		<!-- InstanceBeginEditable name="Contenido" --> 
             
 <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script> 
                <script src="webroot/check.js"></script>
       <article> 
       <form action="inicio.php" method="post" name="form_check">

         <h1>haz entrado</h1>
        <p> 1.<strong>¿Qué es el Software libre?</strong></p>
		<div class="respuesta">
			<input type="radio" id="pregunta1_respuesta1" name="pregunta1_respuesta" value="Si" />
			Es la denominación del software que respeta la libertad de los usuarios sobre su producto adquirido y, 
			por tanto, una vez obtenido puede ser usado, copiado, estudiado, modificado y redistribuido libremente.
		</div>
		<div class="respuesta">
        <input type="radio" id="pregunta1_respuesta2" name="pregunta1_respuesta" value="no" />
        Es la denominación del software que no respeta la libertad de los usuarios sobre su producto adquirido y, 
        por tanto, una vez obtenido puede no ser usado, copiado, estudiado, modificado y redistribuido libremente.
		</div>
		<div class="respuesta">
        <input type="radio" id="pregunta1_respuesta3" name="pregunta1_respuesta" value="no" />
        Es la denominación del software que respeta la libertad de los usuarios sobre su producto adquirido 
        pero una vez obtenido no puede ser usado, copiado, estudiado, modificado y redistribuido libremente.
		</div>
		<div class="respuesta">
        <input type="radio" id="pregunta1_respuesta4" name="pregunta1_respuesta" value="no" />
        Ninguna de las anteriores.
		</div>
        <p> 2. <strong>¿Qué diferencia hay entre el software libre y el software gratuito?</strong></p>

		<div class="respuesta">
        <input type="radio" id="pregunta2_respuesta1" name="pregunta2_respuesta" value="Si" />
        El software libre propone compartir y mejorar  programas informáticos entre todos/as los usuarios/as, 
        para beneficio de una comunidad. El software gratuito normalmente, busca un servicio comercial que le beneficie 
        indirectamente a su proveedor.
		</div>
		<div class="respuesta">
        <input type="radio" id="pregunta2_respuesta2" name="pregunta2_respuesta" value="A veces" />
        El software libre permite el uso y la difusión libre, pudiendo incluso modificar el código del 
        programa para su adaptación a las necesidades del usuario, el software gratuito sólo permite su uso sin tener que pagar por ello.
		</div>
		<div class="respuesta">
        <input type="radio" id="pregunta2_respuesta3" name="pregunta2_respuesta" value="Si" />
        Todas las anteriores.
		</div>
		<div class="respuesta">
        <input type="radio" id="pregunta2_respuesta4" name="pregunta2_respuesta" value="Si" />
        Niguna de las anteriores.
		</div>

        <p> 3. <strong>¿Qué es la licencia copyleft?</strong></p>

		<div class="respuesta">
        <input type="radio" id="pregunta3_respuesta1" name="pregunta3_respuesta" value="Si" />
        Es una licencia que pone como condición que cualquier software mejorado siga estando a disposición de la 
        comunidad para su uso y difusión, como al principio.
		</div>
		<div class="respuesta">
        <input type="radio" id="pregunta3_respuesta2" name="pregunta3_respuesta" value="A veces" />
        Es una licencia que obliga a que el uso de los contenidos no pueda tener bonificación económica alguna para 
        quien haga uso de contenidos bajo esa licencia.
		</div>
		<div class="respuesta">
        <input type="radio" id="pregunta3_respuesta3" name="pregunta3_respuesta" value="Si" />
        Es una licencia que obliga a que esa obra sea distribuida inalterada, sin cambios.
		</div>
		<div class="respuesta">
        <input type="radio" id="pregunta3_respuesta4" name="pregunta3_respuesta" value="Si" />
        Niguna de las anteriores.
		</div>

        <p> 4. <strong>¿Qué son los repositorios?</strong></p>

		<div class="respuesta">
        <input type="radio" id="pregunta4_respuesta1" name="pregunta4_respuesta" value="Si" />
        Son una parte de un sistema o una red que están diseñados para bloquear el acceso no autorizado.
		</div>
		<div class="respuesta">
        <input type="radio" id="pregunta4_respuesta2" name="pregunta4_respuesta" value="A veces" />
        Son las actualizaciones y mejoras que podemos realizar en nuestro sistema operativo Linux, pueden ser 
        paquetes de idiomas o programas diversos.
		</div>
		<div class="respuesta">
        <input type="radio" id="pregunta4_respuesta3" name="pregunta4_respuesta" value="Si" />
        Son programas cuyo objetivo es detectar y eliminar virus informáticos.
		</div>
		<div class="respuesta">
        <input type="radio" id="pregunta4_respuesta4" name="pregunta4_respuesta" value="Si" />
        Niguna de las anteriores.
		</div>

        <p> 5. <strong>¿Qué es el kernel?</strong></p>
		<div class="respuesta">
        <input type="radio" id="pregunta5_respuesta1" name="pregunta5_respuesta" value="Si" />
        Un juego basado en software Libre.
		</div>
		<div class="respuesta">
        <input type="radio" id="pregunta5_respuesta2" name="pregunta5_respuesta" value="A veces" />
        Es el núcleo del sistema operativo. Coordina todos los programas del ordenador con su hardware.
		</div>
		<div class="respuesta">
        <input type="radio" id="pregunta5_respuesta3" name="pregunta5_respuesta" value="Si" />
        Todas las anteriores.
		</div>
		<div class="respuesta">
        <input type="radio" id="pregunta5_respuesta4" name="pregunta5_respuesta" value="Si" />
        Niguna de las anteriores.
		</div>
        <p> 6.<strong>¿Qué es código abierto?</strong></p>
		<div class="respuesta">
        <input type="radio" id="pregunta6_respuesta1" name="pregunta6_respuesta" value="Si" />
        Término con el que se conoce al código que se puede programar bajo cualquier lenguaje de programación.
		</div>
		<div class="respuesta">
        <input type="radio" id="pregunta6_respuesta2" name="pregunta6_respuesta" value="A veces" />
        Término con el que se conoce al software distribuido y desarrollado libremente.
		</div>
		<div class="respuesta">
        <input type="radio" id="pregunta6_respuesta3" name="pregunta6_respuesta" value="Si" />
        Término con el que se conoce a todos los lenguajes de programación.
		</div>
		<div class="respuesta">
        <input type="radio" id="pregunta6_respuesta4" name="pregunta6_respuesta" value="Si" />
        Niguna de las anteriores.
		</div>
        <p> 7. <strong>¿Quién creó Linux?</strong></p>
		<div class="respuesta">
        <input type="radio" id="pregunta7_respuesta1" name="pregunta7_respuesta" value="Si" />
        Linux Torbado
		</div>
		<div class="respuesta">
        <input type="radio" id="pregunta7_respuesta2" name="pregunta7_respuesta" value="A veces" />
        Louis Linux.
		</div>
		<div class="respuesta">
        <input type="radio" id="pregunta7_respuesta3" name="pregunta7_respuesta" value="Si" />
        Linus Torvalds.
		</div>
		<div class="respuesta">
        <input type="radio" id="pregunta7_respuesta4" name="pregunta7_respuesta" value="Si" />
        Niguna de las anteriores.
		</div>
        <p> 8. <strong>¿Cuál de las siguientes afirmaciones es correcta?</strong></p>
		<div class="respuesta">
        <input type="radio" id="pregunta8_respuesta1" name="pregunta8_respuesta" value="Si" />
        Ubuntu, Linex y Debian están basados en Software Libre.
		</div>
		<div class="respuesta">
        <input type="radio" id="pregunta8_respuesta2" name="pregunta8_respuesta" value="A veces" />
        Ubuntu, Linex y Windows están basados en Software Libre.
		</div>
		<div class="respuesta">
        <input type="radio" id="pregunta8_respuesta3" name="pregunta8_respuesta" value="Si" />
        Ubuntu, Linex y MAC están basados en Software Libre.
		</div>
		<div class="respuesta">
        <input type="radio" id="pregunta8_respuesta4" name="pregunta8_respuesta" value="Si" />
        Niguna de las anteriores.
		</div>
        <p> 9. <strong>¿Siempre es gratuito el software Libre?</strong></p>
		<div class="respuesta">
        <input type="radio" id="pregunta9_respuesta1" name="pregunta9_respuesta" value="Si" />
        Si, al ser Software Libre, implica gratuicidad.
		</div>
		<div class="respuesta">
        <input type="radio" id="pregunta9_respuesta2" name="pregunta9_respuesta" value="A veces" />
        No, lo que cuesta trabajo cuesta dinero.
		</div>
		<div class="respuesta">
        <input type="radio" id="pregunta9_respuesta3" name="pregunta9_respuesta" value="Si" />
        Depende del autor.
		</div>
		<div class="respuesta">
        <input type="radio" id="pregunta9_respuesta4" name="pregunta9_respuesta" value="Si" />
        Depende del sistema  operativo
		</div>
        <p> 10. <strong>¿En qué año comenzó el proyecto GNU?</strong></p>
		<div class="respuesta">
        <input type="radio" id="pregunta10_respuesta1" name="pregunta10_respuesta" value="Si" />
        2000
		</div>
		<div class="respuesta">
        <input type="radio" id="pregunta10_respuesta2" name="pregunta10_respuesta" value="A veces" />
        1984
		</div>
		<div class="respuesta">
        <input type="radio" id="pregunta10_respuesta3" name="pregunta10_respuesta" value="Si" />
        1961
		</div>
		<div class="respuesta">
        <input type="radio" id="pregunta10_respuesta4" name="pregunta10_respuesta" value="Si" />
        1963
		</div>
        <input type="submit" value="Comprobar" id="comprobar" />
        </article>
        
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
