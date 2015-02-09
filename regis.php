<?php
$email= $_POST["email"];
$pswd= $_POST["pswd"];
$cod= $_POST["cod"];
$asunto="asunto  desde variables";

include("includes/bbdd/conexion.php");

/*Funcion para encriptar contarseña*/

include("includes/func/pass/cryppass.php");
  
/* Comprobar codigo existe*/
  
  include("includes/comp/reg/comcod.php");
  
  if( $numcod == 1){

	/* Comprobar si codigo duplicado */
	include("includes/comp/reg/codu.php");
  	
		
	if($idus == 0){
		
		/* Comprobar email duplicado */

		include("includes/comp/reg/emdu.php");
		
		if($numdupli == 0){
			
		/* Insertar email y contraseña */
		
  		include("includes/bbdd/reg/empass.php");
		
		/* Guardar idus en codigo de collar */
		
		include("includes/bbdd/reg/codus.php");	
			
		include("includes/phpmailer/phpmailer_prueba.php");
		
		header ("Location: index.php?r=0");
	
			}else{
				header ("Location: index.php?r=1");
				}
	
	}else{
		
		header ("Location: index.php?r=2");
		}
	
  }else{
	  
	  header ("Location: index.php?r=2");
	  
	}

  /*
  $password_entered = $pswd;
  $password_hash = $password_bd;
  if(password_verify($password_entered, $password_hash)) {
   echo "corecto";
  }*/
?>