<?php
class ProfissionaisModel
{
    public $db;
    public function __construct($db)
    {
        $this->db = $db;
    }

    public function buscarProfissional($email, $registro)
    {
        $query = "SELECT * FROM profissionais WHERE email LIKE '%$email%' OR registro LIKE '%$registro%'";
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
        $query = "INSERT INTO profissionais (nome, email, senha, tipo, registro, usuario_id) VALUES (:nome, :email, :senha, :tipo, :registro, :usuario_id)";

        $stmt = $this->db->prepare($query);

        $senha = '';
        $usuarioId = $_SESSION['usuario']['id'];

        $stmt->bindParam(':nome', $dados['nome']);
        $stmt->bindParam(':email', $dados['email']);
        $stmt->bindParam(':senha', $senha);
        $stmt->bindParam(':tipo', $dados['tipo']);
        $stmt->bindParam(':registro', $dados['registro']);
        $stmt->bindParam(':usuario_id', $usuarioId);
        
        $stmt->execute();

        return $stmt;
    }
}
