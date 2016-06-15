
<?php

mysql_connect("localhost", "root", "toor") or die("no se ha podido conectar con el servidor");
mysql_select_db("nueva");

$resultado = mysql_query("DELETE FROM usuarios WHERE id='".$_REQUEST['id']."'");

echo "el usuario ha sido eliminado";

mysql_close();

include('links.php');


?>