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
  $updateSQL = sprintf("UPDATE vpn_tir_normal SET tasa_interes=%s, inicial=%s, primer_ano=%s, segundo_ano=%s, tercer_ano=%s, cuarto_ano=%s, quinto_ano=%s, resultado=%s, resultado1=%s WHERE idsuma=%s",
                       GetSQLValueString($_POST['tasa_interes'], "double"),
                       GetSQLValueString($_POST['inicial'], "double"),
                       GetSQLValueString($_POST['primer_ano'], "double"),
                       GetSQLValueString($_POST['segundo_ano'], "double"),
                       GetSQLValueString($_POST['tercer_ano'], "double"),
                       GetSQLValueString($_POST['cuarto_ano'], "double"),
                       GetSQLValueString($_POST['quinto_ano'], "double"),
                       GetSQLValueString($_POST['resultado'], "double"),
					   GetSQLValueString($_POST['resultado1'], "double"),
                       GetSQLValueString($_POST['idsuma'], "int"));

  mysql_select_db($database_crenesoft, $crenesoft);
  $Result1 = mysql_query($updateSQL, $crenesoft) or die(mysql_error());

  $updateGoTo = "exito_normal.php";
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
$query_Recordset1 = sprintf("SELECT * FROM vpn_tir_normal WHERE vpn_tir_normal.idsuma = %s", GetSQLValueString($varUsuario_Recordset1, "int"));
$Recordset1 = mysql_query($query_Recordset1, $crenesoft) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
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
function sumar() { 
var n1 = parseInt(document.form1.tasa_interes.value); 
var n3 = parseInt(document.form1.primer_ano.value);
var n2 = parseInt(document.form1.inicial.value); 
var n4 = parseInt(document.form1.segundo_ano.value); 
var n5 = parseInt(document.form1.tercer_ano.value); 
var n6 = parseInt(document.form1.cuarto_ano.value); 
var n7 = parseInt(document.form1.quinto_ano.value);

document.form1.tasa_interes.value= n1/100;

document.form1.resultado.value=  
((((n3/n1)+
(n4/n1)+
(n5/n1)+
(n6/n1)-n2)+
(n7-n3))/5); 
document.form1.resultado1.value= (n1/100)-n2+(n3/1+n1)*(n3/100)+(n4/1+n1)*((n4/100)*2)+(n5/1+n1)*((n5/100)*3)+(n5/1+n1)*((n5/100)*3)+(n6/1+n1)*((n6/100)*4)+(n7/1+n1)*((n7/100)*2) ;
} 
</script>

<fieldset class="well">
	<div id="datos_personales" class="span5">		
		<fieldset class="well">
        <legend>Ingreso inicial y Tasa</legend>
        
			<div class="span4">
	  <label>Capital Inicial <span class="label label-info"> <a target="_blank" class="linkeos" title="Corresponde al monto o valor del desembolso que la empresa hará en el momento de contraer la inversión.  En este monto se pueden encontrar:  El valor de los activos fijos, la inversión diferida y el capital de trabajo. ">Ver mas</a></span></label>
<form method="post"  name="form1" action="<?php echo $editFormAction; ?>">
  <input type="number" title="Necesita un numero" autocomplete="off" required  onChange="sumar()" name="inicial"   value="<?php echo htmlentities($row_Recordset1['inicial'], ENT_COMPAT, 'utf-8'); ?>" size="32">
  </div>
			<div class="span4">
				<label>Tasa de Descuento <span class="label label-info"> <a target="_blank" class="linkeos" title="La tasa de descuento es la tasa de retorno requerida sobre una inversión.  La tasa de descuento refleja la oportunidad perdida de gastar o invertir en el presente por lo que también se le conoce como costo o tasa de oportunidad.">Ver mas</a></span></label>
  <input type="text" onChange="sumar()"  name="tasa_interes"  value="<?php echo htmlentities($row_Recordset1['tasa_interes'], ENT_COMPAT, 'utf-8'); ?>" size="32">
  	</div>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
