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
	$codi = mysqli_fetch_array($rescod);
  	$idus= $codi['idus'];
	
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
		
		/* Guardar idus en codigo de collar*/
		
		/*Recoge el idusuario para guardarlo ligado al codigo */
		
		$sql = "SELECT idus FROM reg WHERE '$email' = email";
		$res = mysqli_query($link,$sql);
		$num = mysqli_num_rows($res);
		$fila = mysqli_fetch_array($res);
		$idusgu = $fila["idus"];
		
		/* Modifica la tabla codigo de collar para guardar el idusuario */
		
		$sqlcodi = "UPDATE `yovi`.`cod` SET `idus` = '$idusgu' WHERE `cod`.`cod` = '$cod'";
		$rescodi = mysqli_query($link,$sqlcodi);
		
		echo "Guarda email y contraseña, guarda el id de usuario en la tabla codigo collar para ligar collar y usuario";
			
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

