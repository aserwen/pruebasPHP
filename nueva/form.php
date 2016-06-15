
<html>
<head>
<title>Registro</title>
</head>
<body>

<h2>Registro</h2>
<form method="post" action="insert.php">
<table border="0" width="60%" >
<tr><td width="10%">Nombre:</td><td><input type="text" name="name" value="introduce tu nombre" /></td></tr>
<tr><td width="10%">Email:</td><td><input type="text" name="email"value="introduce tu nombre" /></td></tr>
<tr><td width="10%">Pass:</td><td><input type="password" name="pass" value="introduce tu nombre" /></td></tr>
</table>
<p>
<input type="submit" name="submit" value="enviar" />
</form >

<?php include("links.php"); ?>

</body>


</html>