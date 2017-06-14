<?php if (!isset($_SESSION)) {
  session_start();
}?>
<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_crenesoft = "mysql10.000webhost.com";
$database_crenesoft = "a3020425_crene";
$username_crenesoft = "a3020425_crene";
$password_crenesoft = "holamundo123";
$crenesoft = mysql_pconnect($hostname_crenesoft, $username_crenesoft, $password_crenesoft) or trigger_error(mysql_error(),E_USER_ERROR);
?>

<?php 
	if (is_file("includes/funciones.php")){ 
	include("includes/funciones.php"); 
	}
	else
	{
		include("../includes/funciones.php"); 
		}
?>