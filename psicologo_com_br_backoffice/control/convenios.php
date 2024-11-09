<?php
header('Content-Type: text/html; charset=utf-8');

class Convenios
{
    public $uri;
    public $conveniosModel;
    public $core;

    public function __construct($uri, $conveniosModel, $core)
    {
        $this->uri = $uri;
        $this->conveniosModel = $conveniosModel;
        $this->core = $core;
    }


    public function cadastrar()
    {
        $convenios = 'btn-light';

        require('../psicologo_com_br_backoffice/view/convenios/cadastrar.php');
    }

    public function ver($id)
    {
        $convenios = 'btn-light';

        $id = $id;
        $lista = $this->conveniosModel->buscarConveniosPorId($id);
        $resultado = $lista->fetchAll(PDO::FETCH_ASSOC)[0];

        require('../psicologo_com_br_backoffice/view/convenios/ver.php');
    }

    public function start()
    {
        $convenios = 'btn-light';

        $lista = $this->conveniosModel->buscarTodosConvenios();
        $resultado = $lista->fetchAll(PDO::FETCH_ASSOC);

        $tabela = $this->core->tabela($resultado, 'ID, CONVÊNIO, AÇÃO', '/convenios/ver/', 'Ver');

        require('../psicologo_com_br_backoffice/view/convenios/listar.php');
    }


    public function salvar()
    {
        $convenios = 'btn-light';

        $file = $this->core->uploadFiles();

        $_POST['imagem'] = $file;

        $salvar = $this->conveniosModel->salvarConvenios($_POST);

        $this->core->return('success', 'Oba!', 'Convênio salvo com sucesso!');
    }

    public function alterar()
    {
        $convenios = 'btn-light';

        $file = $this->core->uploadFiles();

        $_POST['imagem'] = $file;

        $salvar = $this->conveniosModel->alterarConvenios($_POST);
        

        $this->core->return('success', 'Oba!', 'Convênio salvo com sucesso!');
    }
}
