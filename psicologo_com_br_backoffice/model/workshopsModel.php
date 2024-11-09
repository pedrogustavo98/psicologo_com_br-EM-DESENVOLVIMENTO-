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

        $stmt->bindParam(':imagem_um', $dados['imagens'][0]);
        $stmt->bindParam(':imagem_dois', $dados['imagens'][1]);
        $stmt->bindParam(':imagem_tres', $dados['imagens'][2]);
        $stmt->bindParam(':nome_evento', $dados['nome']);
        $stmt->bindParam(':descricao', $dados['descricao']);
        $stmt->bindParam(':usuario_id', $usuarioId);

        $stmt->execute();

        return $stmt;
    }


    public function alterarWorkshop($dados)
    {
        $queryCriada = [];


        if ($dados['imagens']) {
            foreach ($dados['imagens'] as $key => $imagem) {
                // pre($imagem);
                if (!empty($dados['imagens']['imagem_um'])) {
                    $queryCriada[] = 'imagem_um = :imagem_um';
                }
                if (!empty($dados['imagens']['imagem_dois'])) {
                    $queryCriada[] = 'imagem_dois = :imagem_dois';
                }
                if (!empty($dados['imagens']['imagem_tres'])) {
                    $queryCriada[] = 'imagem_tres = :imagem_tres';
                }
            }
        }

        if (!empty($dados['nome_evento'])) {
            $queryCriada[] = 'nome_evento = :nome_evento';
        }
        if (!empty($dados['descricao'])) {
            $queryCriada[] = 'descricao = :descricao';
        }
        if (!empty($dados['usuario_id'])) {
            $queryCriada[] = 'usuario_id = :usuario_id';
        }

        if (empty($queryCriada)) {
            return false;
        }

        $queryResultado = implode(', ', $queryCriada);

        $query = "UPDATE workshops SET $queryResultado WHERE id = :id";
        $stmt = $this->db->prepare($query);

        if (!empty($dados['imagem_um'])) {
            $stmt->bindParam(':imagem_um', $dados['imagem_um']);
        }
        if (!empty($dados['imagem_dois'])) {
            $stmt->bindParam(':imagem_dois', $dados['imagem_dois']);
        }
        if (!empty($dados['imagem_tres'])) {
            $stmt->bindParam(':imagem_tres', $dados['imagem_tres']);
        }
        if (!empty($dados['nome_evento'])) {
            $stmt->bindParam(':nome_evento', $dados['nome_evento']);
        }
        if (!empty($dados['descricao'])) {
            $stmt->bindParam(':descricao', $dados['descricao']);
        }
        if (!empty($dados['usuario_id'])) {
            $stmt->bindParam(':usuario_id', $dados['usuario_id']);
        }

        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        if (!$stmt->execute()) {
            $errorInfo = $stmt->errorInfo();
            echo "Erro ao atualizar: " . $errorInfo[2];
            return false;
        }

        return true;
    }
}
