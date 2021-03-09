<?php if (!isset($_SESSION)) {
  session_start();
}?>
<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_crenesoft = "nameserver";
$database_crenesoft = "database";
$username_crenesoft = "user";
$password_crenesoft = "pass";
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