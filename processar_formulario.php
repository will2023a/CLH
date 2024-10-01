<?php

namespace processar_formulario;

class Form {
    public function enviarFormulario($nome, $email, $mensagem) {
        // Monta o corpo do e-mail
        $corpoEmail = "Nome: " . $nome . "\n" .
                      "Email: " . $email . "\n" .
                      "Mensagem: " . $mensagem;

        // Cabeçalhos do e-mail
        $headers = 'From: ' . $email . "\r\n" .
                   'Reply-To: ' . $email . "\r\n" .
                   'X-Mailer: PHP/' . phpversion();

        // Envia o e-mail
        if (mail("wilpo93.wo@gmail.com", "Contato Site BLESSED", $corpoEmail, $headers)) {
            echo "Mensagem enviada com sucesso!";
            
            // Redireciona para a página inicial
            header('Location: index.html');
            exit();
        } else {
            echo "Erro ao enviar a mensagem.";
        }
    }
}
