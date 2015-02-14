<?php
require_once('phpmailer/class.phpmailer.php'); //Incluimos la clase phpmailer

$mensaje="<a href='localhost/scroll/includes/func/reg/verif.php?c=$clave'>LINK PARA VERIFICAR EMAIL</a>";



$mail = new PHPMailer(true); // Declaramos un nuevo correo, el parametro true significa que mostrara excepciones y errores.

$mail->IsSMTP(); // Se especifica a la clase que se utilizará SMTP

try {
//------------------------------------------------------
  $correo_emisor="esnalca88@gmail.com";     //Correo a utilizar para autenticarse
					     //Gmail o de GoogleApps
  $nombre_emisor="Joel Esnal";               //Nombre de quien envía el correo
  $contrasena="joelesnalcasuso";          //contraseña de tu cuenta en Gmail
  $correo_destino= $email;      //Correo de quien recibe
  $nombre_destino=" ";                //Nombre de quien recibe   	
//--------------------------------------------------------
  $mail->SMTPDebug  = 2;                     // Habilita información SMTP (opcional para pruebas)
                                             // 1 = errores y mensajes
                                             // 2 = solo mensajes
  $mail->SMTPAuth   = true;                  // Habilita la autenticación SMTP
  $mail->SMTPSecure = "ssl";                 // Establece el tipo de seguridad SMTP
  $mail->Host       = "smtp.gmail.com";      // Establece Gmail como el servidor SMTP
  $mail->Port       = 465;                   // Establece el puerto del servidor SMTP de Gmail
  $mail->Username   = $correo_emisor;  	     // Usuario Gmail
  $mail->Password   = $contrasena;           // Contraseña Gmail
  //A que dirección se puede responder el correo
  $mail->AddReplyTo($correo_emisor, $nombre_emisor);
  //La direccion a donde mandamos el correo
  $mail->AddAddress($correo_destino);
  //De parte de quien es el correo
  $mail->SetFrom($correo_emisor, $nombre_emisor);
  //Asunto del correo
  $mail->Subject = $asunto;
  //El cuerpo del mensaje, puede ser con etiquetas HTML
  $mail->MsgHTML($mensaje);
  
  //Enviamos el correo
  $mail->Send();
  
} catch (phpmailerException $e) {
  //echo $e->errorMessage(); //Errores de PhpMailer
} catch (Exception $e) {
  //echo $e->getMessage(); //Errores de cualquier otra cosa.
}
?>
