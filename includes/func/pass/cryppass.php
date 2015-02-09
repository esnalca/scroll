<?php

function better_crypt($input, $rounds = 10)
  {
    $crypt_options = array(
      'cost' => $rounds
    );
    return password_hash($input, PASSWORD_BCRYPT, $crypt_options);
  }
  
  $new_password = $pswd;
  $password_bd = better_crypt($new_password);
  

?>