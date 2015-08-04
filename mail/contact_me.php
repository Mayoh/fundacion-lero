<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['apellido']) 		||
   empty($_POST['email']) 		||
   empty($_POST['phone']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$apellido = $_POST['apellido'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
	
// Create the email and send the message
$to = 'mayra@plastik.com.mx'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $name";
$email_body = "Recibiste un nuevo mensaje de tu formulario de contacto en la página web.\n\n"."Estos son los detalles:\n\nName: $name\n\nApellido: $apellido\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: mayra@plastik.com.mx\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>