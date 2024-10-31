<?php
class QuemsomosModel
{
    public $db;
    public function __construct($db)
    {
        $this->db = $db;
    }


    public function salvarQuemSomos($dados)
    {
        if ($dados['sobreposicao']) {
            $queryCriada[] = 'sobre_posicao = :sobre_posicao';
        }

        if ($dados['texto-final']) {
            $queryCriada[] = 'texto_final = :texto_final';
        }

        if ($dados['imagem']) {
            $queryCriada[] = 'imagem = :imagem';
        }


        if(empty($queryCriada)){
            return false;
        }

        $queryResultado = implode(', ', $queryCriada);

        $query = "UPDATE quem_somos SET $queryResultado";
        $stmt = $this->db->prepare($query);

        if ($dados['sobreposicao']) {
            $stmt->bindParam(':sobre_posicao', $dados['sobreposicao']);
        }

        if ($dados['texto-final']) {
            $stmt->bindParam(':texto_final', $dados['texto-final']);
        }

        if ($dados['imagem']) {
            $stmt->bindParam(':imagem', $dados['imagem']);
        }


        if (!$stmt->execute()) {

            $errorInfo = $stmt->errorInfo();

            echo "Erro ao atualizar: " . $errorInfo[2]; 
        }

        return $stmt;
    }

    public function buscarQuemSomos()
    {
        $query = "SELECT * FROM quem_somos";

        $stmt = $this->db->prepare($query);


        $stmt->execute();
        return $stmt;
    }
}
