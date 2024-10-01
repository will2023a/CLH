<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Certifique-se de que o caminho está correto

// Função para enviar e-mail
function enviarFormulario($nome, $email, $mensagem) {
    $mail = new PHPMailer(true);

    try {
        // Configurações do servidor
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com'; // Endereço do servidor SMTP
        $mail->SMTPAuth   = true;
        $mail->Username   = 'wilpo93.wo@gmail.com'; // Seu e-mail
        $mail->Password   = 'Nospornos08@'; // Senha do e-mail ou App Password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Remetente e destinatário
        $mail->setFrom($email, $nome);
        $mail->addAddress('wilpo93.wo@gmail.com', 'William');

        // Conteúdo do e-mail
        $mail->isHTML(true);
        $mail->Subject = 'Contato Site BLESSED';
        $mail->Body    = "Nome: $nome<br>Email: $email<br>Mensagem: $mensagem";

        $mail->send();
        echo "Mensagem enviada com sucesso!";
        
        // Redireciona para a página inicial
        header('Location: index.html');
        exit();
    } catch (Exception $e) {
        echo "Mensagem não enviada. Erro: {$mail->ErrorInfo}";
    }
}

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];
    enviarFormulario($nome, $email, $mensagem);
}
