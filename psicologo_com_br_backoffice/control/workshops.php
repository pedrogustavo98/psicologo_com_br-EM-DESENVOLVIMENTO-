<?php
header('Content-Type: text/html; charset=utf-8');

class Workshops
{
    public $uri;
    public $workshopsModel;
    public $core;

    public function __construct($uri, $workshopsModel, $core)
    {
        $this->uri = $uri;
        $this->workshopsModel = $workshopsModel;
        $this->core = $core;
    }

    public function cadastrar()
    {
        $workshops = 'btn-light';

        require('../psicologo_com_br_backoffice/view/workshops/cadastrar.php');
    }

    public function ver($id)
    {
        $id = $id;
        $workshops = 'btn-light';
        $workshop = $this->workshopsModel->buscarWorkshopsPorId($id);
        $resultado = $workshop->fetchAll(PDO::FETCH_ASSOC)[0];

        require('../psicologo_com_br_backoffice/view/workshops/ver.php');
    }

    public function start()
    {
        $workshops = 'btn-light';
        $workshop = $this->workshopsModel->buscarTodosWorkshops();
        $resultado = $workshop->fetchAll(PDO::FETCH_ASSOC);

        $tabela = $this->core->tabela($resultado, 'ID, WORKSHOP, AÇÃO', '/workshops/ver/', 'Ver');


        require('../psicologo_com_br_backoffice/view/workshops/listar.php');
    }
    
    public function salvar()
    {
        $workshops = 'btn-light';

        $file = $this->core->uploadFiles();
      
        $_POST['imagem_um'] = $file[0];
        $_POST['imagem_dois'] = $file[1];
        $_POST['imagem_tres'] = $file[2];

        $salvarProfissional = $this->workshopsModel->salvarWorkshops($_POST);


        $this->core->return('success', 'Oba!', 'Workshop salvo com sucesso!');
    } 

    public function enviar()
    {

        echo json_encode(['status' => 'success', 'title' => 'Ooba!', 'message' => 'Proposta gerada com sucesso!', 'fileUrl' => 'output.pdf']);
    }

}
