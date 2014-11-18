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
  
  /* Comprobar codigo */
  
  $sqlcod = "SELECT * FROM cod WHERE '$cod' = cod";
  $rescod = mysqli_query($link,$sqlcod);
  $numcod = mysqli_num_rows($rescod);
  
  echo $numcod. "<br>" ;
  
  if( $numcod == 1){

	/* Comprobar si codigo utilizado */
  	
	echo "El código existe". "<br>";
	$cod = mysqli_fetch_array($rescod);
  	$idus= $cod['idus'];
	
	/*AQUI NOS HEMOS QUEDADO*/
	
	$idcod = $cod['idcod'];
	
	if($idus == 0){
		
		/* Comprobar email duplicado */

  		$sqldupli = "SELECT * FROM reg WHERE '$email' = email";
  		$resdupli = mysqli_query($link,$sqldupli);	
  		$numdupli = mysqli_num_rows($resdupli);
		
		echo "Numdupli: " . $numdupli . "<br>";	
		
		if($numdupli == 0){
			
			
			
			/* Insertar email y contraseña */
		
		
  		$sqlinsert = "INSERT INTO  `yovi`.`reg` (`email` ,`pass`)
					  VALUES ('$email',  '$password_bd')";
		$resinsert = mysqli_query($link,$sqlinsert);	
		
		echo "Id codigo " . $idcod . "<br>";
		echo "Id usuario	" . $idus . "<br>";
		/* Guardar idus en codigo de collar*/
		
		
 		
			
			echo "email y contraseña guardada en user y guardar idus en cod";
			
			}else{
				echo "email duplicado";
				}
	
	}else{
		echo "Este codigo ya ha sido utilizado";
		}
	
  }else{
	  echo"el codigo no existe";
	  
	}
		
		
 		/* Insertar email y contraseña */
		/*
  		$sqlinsert = "INSERT INTO  `yovi`.`reg` (`email` ,`pass`)
					  VALUES ('$email',  '$password_bd')";
		$resinsert = mysqli_query($link,$sqlinsert);	
		echo "bien";		
 		
		
		
  /*
  $password_entered = $pswd;
  $password_hash = $password_bd;
  if(password_verify($password_entered, $password_hash)) {
   echo "corecto";
  }*/

?>

