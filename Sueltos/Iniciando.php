<html><head>
<title>Formulario</title>
</head>
<body>

<p>Introduce tus datos abajo:</p>

<form method="get" action="proceso.php"><br />

Nombre:<input type="text" name="name" /><br />
Email:<input type="text" name="email" /><br />
Telefono:<input type="text" name="tel" /><br />
Password:<input type="password" name="pass" /><br />
Confirmar password:<input type="password" name="cpass" /><br />

<p>
<input type="submit" name="submit" value="enviar" />

</form>
<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);

include('proceso.php');

/*if($_POST['name']){echo $_POST['name'];}*/

?>

</body>
</html>