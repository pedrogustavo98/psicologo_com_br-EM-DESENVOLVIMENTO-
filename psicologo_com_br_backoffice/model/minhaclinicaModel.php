<?php
class MinhaClinicaModel
{

    public $db;
    public function __construct($db)
    {
        $this->db = $db;
    }


    public function buscarClinicaPorId()
    {
        $query = "SELECT * FROM minha_clinica WHERE id = 1";

        $stmt = $this->db->prepare($query);
        $stmt->execute();

        return $stmt;
    }


    public function alterarClinica($dados)
    {
        $query = "UPDATE minha_clinica SET whatsapp = :whatsapp, telefone = :telefone, email = :email, facebook = :facebook, logradouro = :logradouro, complemento = :complemento, numero = :numero, bairro = :bairro, cidade = :cidade, estado = :estado, cep = :cep, instagram = :instagram, usuario_id = :usuario_id WHERE id = :id";

        $stmt = $this->db->prepare($query);

        $usuarioId = $_SESSION['usuario']['id'];

        $stmt->bindParam(':whatsapp', $dados['whatsapp']);
        $stmt->bindParam(':telefone', $dados['telefone']);
        $stmt->bindParam(':email', $dados['email']);
        $stmt->bindParam(':facebook', $dados['facebook']);
        $stmt->bindParam(':logradouro', $dados['rua']);
        $stmt->bindParam(':complemento', $dados['complemento']);
        $stmt->bindParam(':numero', $dados['numero']);
        $stmt->bindParam(':bairro', $dados['bairro']);
        $stmt->bindParam(':cidade', $dados['cidade']);
        $stmt->bindParam(':estado', $dados['uf']);
        $stmt->bindParam(':cep', $dados['cep']);
        $stmt->bindParam(':instagram', $dados['instagram']);
        $stmt->bindParam(':usuario_id', $usuarioId);
        $stmt->bindParam(':id', $dados['id']);

        $stmt->execute();

        return $stmt;
    }
}
