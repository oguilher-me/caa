<?php

use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/autoload.php';

// Subject
$subject = 'Novo Registro na LP da ClaraVista';

$message = "
<html>
<head>
  <title>Landing Page ClaraVista</title>
</head>
<body>
  <p>Alguém Entrou em contato na Landing Page</p>
  <table>
    <tr>
      <th>Nome</th><th>Email</th><th>Telefone</th>
    </tr>
    <tr>
      <td>" . $_POST['name'] . "</td><td>" . $_POST['email'] . "</td><td>" . $_POST['telefone'] . "</td>
    </tr>
   
  </table>
</body>
</html>
";


$mail = new PHPMailer;

$mail->isSMTP();
$mail->SMTPDebug = 2;
$mail->Host = 'smtp.hostinger.com';
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->Username = '';
$mail->Password = '';
$mail->setFrom('', 'ClaraVista');
$mail->addAddress('', 'ClaraVista');
$mail->Subject = $subject;
// $mail->msgHTML(file_get_contents('message.html'), __DIR__);
$mail->Body = $message;
//$mail->addAttachment('test.txt');
if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'The email message was sent.';
}

if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
  $uri = 'https://';
} else {
  $uri = 'http://';
}
$uri .= $_SERVER['HTTP_HOST'];
header('Location: '.$uri.'/');
exit;
