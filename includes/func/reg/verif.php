<?php
	
	//Verificar email de usuarios
	include("../../bbdd/conexion.php");

    $clave = $_GET["c"];
	
    if(empty($clave)){
    
    echo "imposible verificar";
    
    
    }else{
        
        $sqldupli = "SELECT * FROM reg WHERE '$clave' = clave";
        $resdupli = mysqli_query($link,$sqldupli);	
  	    $numdupli = mysqli_num_rows($resdupli);
        $clav = mysqli_fetch_array($resdupli);
        $clave1 = $clav['clave'];
        $idus = $clav['idus'];
        
        $sqlcod= "SELECT * FROM cod WHERE '$idus'= idus";
        $rescod= mysqli_query($link,$sqlcod);
        $cod = mysqli_fetch_array($rescod);
        $codcollar = $cod['cod'];
        
        $sqlin = "UPDATE `yovi`.`reg` SET `verif` = '1' WHERE `reg`.`idus` = '$idus'";
        $resin = mysqli_query($link,$sqlin);
        
        $target = "../../../usu/$idus";  //$nombreUsuario viene del formulario cuando se registra. $_POST['username'];

        mkdir($target, 0777);


        header("location: ../../../usu/admin.php?c=$codcollar");
        
    }
    

	?>
