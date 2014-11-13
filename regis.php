<?php

$email= $_POST["email"];
$pswd= $_POST["pswd"];
$cod= $_POST["cod"];

$opciones = [
    'cost' => 11,
    'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM),
];
$hash = password_hash($pswd, PASSWORD_DEFAULT)."<br>";

if (password_verify($psw, $hash)) {
    echo '¡La contraseña es válida!';
} else {
    echo 'La contraseña no es válida.';
}

?>

