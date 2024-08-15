<?php
header('Content-Type: text/html; charset=utf-8');

class Restrito
{
    public $uri;
    public $restritoModel;
    public $core;

    public function __construct($uri, $restritoModel, $core)
    {
        $this->uri = $uri;
        $this->restritoModel = $restritoModel;
        $this->core = $core;
    }

    public function cadastrar()
    {
        // pre('aqui');
        $workshops = 'btn-light';

        require('../psicologo_com_br_backoffice/view/workshops/cadastrar.php');
    }

    public function ver()
    {
        // pre('aqui');
        $workshops = 'btn-light';

        require('../psicologo_com_br_backoffice/view/workshops/ver.php');
    }

    public function start()
    {


        require('../psicologo_com_br_backoffice/view/restrito/start.php');
    }

    public function login()
    {

        $usuario = $this->restritoModel->buscarUsuario($_POST['email']);
        $resultado = $usuario->fetchAll(PDO::FETCH_ASSOC)[0];
        
        if ($resultado) {
            if (password_verify($_POST['senha'], $resultado['senha'])) {
                $_SESSION['usuario'] = $resultado;
                $this->core->return('success', 'Ooba!', "Olá, $resultado[nome]! Seja bem vindo!");
            }
           
            $this->core->return('error', 'Oops!', 'Verique a senha e tente novamente!');
        }


        $this->core->return('error', 'Oops!', 'Verique o email e tente novamente!');
    }

    public function logout()
    {
       session_destroy();
       $this->core->return('success', '', '', '');
    }

}
