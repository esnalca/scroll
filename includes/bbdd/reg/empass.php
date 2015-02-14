<?
for($i=0 ; $i<1; $i++){
	
    //Se define una cadena de caractares. Te recomiendo que uses esta.
    $cadena = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
    //Obtenemos la longitud de la cadena de caracteres
    $longitudCadena=strlen($cadena);
     
    //Se define la variable que va a contener la contraseña
    $pass = "";
    //Se define la longitud de la contraseña, en mi caso 10, pero puedes poner la longitud que quieras
    $longitudPass=8;
	
    //Creamos la contraseña

	
    for($j=1 ; $j<=$longitudPass ; $j++){
			
        //Definimos numero aleatorio entre 0 y la longitud de la cadena de caracteres-1
        $pos=rand(0,$longitudCadena-1);
     
        //Vamos formando la contraseña en cada iteraccion del bucle, añadiendo a la cadena $pass la letra correspondiente a la posicion $pos en la cadena de caracteres definida.
        $pass .= substr($cadena,$pos,1);
	}
$sqlinsert = "INSERT INTO  `yovi`.`reg` (`email` ,`pass`, `fecAlta`,`clave`)
		  VALUES ('$email',  '$password_bd', NOW(),'$pass')";
$resinsert = mysqli_query($link,$sqlinsert);
}
?>