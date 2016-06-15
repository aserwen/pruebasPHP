
<?php

$id = $_REQUEST['id'];
$name = $_REQUEST['nuevonombre'];
$email = $_REQUEST['nuevoemail'];
$pass = $_REQUEST['nuevopass'];

mysql_connect("localhost", "root", "toor") or die("no se ha podido conectar con el servidor");
mysql_select_db("nueva");

mysql_query("UPDATE usuarios SET name='$name', email='$email', pass='$pass' WHERE id='$id'");

echo "Los valores se han actualizado correctamente!";

mysql_close();
 include("links.php");

?>