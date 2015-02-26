<?
//Iniciamos la sesion

session_start();


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


//Recogemos datos de sesion

$_SESSION["email"] = $email;
$_SESSION["cod"] = $cod;
$_SESSION["idus"] = $idus;

//Comprobamos que no esta vacio
if(isset($_SESSION["email"])) {
    ?>
    <!DOCTYPE html>
    <html lang="es">

    <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Yovi</title>

    <link rel="stylesheet" type="text/css" media="all" href="../css/style.css" />

    <script src="http://code.jquery.com/jquery-1.7.min.js"></script>
	<script src="../js/script.js"></script>
    
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">


    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/scrolling-nav.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    </head>
    
    <div class="container">
        	<div class="row">
            	<div class="col-lg-12">
        			<div id="form-container">
						<h1 class="titreg">Rellena los de tu mascota</h1>
						<form action="pag2.php?c=<?=$cod?>" method="post" enctype="multipart/form-data">
						<ul>
							<li>
								<label for="masnom">Nombre mascota:</label>
								<span><input  name="masnom" type="text" required /></span>
							</li>
							<li>
								<label for="dir">Direccion:</label>
								<span><input  name="dir" type="text"  /></span>
							</li>
							<li>
								<label for="tlf">Telefono:</label>
								<span><input  name="tlf" type="tel" /></span>
							</li>
							<li>
								<label for="foto">Foto:</label>
								<input id="foto" name="foto" type="file"  />
							</li>
							<li>
								<button type="submit" class="btn  btn-info ">Envia los datos</button>
							</li>
						</ul>
						</form>
					</div>
				</div>
    		</div>
    	</div>

    <?
}else{
    echo 'Mensaje que quieres que aparesca si la session no existe.';
}

?>

</html>
