<?php require_once('Connections/crenesoft.php'); ?>
<?php if((isset($_SESSION['MM_Username'])) && ($_SESSION['MM_Username'] != ""))
{
	echo "EMPRESA: "; echo ObtenerNombreUsuario($_SESSION['MM_idusuario']);
	?> 
<a id="fa_welcome" href="usuario_modifica.php">(Edit)</a> ...... <a href="cerrar_sesion.php"> Log out</a>

<?php }
else
{
?>	
	<a id="fa_welcome" href="index.php">Log in user</a>
   
<?php }?>
