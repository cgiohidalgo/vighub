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
<title>Documento sin título</title>
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
          <div id="itemnavtop"><ul id="menu-topnav" class="menu sf-js-enabled sf-shadow"><li class="principal"><a href="inicio.php" title="Ir al inicio">Home</a></li><li id="menu-item-3772" class="tutoriales menu-item menu-item-type-taxonomy menu-item-object-category current-post-ancestor menu-item-3772"><a href="#" class="sf-with-ul">Help<span class="sf-sub-indicator"> »</span></a><ul class="sub-menu sf-js-enabled sf-shadow">
            
          
          <li id="menu-item-3774" class="menu-item menu-item-type-taxonomy menu-item-object-category current-post-ancestor current-menu-parent current-post-parent menu-item-3774"><a href="https://media.readthedocs.org/pdf/conociendogithub/latest/conociendogithub.pdf" target="_blank" >GitHub</a></li>
          
            
          <li id="menu-item-3774" class="menu-item menu-item-type-taxonomy menu-item-object-category current-post-ancestor current-menu-parent current-post-parent menu-item-3774"><a href="../webroot/archivos/manual.pdf" target="_blank" >Manual</a></li><li id="menu-item-3778" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3778"><a href="../webroot/archivos/architecture.pdf">Vighub architecture</a></li></ul></li></a>

          <li id="menu-item-3768" class="descargas menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3768"><a href="#">Resource<span class="sf-sub-indicator"> »</span></a><ul class="sub-menu sf-js-enabled sf-shadow"><li id="menu-item-3764" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3764"><a href="Copia_seguridad.php">Backup</a></li><li id="menu-item-3770" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3770"></li></ul></li></ul></div>
          
          <?php }?>
           <?php if($_SESSION['MM_UserGroup']=='Usuario'){?>
    <div id="itemnavtop"><ul id="menu-topnav" class="menu sf-js-enabled sf-shadow"><li class="principal"><a href="inicio.php" title="Ir al inicio">Home</a></li><li id="menu-item-3772" class="tutoriales menu-item menu-item-type-taxonomy menu-item-object-category current-post-ancestor menu-item-3772"><a href="#" class="sf-with-ul">Help<span class="sf-sub-indicator"> »</span></a><ul class="sub-menu sf-js-enabled sf-shadow">
            
          
          <li id="menu-item-3774" class="menu-item menu-item-type-taxonomy menu-item-object-category current-post-ancestor current-menu-parent current-post-parent menu-item-3774"><a href="https://media.readthedocs.org/pdf/conociendogithub/latest/conociendogithub.pdf" target="_blank" >GitHub</a></li>
          
            
          <li id="menu-item-3774" class="menu-item menu-item-type-taxonomy menu-item-object-category current-post-ancestor current-menu-parent current-post-parent menu-item-3774"><a href="../webroot/archivos/manual.pdf" target="_blank" >Manual</a></li><li id="menu-item-3778" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3778"><a href="../webroot/archivos/architecture.pdf">Vighub architecture</a></li></ul></li></a>

          <li id="menu-item-3768" class="descargas menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3768"><a href="#">Resource<span class="sf-sub-indicator"> »</span></a><ul class="sub-menu sf-js-enabled sf-shadow"><li id="menu-item-3764" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3764"><a href="Copia_seguridad.php">Backup</a></li><li id="menu-item-3770" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3770"></li></ul></li></ul></div>
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
      
       <div id="contenedor_formulario" class="well">

       <fieldset class="well">
      <legend align="center">¡Categorias!</legend>

           <div id="datos_usuario" class="span5">
		<!--==============================================================-->
		<!-- Datos de usuario -->
		<!--==============================================================-->
		<fieldset class="well">
			<!--==============================================================-->
			<!-- Titulo para el formulario -->
			<!--==============================================================-->
			<legend align="center">Nueva categoria</legend>
			<div align="center" class="span4">
        <table width="100%"  border="1" align="center"  cellpadding="1" cellspacing="2">
  <tr align="center">
    <th >Nombre de categoria</th>
    <th align="center" >¿Que hacer?</th>
  </tr>
  <?php do { ?>
  <tr>
    <td align="center"><?php echo $row_Recordset1['descripcion']; ?></td>
    <td align="center"><a href="categorias_editar.php?recordID=<?php echo $row_Recordset1['idcategoria']; ?>"><img src="imagenes/crenesoft/editar.png" width="38" height="38"></a>  <a href="categorias_eliminar.php?recordID=<?php echo $row_Recordset1['idcategoria']; ?>"><img src="imagenes/crenesoft/eliminar.png" width="38" height="38"></a></td>
  </tr>
  <?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?>
        </table>
        <p><a href="categorias_add.php">Añadir categoria de software</a></p>
		               </div>
           </fieldset>
           </div>
            <div align="right" id="datos_usuario" class="span5">
			<div class="span4">
           <img src="imagenes/crenesoft/bienvenidos.gif">
           </div>
           
           </div>
</fieldset></div>
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
      <p></p>
        
           </div>
        </div></div></div></div>
</body>
<!-- InstanceEnd --></html>
