<?
$sqlinsert = "INSERT INTO  `yovi`.`reg` (`email` ,`pass`, `fecAlta`)
			  VALUES ('$email',  '$password_bd', NOW())";
$resinsert = mysqli_query($link,$sqlinsert);
?>