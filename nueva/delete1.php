
<?php

mysql_connect("localhost", "root", "toor") or die("no se ha podido conectar con el servidor");
mysql_select_db("nueva");

$resultado = mysql_query("SELECT * FROM usuarios WHERE id='".$_REQUEST['id']."'");

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
	
echo "<tr><td align=center>$id</td>
<td>$name</td><td>$email</td><td>$pass</td></tr>";
}echo "</table>";

mysql_close();
include("links.php");
?>

<form method="post" action="delete2.php">
<p>Estas segudo que quieres borrar este usuario</p>
<input type="submit" name="submit" value="SI">&nbsp 
<button type="button" onclick="location.href = 'delete.php'" >NO</button>
<input type="hidden" name="id" value="<?php echo $_REQUEST['id'];?>">
</form>
<?php include ('links.php')?>

