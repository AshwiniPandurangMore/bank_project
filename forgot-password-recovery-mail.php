<?php
if(!class_exists('PHPMailer')) {
    require('phpmailer/class.phpmailer.php');
	require('phpmailer/class.smtp.php');
}

require_once("mail_configuration.php");

$mail = new PHPMailer();

$emailBody = "<div>" . $user["fullname"] . ",<br><br><p>Click this link to recover your password<br>
<a href='" . PROJECT_HOME . "reset_password.php?account=". $user["account_no"]. "'> Click Here for change your Password</a><br><br></p>Regards,<br> Admin.</div>";

$mail->IsSMTP();
$mail->SMTPDebug = 0;
$mail->SMTPAuth = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port     = 587;  
$mail->Username = 'waniharsha08@gmail.com';
$mail->Password = 'monirani7083';
$mail->Host     = 'smtp.gmail.com';    
$mail->Mailer   = MAILER;

$mail->SetFrom('waniharsha08@gmail.com', 'Harsha');
$mail->AddReplyTo('waniharsha08@gmail.com', 'Harsha');
$mail->ReturnPath='waniharsha08@gmail.com';	
$mail->AddAddress('waniharsha08@gmail.com');
$mail->Subject = "Forgot Password Recovery";		
$mail->MsgHTML($emailBody);
$mail->IsHTML(true);

if(!$mail->Send()) {
	$error_message = 'Problem in Sending Password Recovery Email';
} else {
	$success_message = 'Please check your email to reset password!';
}

?>
