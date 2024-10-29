<?php

class Core
{

    public function validarSession()
    {
        if (!$_SESSION['usuario']) {
            return false;
        }

        return true;
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
            $dado['acao'] = "<a href='$link$dado[id]' class='d-flex justify-content-center'><button class='btn btn-primary btn-ver'>$nome</button></a>";
            $table .= '<tr>';
            foreach ($dado as $chave => $tipoDado) {
                $table .= '<td>' . $tipoDado . '</td>';
            }
            $table .= '</tr>';
        }
        $table .= '</table>';

        return $table;
    }


    public function uploadFiles()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_FILES['imagem'])) {

                $caminhosArquivos = [];


                if ($_FILES['imagem'][0]) {
                    foreach ($_FILES['imagem']['error'] as $key => $erro) {
                        if ($erro === UPLOAD_ERR_OK) {
                            $arquivoTemp = $_FILES['imagem']['tmp_name'][$key];
                            $nomeArquivo = $_FILES['imagem']['name'][$key];
                            $extensao = strtolower(pathinfo($nomeArquivo, PATHINFO_EXTENSION));

                            $destino = 'uploads/';

                            if (!is_dir($destino)) {
                                mkdir($destino, 0755, true);
                            }

                            $nomeAtualizado = md5($nomeArquivo . time()) . '.' . $extensao;
                            $caminho = $destino . $nomeAtualizado;

                            $tiposPermitidos = ['jpg', 'jpeg', 'png', 'gif'];

                            if (in_array($extensao, $tiposPermitidos)) {
                                if (move_uploaded_file($arquivoTemp, $caminho)) {
                                    $caminhosArquivos[] = $caminho;
                                }
                            } else {
                                $this->return("error", 'Oops!', "Tipo de arquivo não permitido para: " . $nomeArquivo . ". Envie uma imagem JPG, JPEG, PNG ou GIF.");
                            }
                        }
                    }
                } else {
                    if (count($_FILES['imagem']) > 1) {
                        foreach ($_FILES['imagem']['error'] as $key => $file) {

                            if (isset($_FILES['imagem']) &&  $file === UPLOAD_ERR_OK) {
                                $arquivoTemp = $_FILES['imagem']['tmp_name'][$key];
                                $nomeArquivo = $_FILES['imagem']['name'][$key];
                                $extensao = strtolower(pathinfo($nomeArquivo, PATHINFO_EXTENSION));

                                $destino = 'uploads/';

                                if (!is_dir($destino)) {
                                    mkdir($destino, 0755, true);
                                }

                                $nomeAtualizado = md5($nomeArquivo) . '.' . $extensao;
                                $caminho = $destino . $nomeAtualizado;

                                $tiposPermitidos = ['jpg', 'jpeg', 'png', 'gif'];


                                if (in_array($extensao, $tiposPermitidos)) {
                                    if (move_uploaded_file($arquivoTemp, $caminho)) {
                                        return $caminho;
                                    } else {
                                        $this->return("error", 'Oops!', "Erro ao mover o arquivo para o destino.");
                                    }
                                } else {
                                    $this->return("error", 'Oops!', "Tipo de arquivo não permitido. Por favor, envie uma imagem JPG, JPEG, PNG ou GIF.");
                                }
                            }
                        }
                    }

                    
                    if (count($_FILES['imagem']) == 1) {
                        // pre('aqui');
                        if (isset($_FILES['imagem']) &&  $_FILES['imagem']['error'] === UPLOAD_ERR_OK) {
                            $arquivoTemp = $_FILES['imagem']['tmp_name'];
                            $nomeArquivo = $_FILES['imagem']['name'];
                            $extensao = strtolower(pathinfo($nomeArquivo, PATHINFO_EXTENSION));

                            $destino = 'uploads/';

                            if (!is_dir($destino)) {
                                mkdir($destino, 0755, true);
                            }

                            $nomeAtualizado = md5($nomeArquivo) . '.' . $extensao;
                            $caminho = $destino . $nomeAtualizado;

                            $tiposPermitidos = ['jpg', 'jpeg', 'png', 'gif'];


                            if (in_array($extensao, $tiposPermitidos)) {
                                if (move_uploaded_file($arquivoTemp, $caminho)) {
                                    return $caminho;
                                } else {
                                    $this->return("error", 'Oops!', "Erro ao mover o arquivo para o destino.");
                                }
                            } else {
                                $this->return("error", 'Oops!', "Tipo de arquivo não permitido. Por favor, envie uma imagem JPG, JPEG, PNG ou GIF.");
                            }
                        }
                    }
                }

                if (!empty($caminhosArquivos)) {
                    return $caminhosArquivos;
                }
                if (!empty($caminho)) {
                    return $caminho;
                }
            }
        }
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
