<?php require_once('Connections/crenesoft.php'); ?>
<?php if((isset($_SESSION['MM_Username'])) && ($_SESSION['MM_Username'] != ""))
{
	echo "EMPRESA: "; echo ObtenerNombreUsuario($_SESSION['MM_idusuario']);
	?> 
<a id="fa_welcome" href="/vighubjson/usuario_modifica/">(Edit)</a> ...... <a href="/vighubjson/cerrar_sesion/"> Log out</a>

<?php }
else
{
?>	
	<a id="fa_welcome" href="/vighubjson/"/>Log in user</a>
   
<?php }?>