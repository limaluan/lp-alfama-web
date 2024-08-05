<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '/mnt/hd/Programming/Projetos/alfama-web/vendor/autoload.php';

$mail = new PHPMailer(true);

$name = $_POST['name'];
$state = $_POST['state'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$value = $_POST['value'];
$process = $_POST['process'];

try{
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'tamorimdealmeida@gmail.com';
    $mail->Password = 'rcag bque wdyr hjrz';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = 465;


    // Configurações do email
    $mail->setFrom('tamorimdealmeida@gmail.com');
    $mail->addAddress('marcelw@alfamaweb.com.br');
    $mail->Subject = 'Teste tecnico';
    $mail->Body    = "Nome: $name, Estado/UF: $state, Telefone: $phone, Email: $email, Valor: $value, Processo: $process";
    $mail->AltBody = "Nome: $name, Estado/UF: $state, Telefone: $phone, Email: $email, Valor: $value, Processo: $process";

    $mail->send();
    echo 'Email enviado com sucesso';
} catch (Exception $e){
    echo "Erro ao enviar email: {$mail->ErrorInfo}";
}


?>
