<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Certifique-se de que o caminho está correto

// Função para enviar e-mail
function enviarFormulario($nome, $email, $mensagem) {
    try {
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = 'sandbox.smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = 'b87de3a45ffed1';
        $mail->Password = '0c1ac19df262fd';

        // Configurações do e-mail
        $mail->setFrom('noreply@blessplan.com', 'BlessPlan');
        $mail->addAddress($email, $nome);
        $mail->isHTML(true);
        $mail->Subject = 'Contato Site BLESSED';
        $mail->Body    = "Nome: $nome<br>Email: $email<br>Mensagem: $mensagem";

        $mail->send();

        // Mensagem de sucesso na sessão
        $_SESSION['mensagem'] = "Mensagem enviada com sucesso!";
        $_SESSION['tipo'] = "sucesso";

    } catch (Exception $e) {
        // Mensagem de erro na sessão
        $_SESSION['mensagem'] = "Erro ao enviar mensagem: {$mail->ErrorInfo}";
        $_SESSION['tipo'] = "erro";
    }
    // Redireciona para a página inicial
    header('Location: index.php');
    exit();
}

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];
    enviarFormulario($nome, $email, $mensagem);
}
