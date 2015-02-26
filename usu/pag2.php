<?
session_start();

echo $_SESSION["email"];

echo $_SESSION["cod"];

print_r($_POST);
print_r($_FILES);

if(isset($_FILES["foto"])){
	$nombrearchivo=$_FILES["foto"]["name"];
	$ruta= "usu";
	//guardar el archivo en el directorio
if($_FILES["foto"]["error"]==0){
	if(move_uploaded_file($_FILES["foto"]["tmp_name"],$ruta,$nombrearchivo)){

		echo "Guardado";

	}else{
		echo "Fallo";

	}
	}
}


?>
