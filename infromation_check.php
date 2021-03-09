<?php
	
	$servidor = "localhost";
	$usuario = "root";
	$contrasenia = "holamundo";
	$base_datos = "usuarios";
	mysql_pconnect($servidor, $usuario, $contrasenia) or 
		die("Error al intentar conectar a la base de datos. " . mysql_error());
	
	mysql_select_db($base_datos)
		or die("Error al intentar usar la base de datos. " . mysql_error());
	

	
	
	
	if (isset($_POST['idea']))
	{
	// Obtener el numero del grupo
		$query = "INSERT INTO `datos_basicos` (`id`, `grupo`, `idea`,  `objetivo` ,`necesidad`,`ventaja`) VALUES (DEFAULT, ";
		$idea = $_POST["idea"];
		$objetivo = $_POST["objetivo"];
		$necesidad = $_POST['necesidad'];
		$ventaja = $_POST['ventaja'];
		$grupo = $_SESSION['grupo'];
		$query .= "'$grupo', '$idea', '$objetivo', '$necesidad', '$ventaja');";
		mysql_query($query)
			or die("Error al intentar insertar los datos: " . $query . " " . mysql_error());
		$nombre_completo = $nombres . ' ' . $apellidos;
		header("Location: ../pagina_usuario.php?usuario=");
	}
	else 
	{
		echo "Fallo al recibir POST";
	}
?>