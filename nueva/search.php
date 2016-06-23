<html>
    <head>
        <title></title>
        <style>
        hr {
            display: block;
            margin-top: 0.5em;
            margin-bottom: 0.5em;
            margin-left: 5em;
            margin-right: auto;
            border-style: inset;
            border-width:0.1em;
        }
        </style>
    </head>
    <body>
        <center>
        <form method="get" action="">
            <input type="text" name="search">
            <input type="submit" name="submit" value="buscar en DB">
        </form>    
        </center
       <hr> <hr />
            <u>Resultados</u>: 
<?php
            
error_reporting(E_ERROR | E_WARNING | E_PARSE);
    
    if(isset($_REQUEST['submit'])){
    $search = $_GET['search'];
    $terms = explode(" ", $search);
    $query = "SELECT * FROM usuarios WHERE ";
    
    $i=0;
    
    foreach($terms as $each){
        $i++;
        if($i==1){
            $query .= "name LIKE '%$each%'";
        }else{
            $query .= "OR name Like '%$each%'";
        }
    }
    mysql_connect("localhost","root","toor");
    mysql_select_db("nueva");
    $queryplus = mysql_query($query);
    $numero = mysql_num_rows($queryplus);
    if($numero > 0 && $search !=""){
       
        echo "$numero resultado(s) encontrado(s) para <b>$search</b>";
        
        while($row = mysql_fetch_assoc($queryplus)){
            $id = $row['id'];
            $name = $row['name'];
            $email = $row['email'];
            $pass = $row['pass'];
        echo "<br /><h3>Nombre: $name(id: $id)</h3>$email<br />Password: $pass";
        }
        mysql_close();
    }else{echo "no hay resultados";}
}else{
    echo "ingresa tu busqueda...";
}    
include("links.php");            

?>
    </body>
</html>