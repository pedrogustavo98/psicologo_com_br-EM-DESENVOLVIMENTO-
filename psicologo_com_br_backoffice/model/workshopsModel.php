<?php
class WorkshopsModel
{
    public $db;
    public function __construct($db)
    {
        $this->db = $db;
    }


    public function buscarWorkshops($email, $registro, $id)
    {

        $query = "SELECT * FROM profissionais WHERE (email LIKE '%$email%' OR registro LIKE '%$registro%')";

        if (isset($id) && $id == true) {
            $query .= " AND id != $id";
        }

        $stmt = $this->db->prepare($query);
        $stmt->execute();

        return $stmt;
    }

    public function buscarWorkshopsPorId($id)
    {
        $query = "SELECT * FROM workshops WHERE id = $id";
        $stmt = $this->db->prepare($query);
        $stmt->execute();

        return $stmt;
    }

    public function buscarTodosWorkshops()
    {

        $query = "SELECT id, nome_evento FROM workshops";

        $stmt = $this->db->prepare($query);
        $stmt->execute();

        return $stmt;
    }

    public function salvarWorkshops($dados)
    {
        $query = "INSERT INTO workshops (imagem_um, imagem_dois, imagem_tres, nome_evento, descricao, usuario_id) VALUES (:imagem_um, :imagem_dois, :imagem_tres, :nome_evento, :descricao, :usuario_id)";

        $stmt = $this->db->prepare($query);

        $usuarioId = $_SESSION['usuario']['id'];

        $stmt->bindParam(':imagem_um', $dados['imagem_um']);
        $stmt->bindParam(':imagem_dois', $dados['imagem_dois']);
        $stmt->bindParam(':imagem_tres', $dados['imagem_tres']);
        $stmt->bindParam(':nome_evento', $dados['nome']);
        $stmt->bindParam(':descricao', $dados['descricao']);
        $stmt->bindParam(':usuario_id', $usuarioId);

        $stmt->execute();

        return $stmt;
    }


    public function alterarWorkshops($dados)
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
