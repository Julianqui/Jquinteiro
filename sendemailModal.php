<?php

function sendemail($mail_setFromEmail,$mail_setFromName,$txt_message,$txt_message_organismo,$txt_message_producto,$mail_subject){
    $mail_username="busquedalaboralorganismopub@gmail.com";//Correo electronico saliente ejemplo: tucorreo@gmail.com
    $mail_userpassword="produccion2018";//Tu contraseña de gmail
    $mail_addAddress="busquedalaboralorganismopub@gmail.com";//correo electronico que recibira el mensaje
    $template="email_modal_pro.html";//Ruta de la plantilla HTML para enviar nuestro men=
    require 'PHPMailer/PHPMailerAutoload.php';
    $mail = new PHPMailer;
    $mail->isSMTP();                            // Establecer el correo electrónico para utilizar SMTP
    $mail->Host = 'smtp.gmail.com';             // Especificar el servidor de correo a utilizar
    $mail->SMTPAuth = true;                     // Habilitar la autenticacion con SMTP
    $mail->Username = $mail_username;          // Correo electronico saliente ejemplo: tucorreo@gmail.com
    $mail->Password = $mail_userpassword; 		// Tu contraseña de gmail
    $mail->SMTPSecure = 'tls';                  // Habilitar encriptacion, `ssl` es aceptada
    $mail->Port = 587;

    $mail->setFrom($mail_setFromEmail, $mail_setFromName);//Introduzca la dirección de la que debe aparecer el correo electrónico. Puede utilizar cualquier dirección que el servidor SMTP acepte como válida. El segundo parámetro opcional para esta función es el nombre que se mostrará como el remitente en lugar de la dirección de correo electrónico en sí.
    $mail->addReplyTo($mail_setFromEmail, $mail_setFromName);//Introduzca la dirección de la que debe responder. El segundo parámetro opcional para esta función es el nombre que se mostrará para responder
    $mail->addAddress($mail_addAddress);   // Agregar quien recibe el e-mail enviado
    $message = file_get_contents($template);
    $message = str_replace('{{nombre}}', $mail_setFromName, $message);
    $message = str_replace('{{mensaje}}', $txt_message, $message);
    $message = str_replace('{{organismo}}', $txt_message_organismo, $message);
    $message = str_replace('{{producto}}', $txt_message_producto, $message);
    $message = str_replace('{{mail}}', $mail_setFromEmail, $message);
    $mail->isHTML(true);  // Establecer el formato de correo electrónico en HTML

    $mail->Subject = $mail_subject;
    $mail->msgHTML($message);
    if(!$mail->send()) {
        echo '<div class="alert alert-danger alert-dismissible" style="text-align: center">
	    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
	   <strong>No se pudo enviar el mensaje.</strong>
	    </div>';
       // echo 'Error de correo: ' . $mail->ErrorInfo."</p>";
    } else {
        echo '<div class="alert alert-success alert-dismissible" style="text-align: center">
	    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
	   <strong> Mensaje enviado</strong>
	    </div>';
    }
}

$mail_subject = "Contacto Organismo Producto";
$mail_setFromEmail=$_POST['mail'];
$mail_setFromName=$_POST['nombre'];
$txt_message_organismo=$_POST['organismo'];
$txt_message_producto=$_POST['producto'];
$txt_message=$_POST['mensaje'];
//$mail_subject=$_POST['organismo'];
sendemail($mail_setFromEmail,$mail_setFromName,$txt_message,$txt_message_organismo,$txt_message_producto,$mail_subject);
//var_dump($_POST);exit();
?>


