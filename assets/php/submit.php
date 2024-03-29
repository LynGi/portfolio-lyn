<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = $_POST["name"];
    $email = $_POST["email"];
	$subject=$_POST['subject'];
 	$comment=$_POST['comment'];

    // Configurar el correo
    $destinatario = "lyngiamate@gmail.com";
    $asunto = "Nuevo mensaje de contacto";
    $contenido = "Nombre: $nombre\n";
    $contenido .= "Email: $email\n";
	$contenido .= "Asunto:\n$subject\n";
    $contenido .= "Mensaje:\n$comment\n";

    // Enviar el correo
    $enviado = mail($destinatario, $asunto, $contenido);

    // Verificar si el correo se envió correctamente
    if ($enviado) {
        echo "<h2>Tu mensaje ha sido enviado correctamente.</h2>";
    } else {
        echo "<h2>Ha ocurrido un error al enviar tu mensaje. Por favor, intenta nuevamente más tarde.</h2>";
    }
} else {
    header("Location: formulario_contacto.html");
    exit;
}



// if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['comment'])){
// 	$name=$_POST['name'];
// 	$email=$_POST['email'];
// 	$subject=$_POST['subject'];
// 	$comment=$_POST['comment'];
	
	
	
// 	$html="<table><tr><td>Name:</td><td>$name</td></tr><tr><td>Email:</td><td>$email</td></tr><tr><td>Subject:</td><td>$subject</td></tr><tr><td>Comment:</td><td>$comment</td></tr></table>";
	
// 	include('smtp/PHPMailerAutoload.php');
// 	$mail=new PHPMailer(true);

// 	// smtp Settings
// 	$mail->isSMTP(); // Set mailer to use SMTP
// 	$mail->Host="smtp.gmail.com"; // SMTP servers
// 	$mail->Port=587; //specify SMTP Port
// 	$mail->SMTPSecure="tls"; // Enable TLS encryption, `ssl` also accepted
// 	$mail->SMTPAuth=true; // Enable SMTP authentication
// 	$mail->Username="lyngiamate@gmail.com";  // Your Mail
// 	$mail->Password="Password"; // Your app password

// 	$mail->setFrom($email, $name);  
// 	$mail->addAddress("lyngiamate@gmail.com", "Lyn"); // (Your Mail) An email address that will receive the email with the output of the form

// 	$mail->IsHTML(true); // Set email format to HTML

// 	$mail->Subject = "Nuevo contacto";
// 	$mail->Body = $html;

// 	$mail->SMTPOptions=array('ssl'=>array(
// 		'verify_peer'=>false,
// 		'verify_peer_name'=>false,
// 		'allow_self_signed'=>false
// 	));

// 	$msg="";
	
// 	if($mail->send()){
		
// 		$msg="Mensaje enviado";
// 	}else{
		
// 		$msg="Ha ocurrido un error";
// 	}
// 	echo $msg;
// }

