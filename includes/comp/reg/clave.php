<?
    $sqldupli = "SELECT * FROM reg WHERE '$email' = email";
  	$resdupli = mysqli_query($link,$sqldupli);	
  	$numdupli = mysqli_num_rows($resdupli);
    $clav= mysqli_fetch_array($resdupli);
    $clave= $clav['clave'];

?>