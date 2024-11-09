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


        $imagens = $this->core->uploadMoreFiles($_FILES['imagem']);

        $retorno = [];
        foreach ($imagens as $imagem) {
            $arquivoTemp = $imagem['tmp_name'];
            $nomeArquivo = $imagem['name'];
            $extensao = strtolower(pathinfo($nomeArquivo, PATHINFO_EXTENSION));

            $destino = 'uploads/';
            $nomeAtualizado = md5($nomeArquivo) . '.' . $extensao;


            $caminho = $destino . $nomeAtualizado;


            if (move_uploaded_file($arquivoTemp, $caminho)) {
                $retorno[] = $caminho;
            } else {
                $this->core->return("error", 'Oops!', "Erro ao mover o arquivo para o destino.");
            }
        }

        $_POST['imagens'] = $retorno;

        $salvarProfissional = $this->workshopsModel->salvarWorkshops($_POST);


        $this->core->return('success', 'Oba!', 'Workshop salvo com sucesso!');
    }

    public function alterar()
    {
        $imagens = $this->core->uploadMoreFiles($_FILES['imagem']);

        $retorno = [];

        foreach ($imagens as $key => $imagem) {

            // Somente processa a imagem se ela foi enviada (size > 0)
            if ($imagem['size'] > 0) {
                // Define a coluna correta com base no índice
                switch ($key) {
                    case 0:
                        $coluna = 'imagem_um';
                        break;
                    case 1:
                        $coluna = 'imagem_dois';
                        break;
                    case 2:
                        $coluna = 'imagem_tres';
                        break;
                    default:
                        continue; // Caso inesperado, ignora
                }

                // Prepara informações do arquivo para upload
                $arquivoTemp = $imagem['tmp_name'];
                $nomeArquivo = $imagem['name'];
                $extensao = strtolower(pathinfo($nomeArquivo, PATHINFO_EXTENSION));
                $destino = 'uploads/';
                $nomeAtualizado = md5($nomeArquivo) . '.' . $extensao;

                // Define o caminho e coluna para retorno
                $caminho['caminho'] = $destino . $nomeAtualizado;
                $caminho['coluna'] = $coluna;

                // pre($caminho);
                // Move o arquivo e verifica sucesso

                pre(move_uploaded_file($arquivoTemp, $caminho['caminho']));
                if (move_uploaded_file($arquivoTemp, $caminho['caminho'])) {
                    $retorno[] = $caminho;
                } else {
                    pre(2);
                    $this->core->return("error", 'Oops!', "Erro ao mover o arquivo para o destino.");
                }
            }
        }

        // Atualiza o array POST com as imagens processadas para o banco de dados
        $_POST['imagens'] = $retorno;

        // Salva o workshop com as imagens atualizadas
        $salvarProfissional = $this->workshopsModel->alterarWorkshop($_POST);
    }


    public function enviar()
    {

        echo json_encode(['status' => 'success', 'title' => 'Ooba!', 'message' => 'Proposta gerada com sucesso!', 'fileUrl' => 'output.pdf']);
    }
}
