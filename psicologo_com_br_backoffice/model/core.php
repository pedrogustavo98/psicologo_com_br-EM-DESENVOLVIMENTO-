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


    public function tabela($dados, $header, $link, $nome)
    {
        $cabecalho = $this->tratarHeader($header);
        $table = '<table>';

        $table .= '<thead>';
        foreach ($cabecalho as $key => $coluna) {
            $table .= '<th>' . $coluna . '</th>';
        }
        $table .= '</thead>';

        foreach ($dados as $key => $dado) {
            $dado['acao'] = "<a href='$link$dado[id]'><button class='btn btn-primary'>$nome</button></a>";
            $table .= '<tr>';
            foreach ($dado as $chave => $tipoDado) {
                $table .= '<td>' . $tipoDado . '</td>';
            }
            $table .= '</tr>';
        }
        $table .= '</table>';

        return $table;
    }


    public function tratarHeader($header)
    {
        $header = explode(',', $header);

        return $header;
    }

    public function redirect($url)
    {
        header('Location: ' . '/' . $url);
        exit;
    }
}
