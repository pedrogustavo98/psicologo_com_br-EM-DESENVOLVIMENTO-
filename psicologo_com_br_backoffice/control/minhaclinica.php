<?php
header('Content-Type: text/html; charset=utf-8');

class MinhaClinica
{
    public $uri;
    public $clinica;
    public $core;

    public function __construct($uri, $clinica, $core)
    {
        $this->uri = $uri;
        $this->clinica = $clinica;
        $this->core = $core;

    }

    public function alterar()
    {
        $clinica = "active";

        $_POST['id'] = 1;

        $clinicas = $this->clinica->alterarClinica($_POST);

        $this->core->return('success', 'Oba!', 'Dados alterados com sucesso!');

    }

    public function start()
    {
        $clinica = "btn-light";

        $clinicas = $this->clinica->buscarClinicaPorId();
        $resultado = $clinicas->fetchAll(PDO::FETCH_ASSOC)[0];

        
        require('../psicologo_com_br_backoffice/view/minhaclinica/start.php');
    }


    public function verificaCaractere($valor, $caractere)
    {
        if (strpos($valor, $caractere) == false) {
            return 0;
        }

        return 1;
    }

   
}
