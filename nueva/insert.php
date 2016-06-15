
<?php
/*envia data de la pagina a la db*/
$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass'];

if($name && $email && $pass){
	
	mysql_connect("localhost", "root", "toor") or die("no se ha podido conectar con el servidor");
	mysql_select_db("nueva");
	
	$usuario = mysql_query("SELECT name FROM usuarios WHERE name='$name'");
	$contar = mysql_num_rows($usuario);
	
	if($contar != 0){
		echo ("ya existe un usuario con ese nombre");
		include('links.php');
		die();
	}
	

	
	
	mysql_query("INSERT INTO usuarios(name, email, pass) VALUES('$name','$email','$pass')");
	
	$registro = mysql_affected_rows();
	
	echo $registro." nueva linea a sido inserida";
	
	}else{
		echo "por favor, completa el formulario";
	}
	
include("links.php");

mysql_close();

?>