<?php
class ProfissionaisModel
{
    public $db;
    public function __construct($db)
    {
        $this->db = $db;
    }

    public function buscarProfissional($email, $registro, $id)
    {

        $query = "SELECT * FROM profissionais WHERE (email LIKE '%$email%' OR registro LIKE '%$registro%')";

        if(isset($id) && $id == true){
            $query .= " AND id != $id";
        }

        $stmt = $this->db->prepare($query);
        $stmt->execute();

        return $stmt;
    }

    public function buscarProfissionalPorId($id)
    {
        $query = "SELECT * FROM profissionais WHERE id = $id";
        $stmt = $this->db->prepare($query);
        $stmt->execute();

        return $stmt;
    }

    public function buscarTodosProfissionais()
    {

        $query = "SELECT id, nome, email, registro FROM profissionais";

        $stmt = $this->db->prepare($query);
        $stmt->execute();

        return $stmt;
    }

    public function salvarProfissional($dados)
    {
        $query = "INSERT INTO profissionais (nome, email, senha, tipo, registro, usuario_id, imagem) VALUES (:nome, :email, :senha, :tipo, :registro, :usuario_id, :imagem)";

        $stmt = $this->db->prepare($query);

        $senha = '';
        $usuarioId = $_SESSION['usuario']['id'];

        $stmt->bindParam(':nome', $dados['nome']);
        $stmt->bindParam(':email', $dados['email']);
        $stmt->bindParam(':senha', $senha);
        $stmt->bindParam(':tipo', $dados['tipo']);
        $stmt->bindParam(':registro', $dados['registro']);
        $stmt->bindParam(':usuario_id', $usuarioId);
        $stmt->bindParam(':imagem', $dados['imagem']);

        $stmt->execute();

        return $stmt;
    }


    public function alterarProfissional($dados)
    {
        $query = "UPDATE profissionais SET nome = :nome, email = :email, senha = :senha, tipo = :tipo, registro = :registro, usuario_id = :usuario_id, imagem = :imagem WHERE id = :id";

        $stmt = $this->db->prepare($query);

        $senha = '';
        $usuarioId = $_SESSION['usuario']['id'];

        $stmt->bindParam(':nome', $dados['nome']);
        $stmt->bindParam(':email', $dados['email']);
        $stmt->bindParam(':senha', $senha);
        $stmt->bindParam(':tipo', $dados['tipo']);
        $stmt->bindParam(':registro', $dados['registro']);
        $stmt->bindParam(':usuario_id', $usuarioId);
        $stmt->bindParam(':imagem', $dados['imagem']);
        $stmt->bindParam(':id', $dados['id']);

        $stmt->execute();

        return $stmt;
    }
}
