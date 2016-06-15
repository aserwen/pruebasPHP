
<html>
<head>
<title></title>
</head>

<body>
<?php echo "<h3>Editar Usuário: ".$_REQUEST['name']." </h3>"; ?>

<h3>Editar Usuario: <?php echo $_REQUEST['name']?></h3>


<form method="post" action="actualizate.php">
<table border="0" width="60%">
<tr>
	<td width="30%">Nombre:</td>
	<td>
		<input type="text" name="nuevonombre" value="<?php echo $_REQUEST['name']; ?>" />
	</td>
</tr>
<tr>
	<td width="30%">Email:</td>
	<td>
		<input type="text" name="nuevoemail" value="<?php echo $_REQUEST['email']; ?>" />
	</td>
</tr>
<tr>
	<td width="30%">Password:
	</td>
	<td>
		<input type="text" name="nuevopass" value="<?php echo $_REQUEST['pass']; ?>" />
	</td>
</tr>
</table>
<input type="submit" name="submit" value="Actualizar" />
<input type="hidden" name="id" value="<?php echo $_REQUEST['id'] ?>" />
</form>

<?php include("links.php"); ?>






</body>



</html>