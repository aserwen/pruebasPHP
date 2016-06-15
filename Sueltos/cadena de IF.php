if($_POST['name']){
	
	if($_POST['email']){
		
		if($_POST['tel']){
			
			if($_POST['pass']){
				
				if($_POST['cpass']){
					
					if($_POST['pass'] == $_POST['cpass']){
						
						echo "todo esta bien";
					
					}else{
						
						echo "tu contraseña no es igual!";
					}
				
				}else{
					
					echo "confirma tu contraseña";
				
				}
			
			}else{
				
				echo "escribe una contraseña";
			}
		
		}else{
			
			echo "introduce tu telefono";
		}
	
	}else{
		
		echo "introduce tu email";
	
	}

}else{
	
	echo "introduce tu nombre";

	}