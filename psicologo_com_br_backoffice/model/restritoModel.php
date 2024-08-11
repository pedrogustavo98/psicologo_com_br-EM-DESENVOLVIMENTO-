<?php
class RestritoModel
{
    public $db;
    public function __construct($db) {
        $this->db = $db;
    }

    public function buscarUsuario($email){

        $query = "SELECT * FROM usuarios WHERE email LIKE '%$email%'";
        
        $stmt = $this->db->prepare($query);
        $stmt->execute();

        
        return $stmt;
    }
}
