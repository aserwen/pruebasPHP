
<?php
/*envia data de la pagina a la db*/
$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$cpass = $_POST['cpass'];


if($name && $email && $pass && $cpass){
	
    if(strlen($pass)>3){
        
        
    
    if($pass==$cpass){
                        
    mysql_connect("localhost", "root", "toor") or die("no se ha podido conectar con el servidor");
	mysql_select_db("nueva");
	
	$usuario = mysql_query("SELECT name FROM usuarios WHERE name='$name'");
	$contar = mysql_num_rows($usuario);
	
    $remail = mysql_query("SELECT email FROM usuarios WHERE email='$email'");
    $checkmail = mysql_num_rows($remail);
    
     if($checkmail != 0){
            echo ("<p>ya existe un usuario con ese email</p>");
            
        }else{
        
    if($contar != 0){
		echo ("<p>ya existe un usuario con ese nombre</p>");
               
		
    }else{
	
    mysql_query("INSERT INTO usuarios(name, email, pass) VALUES('$name','$email','$pass')");
	
	$registro = mysql_affected_rows();
	
	echo $registro." Te has registrado con exito";
	
    }
    }
    }else{echo "tu password no coincide";}
    }else{echo "tu pass es muy corta";}
	}else{
		echo "por favor, completa el formulario";
	}
	
include("links.php");


?>