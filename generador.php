<?php

include("includes/conexion.php");

for($i=0 ; $i<20; $i++){
	
    //Se define una cadena de caractares. Te recomiendo que uses esta.
    $cadena = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
    //Obtenemos la longitud de la cadena de caracteres
    $longitudCadena=strlen($cadena);
     
    //Se define la variable que va a contener la contraseņa
    $pass = "";
    //Se define la longitud de la contraseņa, en mi caso 10, pero puedes poner la longitud que quieras
    $longitudPass=8;
	
    //Creamos la contraseņa

	
    for($j=1 ; $j<=$longitudPass ; $j++){
			
        //Definimos numero aleatorio entre 0 y la longitud de la cadena de caracteres-1
        $pos=rand(0,$longitudCadena-1);
     
        //Vamos formando la contraseņa en cada iteraccion del bucle, aņadiendo a la cadena $pass la letra correspondiente a la posicion $pos en la cadena de caracteres definida.
        $pass .= substr($cadena,$pos,1);
	}
	echo $pass . "<br>";
	//Guardar codigos en BBDD
	
	
  		$sqlinsert = "INSERT INTO  `yovi`.`cod` (`cod` ,`idus`)
					  VALUES ('$pass',  '0')";
		$resinsert = mysqli_query($link,$sqlinsert);	
		echo "bien";		
		
}
	
 
?>
