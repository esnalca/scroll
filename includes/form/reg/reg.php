<?php
$r=$_GET["r"];

if($r==0){

	?><p class="menreg"><?echo "Usuario registrado verifique su email";?></p><?php
	
		}else if($r==1){
		
			?><p class="menreg"><?echo "Email duplicado";?></p><?php

			
				}else if($r==2){
				
					?><p class="menreg"><?echo "Codigo no validio";?></p><?php

}
?>
<div class="container">
        	<div class="row">
            	<div class="col-lg-12">
        			<div id="form-container">
						<h1 class="titreg">Registra tu collar</h1>
						<form action="regis.php" method="post">
						<ul>
							<li>
								<label for="username">Email:</label>
								<span><input id="username" name="email" type="email" required /></span>
							</li>
							<li>
								<label for="pswd">Contraseña:</label>
								<span><input id="pswd" type="password" name="pswd" required /></span>
							</li>             
                            <li>
								<label for="codcollar">Codigo Collar:</label>
								<span><input id="cod" type="text" name="cod" required /></span>
							</li>
							<li>
								<button type="submit" class="btn  btn-info ">Registrate</button>
							</li>
						</ul>	
						</form>			
						<div id="pswd_info">
							<h4>La contraseña debe cumplir los siguientes requisitos:</h4>
							<ul>
								<li id="letter" class="invalid">Al menos<strong>una letra</strong></li>
								<li id="capital" class="invalid">Al menos <strong>una mayúscula</strong></li>
								<li id="number" class="invalid">Al menos <strong>un número</strong></li>
								<li id="length" class="invalid">Por lo menos <strong>8 carácteres</strong></li>
							</ul>
						</div>
					</div>			
				</div>
    		</div>
    	</div>
