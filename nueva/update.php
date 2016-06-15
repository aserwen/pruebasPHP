
<?php

echo"<h3>Escoge una ID para editar...</h3>";

mysql_connect("localhost", "root", "toor") or die("no se ha podido conectar con el servidor");
mysql_select_db("nueva");

$resultado = mysql_query("SELECT * FROM usuarios");

echo "<table width='90%' align='center' border=2>";

echo "<tr>
<td width='40%' align='center' bgcolor='FFFF00'>ID</td>
<td width='40%' align='center' bgcolor='FFFF00'>NAME</td>
<td width='40%' align='center' bgcolor='FFFF00'>EMAIL</td>
<td width='40%' align='center' bgcolor='FFFF00'>PASSWORD</td>";

while($row = mysql_fetch_array($resultado)){
	
	$id = $row['id'];
	$name = $row['name'];
	$email = $row['email'];
	$pass = $row['pass'];
	
echo "<tr><td align=center>
<a href='edit.php?id=$id&name=$name&email=$email&pass=$pass'>$id</a>
<td>$name</td><td>$email</td><td>$pass</td></tr>";
}echo "</table>";

mysql_close();

include("links.php");


?>