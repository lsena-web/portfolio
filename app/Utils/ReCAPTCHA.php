<?php

namespace App\Utils;


class ReCAPTCHA
{

    /**
     * Chave secreta
     * @var string
     */
    private $secreteKey;

    /**
     * token do formulário
     * @var string
     */
    private $response;


    /**
     * Construtor do método
     */
    public function __construct($response, $secreteKey)
    {

        $this->response = $response;

        $this->secreteKey = $secreteKey;
    }


    /**
     * Método responsável por validar o reCAPTCHA
     * @return boolean
     */
    public function validate()
    {

        // CURL
        $curl = curl_init();

        // DEFINIÇÕES DA REQUISIÇÃO COM CURL
        curl_setopt_array($curl, [

            CURLOPT_URL => 'https://www.google.com/recaptcha/api/siteverify',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => [

                'secret' => $this->secreteKey,
                'response' => $this->response ?? ''
            ]
        ]);

        // EXECUTA A REQUISIÇÃO
        $response = curl_exec($curl);

        // FECHA A CONEXÃO CURL
        curl_close($curl);

        // RESPONSE EM ARRAY
        $responseArray = json_decode($response, true);

        // SUCESSO DO RECAPTCHA
        return $responseArray['success'] ?? false;
    }
}
