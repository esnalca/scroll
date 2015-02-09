<?php

  $sqlcod = "SELECT * FROM cod WHERE '$cod' = cod";
  $rescod = mysqli_query($link,$sqlcod);
  $numcod = mysqli_num_rows($rescod);  	
  
?>