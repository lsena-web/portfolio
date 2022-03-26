<?php

namespace App\Communication;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception as PHPMailerException;


class Email
{

    /**
     * Credenciais do SMTP
     * @var string
     */
    const HOST      = '********#';
    const USER      = '********#';
    const PASS      = '********#';
    const SECURE    = 'ssl';
    const PORT      = '465';
    const CHARSET   = 'UTF-8';

    /**
     * Dados do remetente
     * @var string
     */
    const FROM_EMAIL = '####################';
    const FROM_NAME  = '####################';

    /**
     * Menssagem de erro do envio
     * @var string
     */
    private $error;


    /**
     * Método responsável por retornar a mensagem de erro do envio
     * @return string
     */
    public function getError()
    {

        return $this->error;
    }

    /**
     * Método responsável por enviar um e-mail
     * @param string $destinatario
     * @param string $assunto
     * @param string $corpo
     * @param string|array $anexos
     * @param string|array $ccs
     * @param string|array $bccs
     * @return boolean
     */

    public function sendEmail($destinatario, $assunto, $corpo, $anexos = [], $ccs = [], $bccs = [])
    {

        //LIMPAR A MENSAGEM DE ERRO
        $this->error = '';

        // INSTANCIA DE PHPMAILER
        $obMail = new PHPMailer(true);

        try {

            // CREDENCIAIS DE ACESSO AO SMTP
            $obMail->isSMTP(true);
            $obMail->Host       = self::HOST;
            $obMail->SMTPAuth   = true;
            $obMail->Username   = self::USER;
            $obMail->Password   = self::PASS;
            $obMail->SMTPSecure = self::SECURE;
            $obMail->Port       = self::PORT;
            $obMail->CharSet    = self::CHARSET;

            // REMETENTE
            $obMail->setFrom(self::FROM_EMAIL, self::FROM_NAME);

            // DESTINATÁRIOS
            $destinatario = is_array($destinatario) ? $destinatario : [$destinatario];
            foreach ($destinatario as $value) {
                $obMail->addAddress($value);
            }


            // ANEXOS
            $anexos = is_array($anexos) ? $anexos : [$anexos];
            foreach ($anexos as $anexo) {
                $obMail->addAttachment($anexo);
            }

            // COPIAS VISIVEIS
            $ccs = is_array($ccs) ? $ccs : [$ccs];
            foreach ($ccs as $cc) {
                $obMail->addCC($cc);
            }

            // COPIAS OCULTAS
            $bccs = is_array($bccs) ? $bccs : [$bccs];
            foreach ($bccs as $bcc) {
                $obMail->addBCC($bcc);
            }

            // CONTEÚDO DO EMAIL
            $obMail->isHTML(true);
            $obMail->Subject = $assunto;
            $obMail->Body = $corpo;

            // ENVIA O EMAIL
            return $obMail->send();
        } catch (PHPMailerException $e) {

            $$this->error = $e->getMessage();
            return false;
        }
    }
}
