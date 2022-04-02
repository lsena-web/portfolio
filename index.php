<?php

require __DIR__ . '/vendor/autoload.php';

use \App\Communication\Email;

if (isset($_POST['enviar']) && !empty($_POST['enviar'])) {

    // DADOS DO FORMULÁRIO
    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    // INSTANCIA DE reCAPTCHA
    $obRecaptcha = new \App\Utils\ReCAPTCHA($dados['g-recaptcha-response'], '6LcwoxUfAAAAAOI4IVWXrixB3a_8vG-zDuVdOi-s');

    $recaptcha = $obRecaptcha->validate();

    if ($recaptcha) {

        $nome       = $dados['nome'];
        $email      = $dados['email'];
        $assunto    = $dados['assunto'];
        $mensagem   = $dados['mensagem'];

        $body = '<HTML><P><b>Nome: </b>' . $nome . '</p><P><b>E-mail: </b>' . $email . '</p><p>' . $mensagem . '</p></HTML>';


        // INSTANCIA
        $obEmail = new Email;

        // ENVIO DE E-MAIL
        $sucesso = $obEmail->sendEmail('lsena.web@gmail.com', $assunto, $body);

        if ($sucesso) {

            // REDIRECT
            header('Location: ' . $_SERVER['PHP_SELF'] . '?send=success#contact');
            exit;
        } else {

            // REDIRECT
            header('Location: ' . $_SERVER['PHP_SELF'] . '?send=error#contact');
            exit;
        }
    }
}




include __DIR__ . '/templates/header.php';
include __DIR__ . '/pages/principal.php';
include __DIR__ . '/templates/footer.html';
