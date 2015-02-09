<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Yovi</title>
    
    <link rel="stylesheet" type="text/css" media="all" href="css/style.css" />
    
    <script src="http://code.jquery.com/jquery-1.7.min.js"></script>
	<script src="js/script.js"></script>
    
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">


    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/scrolling-nav.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">LOGO</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#page-top">Inicio</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">Yovi</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Registro</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#prueba">Conéctate</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Nosotros</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Section -->
    <section id="intro" class="intro-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                <div class="ini-container">
                    <h1>INICIO</h1>
                    <p>Buscar imagenes relacionadas con todo, tipo carrousel o asi.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about-section">
        <div class="container">
            <div class="row">
              <div class="col-lg-12">
                  <h1>Yovi</h1>
                  <div class="yovi-container">
                    <p>Buscar manera de explicar collar.</p>
                  </div>
                </div>
            </div>
         </div>
    </section>

    <!-- Formulario Registro -->
    <section id="services" class="services-section">
    <?php
    include("includes/form/reg/reg.php");
    ?>
    </section>

    <!-- Formulario Login   -->
    <section id="prueba" class="services-section">
        <div class="container">
        	<div class="row">
            	<div class="col-lg-12 col-xs-12">
        			<div id="form-container">
						<h1 class="titreg">Conéctate</h1>
						<form>
						<ul>
							<li>
								<label for="username">Email:</label>
								<span><input id="username" name="username" type="email" required /></span>
							</li>
							<li>
								<label for="pswd">Contraseña:</label>
								<span><input id="pswd" type="password" name="pswd" required /></span>
							</li>
							<li>
								<button type="submit" class="btn  btn-info ">Conéctate</button>
							</li>
						</ul>	
						</form>		
					</div>			
				</div>
    		</div>
    	</div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                  <div class="nos-container">
                    <h1>Nosotros</h1>
                    <p>Contacto informacion de gente empresa...</p>
                  </div>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>

</body>

</html>
