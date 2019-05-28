<?php require_once("PHPMailerAutoload.php");
session_start(); 

$nome = $_POST["nome"];
$email = $_POST["email"];
$mensagem = $_POST["mensagem"];

$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = "desenvolvimento1a@gmail.com";
$mail->Password = "tecpuc@2018";
$mail->setFrom("desenvolvimento1a@gmail.com", "Contato");
$mail->addAdress("desenvolvimento1a@gmail.com");
$mail->subject = "Email da loja";
$mail->msgHTML("<html>de: {$nome}<br/>email: {$email}<br/>mensagem: {$mensagem}</html>");
$mail->altBody("de: {$nome}\n email:{$email}\n mensagem: {$mensagem}");

if($mail->send()){
    $_SESSION['success'] = "Mensagem enviada com sucesso!";
    header("location:index.php");
} else {
    $_SESSION['danger'] = "Mensagem não enviada" . $mail->errorInfo;
    header("location: contato.php");
}
die();