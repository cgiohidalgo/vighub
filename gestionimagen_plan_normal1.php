<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

<?php if ((isset($_POST["enviado"])) && ($_POST["enviado"] == "form1")){
	
	$nombre_archivo = $_FILES['userfile']['name'];
	move_uploaded_file($_FILES['userfile']['tmp_name'],"imagenes/plan_normal/".$nombre_archivo);
	
	?>
    <script>  
    	opener.document.form14.imagen2.value="<?php echo $nombre_archivo; ?>";
		self.close();
    </script>
	<?php
}
else {
?>
<form action="gestionimagen_plan_normal1.php" method="post" enctype="multipart/form-data" id="form1">

  <p>
    <input name="userfile" type="file" />
  </p>
  <p>
    <input type="submit" name="button" id="button" value="Subir imagen" />
  </p>
  <input type="hidden" name="enviado" value="form1" />
</form>
<?php } ?>
</body>
</html>