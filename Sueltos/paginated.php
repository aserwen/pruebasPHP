<?php 
require_once "Paginated.php"; 
//create an array of names in alphabetic order 
$names = array("Andrew", "Bernard", "Castello", "Dennis", "Ernie", Frank", Greg", "Henry", "Isac", "Jax", "Kester", "Leonard", "Matthew", "Nigel", "Oscar"); 
$pagedResults = new Paginated($names, 10, 1); 
echo "<ul>"; 
while($row = $pagedResults->fetchPagedRow()) { 
echo "<li>{$row}</li>"; 
} 
echo "</ul>"; 
?>