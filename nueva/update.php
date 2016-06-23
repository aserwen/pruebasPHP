<html><head><title></title></head><body>
<?php

echo"<h3>Escoge una ID para editar...</h3>";

mysql_connect("localhost", "root", "toor") or die("no se ha podido conectar con el servidor");
mysql_select_db("nueva");

$por_pagina = 6;

$pagina_query = mysql_query("SELECT COUNT('id') FROM usuarios");
$paginas = ceil(mysql_result($pagina_query, 0) / $por_pagina);

$pagina = (isset($_GET['pagina'])) ? (int)$_GET['pagina'] : 1;
$start = ($pagina - 1) * $por_pagina;

$query = mysql_query("SELECT * FROM usuarios LIMIT $start, $por_pagina");

echo "<table width='90%' align='center' border=2>";

echo "<tr>
<td width='40%' align='center' bgcolor='FFFF00'>ID</td>
<td width='40%' align='center' bgcolor='FFFF00'>NAME</td>
<td width='40%' align='center' bgcolor='FFFF00'>EMAIL</td>
<td width='40%' align='center' bgcolor='FFFF00'>PASSWORD</td>";

while($row = mysql_fetch_assoc($query)){
	
	$id = $row['id'];
	$name = $row['name'];
	$email = $row['email'];
	$pass = $row['pass'];
	
echo "<tr><td align=center>
<a href='edit.php?id=$id&name=$name&email=$email&pass=$pass'>$id</a>
<td>$name</td><td>$email</td><td>$pass</td></tr>";
}echo "</table>";
    
    ?>
<hr />

<?php
$anterior = $pagina - 1;
$siguiente = $pagina + 1;
    echo"<center>";
if(!($pagina <=1))/*if ($pagina > 1)*/{
echo "<a href='update.php?pagina=$anterior'>Anterior</a> ";}
if($paginas >= 1)
{for($x=1;$x<=$paginas;$x++)
{echo ($x == $pagina) ? '<b>' . $x . '</b> ': '<a href="?pagina=' . $x . '">' . $x . '</a> ';}}
if($pagina < /*-- >= --*/$paginas)
echo "<a href='update.php?pagina=$siguiente'>Siguiente</a> ";

  echo "</center)";
    
mysql_close();

include("links.php");


?>
    </body>
</html>