<?php
header('Content-Type: text/html; charset=utf-8');

class Mensagens
{
    public $uri;
    public $core;
    public $mensagensModel;

    public function __construct($uri, $core, $mensagensModel)
    {
        $this->uri = $uri;
        $this->core = $core;
        $this->mensagensModel = $mensagensModel;
    }

    public function listar()
    {
        $mensagens = 'btn-light';

        $mensagem = $this->mensagensModel->buscarTodasMensagens();
        $resultado = $mensagem->fetchAll(PDO::FETCH_ASSOC);

        $tabela = $this->core->tabela($resultado, 'ID, NOME, EMPRESA, TELEFONE, AÇÃO', '/mensagens/ver/', 'Ver');

        require('../psicologo_com_br_backoffice/view/mensagens/listar.php');
    }


    public function ver()
    {
        $mensagens = 'btn-light';

        require('../psicologo_com_br_backoffice/view/mensagens/ver.php');
    }

    public function verificaCaractere($valor, $caractere)
    {
        if (strpos($valor, $caractere) == false) {
            return 0;
        }

        return 1;
    }


    public function enviar()
    {


        echo json_encode(['status' => 'success', 'title' => 'Ooba!', 'message' => 'Proposta gerada com sucesso!', 'fileUrl' => 'output.pdf']);
    }
}
