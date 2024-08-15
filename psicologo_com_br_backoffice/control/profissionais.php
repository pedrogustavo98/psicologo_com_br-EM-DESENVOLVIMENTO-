<?php
header('Content-Type: text/html; charset=utf-8');

class Profissionais
{
    public $uri;
    public $profissionaisModel;
    public $core;

    public function __construct($uri, $profissionaisModel, $core)
    {
        $this->uri = $uri;
        $this->profissionaisModel = $profissionaisModel;
        $this->core = $core;
    }

    public function cadastrar()
    {
        $profissionais = 'btn-light';

        require('../psicologo_com_br_backoffice/view/profissionais/cadastrar.php');
    }

    public function ver($id)
    {
        $id = $id;
        $profissionais = 'btn-light';
        $profissional = $this->profissionaisModel->buscarProfissionalPorId($id);
        $resultado = $profissional->fetchAll(PDO::FETCH_ASSOC)[0];

        require('../psicologo_com_br_backoffice/view/profissionais/ver.php');
    }

    public function start()
    {

        $profissionais = 'btn-light';
        $profissional = $this->profissionaisModel->buscarTodosProfissionais($_POST['nome'], $_POST['email'], $_POST['registro']);
        $resultado = $profissional->fetchAll(PDO::FETCH_ASSOC);


        $tabela = $this->core->tabela($resultado, 'ID, PROFISSIONAL, E-MAIL, REGISTRO, AÇÃO', '/profissionais/ver/', 'Ver');

        require('../psicologo_com_br_backoffice/view/profissionais/listar.php');
    }

    public function salvar()
    {
        $profissionais = 'btn-light';

        if($_POST['nome']  == false || $_POST['email']  == false || $_POST['registro']  == false || $_POST['tipo'] == false ){
            $this->core->return('error', 'Oops!', 'Verifique os campos e tente novamente!');
        }

        $profissional = $this->profissionaisModel->buscarProfissional($_POST['email'], $_POST['registro'], '');
        $resultado = $profissional->fetchAll(PDO::FETCH_ASSOC);

        if ($resultado[0]) {
            $this->core->return('error', 'Oops!', 'Já existe um profissional com o email ou número de registro cadastrado.');
        }
        
        
        $_POST['imagem'] = $file = $this->core->uploadFiles();

        $salvarProfissional = $this->profissionaisModel->salvarProfissional($_POST);

        $this->core->return('success', 'Oba!', 'Profissional salvo com sucesso!');


        require('../psicologo_com_br_backoffice/view/profissionais/listar.php');
    }


    public function alterar($id)
    {
        $profissionais = 'btn-light';
        $profissional = $this->profissionaisModel->buscarProfissional($_POST['email'], $_POST['registro'], $id);
        $resultado = $profissional->fetchAll(PDO::FETCH_ASSOC);
        if ($resultado[0]) {
            $this->core->return('error', 'Oops!', 'Já existe um profissional com o email ou número de registro cadastrado.');
        }
        
        
        $_POST['imagem'] = $file = $this->core->uploadFiles();
        $_POST['id'] = $id;
        $salvarProfissional = $this->profissionaisModel->alterarProfissional($_POST);

        $this->core->return('success', 'Oba!', 'Profissional salvo com sucesso!');


        require('../psicologo_com_br_backoffice/view/profissionais/listar.php');
    }


    public function verificaCaractere($valor, $caractere)
    {
        if (strpos($valor, $caractere) == false) {
            return 0;
        }

        return 1;
    }
    

}
