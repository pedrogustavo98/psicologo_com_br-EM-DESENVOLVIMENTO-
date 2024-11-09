<?php
class ConveniosModel
{
    public $db;
    public function __construct($db)
    {
        $this->db = $db;
    }

    public function alterarConvenios($dados)
    {
        if ($dados['nome']) {
            $queryCriada[] = 'nome = :nome';
        }

        if ($dados['imagem']) {
            $queryCriada[] = 'imagem = :imagem';
        }


        if (empty($queryCriada)) {
            return false;
        }

        $queryResultado = implode(', ', $queryCriada);

        $query = "UPDATE convenios SET $queryResultado WHERE id = $dados[id]";

        $stmt = $this->db->prepare($query);

        if ($dados['nome']) {
            $stmt->bindParam(':nome', $dados['nome']);
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

    public function salvarConvenios($dados)
    {
        if (empty($dados['nome']) || empty($dados['imagem'])) {
            return false;
        }

        $query = "INSERT INTO convenios (nome, imagem) VALUES (:nome, :imagem)";
        $stmt = $this->db->prepare($query);

        $stmt->bindParam(':nome', $dados['nome']);
        $stmt->bindParam(':imagem', $dados['imagem']);

        if (!$stmt->execute()) {
            $errorInfo = $stmt->errorInfo();
            echo "Erro ao salvar: " . $errorInfo[2];
            return false;
        }

        return $stmt;
    }

    public function buscarConvenios($nome, $id)
    {

        $query = "SELECT * FROM convenios WHERE (nome LIKE '%$nome%' OR id = '$id')";

        if (isset($id) && $id == true) {
            $query .= " AND id != $id";
        }

        $stmt = $this->db->prepare($query);
        $stmt->execute();

        return $stmt;
    }


    public function buscarConveniosPorId($id)
    {
        $query = "SELECT * FROM convenios WHERE id = $id";
        $stmt = $this->db->prepare($query);
        $stmt->execute();

        return $stmt;
    }

    public function buscarTodosConvenios()
    {

        $query = "SELECT id, nome FROM convenios";

        $stmt = $this->db->prepare($query);
        $stmt->execute();

        return $stmt;
    }
}
