<?
include ("../includes/bbdd/conexion.php");
$cod=$_GET["c"];

//Recogemos cod, idus y email
$sqlid = "SELECT * FROM cod WHERE '$cod' = cod";
$resid = mysqli_query($link,$sqlid);
$id = mysqli_fetch_array($resid);
$idus = $id["idus"];

$sqlus = "SELECT * FROM reg WHERE '$idus' = idus";
$resus = mysqli_query($link,$sqlus);
$us = mysqli_fetch_array($resus);
$email = $us["email"];

//Iniciamos la sesion

session_start();

//Recogemos datos de sesion

$_SESSION["email"] = $email;
$_SESSION["cod"] = $cod;
$_SESSION["idus"] = $idus;

//Comprobamos que no esta vacio
if(isset($_SESSION["email"])) {
    
    
}else{
    echo 'Mensaje que quieres que aparesca si la session no existe.';
}

?>
<a href="pag2.php">Link</a>
