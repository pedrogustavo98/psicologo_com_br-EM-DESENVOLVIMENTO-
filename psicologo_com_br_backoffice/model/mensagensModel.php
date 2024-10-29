<?php
class MensagensModel
{

    public $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function buscarTodasMensagens()
    {
        $query = "SELECT id, nome, empresa, telefone FROM mensagens";

        $stmt = $this->db->prepare($query);
        $stmt->execute();

        return $stmt;
    }
}
