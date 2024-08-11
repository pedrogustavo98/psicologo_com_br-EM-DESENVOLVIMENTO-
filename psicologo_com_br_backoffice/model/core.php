<?php

class Core
{
    
    public function validarSession()
    {
        if (!$_SESSION['usuario']) {
            return false;
        }
    }
    
    
    public function return($status = '', $titulo = '', $mensagem = '', $data = [])
    {
        header('Content-Type: application/json');
        $dados = ['status' => $status, 'titulo' => $titulo, 'mensagem' => $mensagem, 'data' => $data];
        echo json_encode($dados);
        exit;
    }

    public function redirect($url)
    {
        header('Location: '. '/' . $url);
        exit;
    }
}