<input type="submit" class="btn btn-primary" value="Continuar" align="right">
    </fieldset>
    </div>
	<div id="datos_usuario" class="span5">
		<fieldset class="well">
			<legend>Flujo Neto de Efectivo (FNE) a 5 años <span class="label label-info"> <a target="_blank" class="linkeos" title="Del estado de resultados del proyecto (pronóstico), se toman los siguientes rubros con sus correspondientes valores: los resultados contables (utilidad o pérdida neta), la depreciación, las amortizaciones de activos diferidos y las provisiones.  Estos resultados se suman entre sí y su resultado, positivo o negativo será el flujo neto de efectivo de cada periodo proyectado.">Ver mas</a></span></legend>
			<div class="span4">
            <label>Primer año <span class="label label-info"> <a target="_blank" class="linkeos" title="el flujo neto de efectivo (la cantidad de dinero en efectivo, entradas menos salidas) en el tiempo 1">Ver mas</a></span></label>
  <input type="text" name="primer_ano"  onChange="sumar()" value="<?php echo htmlentities($row_Recordset1['primer_ano'], ENT_COMPAT, 'utf-8'); ?>" size="32">
 
 
 <label>Segundo año <span class="label label-info"> <a target="_blank" class="linkeos" title="el flujo neto de efectivo (la cantidad de dinero en efectivo, entradas menos salidas) en el tiempo 2">Ver mas</a></span></label> 
  <input type="text" name="segundo_ano"  onChange="sumar()" value="<?php echo htmlentities($row_Recordset1['segundo_ano'], ENT_COMPAT, 'utf-8'); ?>" size="32">
  
  <label>Tercer año <span class="label label-info"> <a target="_blank" class="linkeos" title="el flujo neto de efectivo (la cantidad de dinero en efectivo, entradas menos salidas) en el tiempo 3">Ver mas</a></span></label>
  <input type="text" name="tercer_ano"  onChange="sumar()" value="<?php echo htmlentities($row_Recordset1['tercer_ano'], ENT_COMPAT, 'utf-8'); ?>" size="32">
  
  <label>Cuarto año <span class="label label-info"> <a target="_blank" class="linkeos" title="el flujo neto de efectivo (la cantidad de dinero en efectivo, entradas menos salidas) en el tiempo 4">Ver mas</a></span></label>
  <input type="text" name="cuarto_ano"  onChange="sumar()" value="<?php echo htmlentities($row_Recordset1['cuarto_ano'], ENT_COMPAT, 'utf-8'); ?>" size="32">
  
  <label>Quinto año <span class="label label-info"> <a target="_blank" class="linkeos" title="el flujo neto de efectivo (la cantidad de dinero en efectivo, entradas menos salidas) en el tiempo 5">Ver mas</a></span></label>
  <input type="text" name="quinto_ano"  onChange="sumar()" value="<?php echo htmlentities($row_Recordset1['quinto_ano'], ENT_COMPAT, 'utf-8'); ?>" size="32">
  
      <input type="text" name="resultado" onFocus="this.blur(); return false" value="<?php echo htmlentities($row_Recordset1['resultado'], ENT_COMPAT, 'utf-8'); ?>" size="32">
      
      <input type="text" name="resultado1" onFocus="this.blur(); return false" value="<?php echo htmlentities($row_Recordset1['resultado1'], ENT_COMPAT, 'utf-8'); ?>" size="32">
  <input type="hidden" name="MM_update" value="form1">
  <input type="hidden" name="idsuma" value="<?php echo $row_Recordset1['idsuma']; ?>">
</form>

</div>
		</fieldset>
	</div>
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
      <h2>SOBRE VIgtech | GHS</h2>
         
          Esta plataforma web está desarrollada única y exclusivamente con fines de emprendimiento y busca brindar al usuario la posibilidad de realizar vigilancia tecnologica con los datos de la plataforma GitHub
          
           </div>
        <h6 align="center">
				Este sitio está optimizado para <a href="https://www.google.com/intl/es/chrome/browser/?hl=es" target="_blank"><img src="imagenes/crenesoft/icon_google.png"> Google Chrome </h6></div></div></div></div>
</body>
<!-- InstanceEnd --></html>
