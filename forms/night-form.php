<?php
require('../phpmailer/class.phpmailer.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {

	//form variables
	//$sendFormTo = array('hello@bostonliving.com','nityareddy.sama@bostonliving.com','pankaj.chandra@bostonliving.com','sheela.bhardwaj@bostonliving.com');
	$sendFormTo = array('nityareddy.sama@bostonliving.com','hello@bostonliving.com');
	$apipassword = 'U0cuN3Y2WWNrUldRcmV4U0dqdnBucURHZy5COGxZZHc1bEh5SkNfM25Ba0IzcmRDaXZub3JzRGVnaGhNTXZWWjdZR0pN';
	$name = $_POST['fullname'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	// $locations = $_POST['locations'];
	$arrival = $_POST['arrival'];
	$departure = $_POST['departure'];

	$mail = new PHPMailer();
	$mail->SMTPDebug = 0;
	$mail->IsSMTP();
	$mail->Host     = 'smtp.sendgrid.net';
	$mail->SMTPAuth = true;
	$mail->Username = 'apikey';
	$mail->Password = base64_decode($apipassword);
	$mail->SMTPSecure = 'tls';
	$mail->Port     = 587; 
	$mail->Mailer   = 'smtp'; 


	$mail->SetFrom('info@bostonliving.com', 'Boston Living');
	$mail->AddReplyTo('info@bostonliving.com', 'Boston Living');
	foreach($sendFormTo as $to_add){
		$mail->AddAddress($to_add);
	}
	$mail->IsHTML(true);
	$mail->Subject = 'Stay for a Few Nights Form | Boston Living';
	$mail->Body = '<html><body>'; //HTML start
	$mail->Body .= '<p><strong>Full Name:</strong> '.$name.'</p>';
	$mail->Body .= '<p><strong>Email:</strong> '.$email.'</p>';
	$mail->Body .= '<p><strong>Phone Number:</strong> '.$phone.'</p>';
	// $mail->Body .= '<p><strong>Location:</strong> '.$locations.'</p>';
	$mail->Body .= '<p><strong>Move In:</strong> <br>'.$arrival.'</p>';
	$mail->Body .= '<p><strong>Move Out:</strong> <br>'.$departure.'</p>';
	$mail->Body .= '</body></html>'; //HTML end

	if(!$mail->Send()) {
		echo 'Oops! Something went wrong and we couldn\'t send your message.';
	} else {
		echo 'Thank you for reaching out to us. Our team shall get in touch with you at the earliest.';
	}

}
?>