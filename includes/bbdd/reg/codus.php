<?php

/*Recoge el idusuario para guardarlo ligado al codigo */
$sql = "SELECT idus FROM reg WHERE '$email' = email";
$res = mysqli_query($link,$sql);
$num = mysqli_num_rows($res);
$fila = mysqli_fetch_array($res);
$idusgu = $fila["idus"];
		
/* Modifica la tabla codigo de collar para guardar el idusuario */
		
$sqlcodi = "UPDATE `yovi`.`cod` SET `idus` = '$idusgu' WHERE `cod`.`cod` = '$cod'";
$rescodi = mysqli_query($link,$sqlcodi);


?>