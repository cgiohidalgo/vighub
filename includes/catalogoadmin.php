<?php require_once('../Connections/crenesoft.php'); ?>
<?php if((isset($_SESSION['MM_Username'])) && ($_SESSION['MM_Username'] != ""))
{
	echo "EMPRESA: "; echo ObtenerNombreUsuario($_SESSION['MM_idusuario']);
	?> 
    ......
<a id="fa_welcome" href="../cerrar_sesion.php"> Log Out</a>

<?php }
else
{
?>	
	<a id="fa_welcome" href="../index.php">Sing In </a>
    ......
    <a class="acceder" href="admin/index.php"> Administration</a>
<?php }?>
