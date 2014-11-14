<?php
$email= $_POST["email"];
$pswd= $_POST["pswd"];
$cod= $_POST["cod"];

include("includes/conexion.php");

/*Funcion para encriptar contarseña*/
function better_crypt($input, $rounds = 10)
  {
    $crypt_options = array(
      'cost' => $rounds
    );
    return password_hash($input, PASSWORD_BCRYPT, $crypt_options);
  }
  $new_password = $pswd;
  $password_bd = better_crypt($new_password);
  
  /* Comprobar email duplicado */
  
  $sqldupli="SELECT * FROM reg WHERE '$email'=email ";
  $resdupli=mysqli_query($link,$sqldupli);	
  $numdupli= mysqli_num_rows($resdupli);
  
 if($numdupli>0){
 	echo "email duplicado";
	}else{
 		/* Insertar email y contraseña */
  		$sqlinsert="INSERT INTO  `yovi`.`reg` (`email` ,`pass`)
					  VALUES ('$email',  '$password_bd')";
		$resinsert=mysqli_query($link,$sqlinsert);	
				
 		}
		
		
  /*
  $password_entered = $pswd;
  $password_hash = $password_bd;
  if(password_verify($password_entered, $password_hash)) {
   echo "corecto";
  }*/

?>

