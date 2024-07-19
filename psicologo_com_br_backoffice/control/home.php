<?php
header('Content-Type: text/html; charset=utf-8');

class Home
{
    public function __construct()
    {
    }

    public function cadastrar()
    {
        pre('aqui');
    }

    public function listar()
    {
        require('../propostas/view/home/listar.php');
    }


    public function verificaCaractere($valor, $caractere)
    {
        if (strpos($valor, $caractere) == false) {
            return 0;
        }

        return 1;
    }

    public function validarCampos($dados)
    {
        $nome = explode(' ', $dados['nome']);

        if (count($nome) < 2) {
            return 'nome_cliente';
        }

        if (isset($dados['sv-painel']) === false && isset($dados['sv-app']) === false && isset($dados['sv-pwa']) === false && isset($dados['sv-site']) === false) {
            return 'servicos';
        }

        if ($dados['tecnologia']) {
            if (!$this->verificaCaractere($dados['tecnologia'], ',')) {
                return 'tecnologia-caractere';
            }
        }

        if ($dados['funcionalidade']) {
            if (!$this->verificaCaractere($dados['funcionalidade'], '/')) {
                return 'funcionalidade-caractere';
            }
        }
    }

    public function enviar()
    {
        // if ($this->validarCampos($_POST) == 'nome_cliente') {
        //     echo json_encode(['status' => 'error', 'title' => 'Oops!', 'message' => 'Informe o sobrenome do cliente!']);
        //     return;
        // }

        // if ($this->validarCampos($_POST) == 'servicos') {
        //     echo json_encode(['status' => 'error', 'title' => 'Oops!', 'message' => 'Informe o tipo de trabalho da proposta!']);
        //     return;
        // }

        // if ($this->validarCampos($_POST) == 'tecnologia-caractere') {
        //     pre(1);
        //     echo json_encode(['status' => 'error', 'title' => 'Oops!', 'message' => 'Separe cada tecnologia por: ,']);
        //     return;
        // }

        // if ($this->validarCampos($_POST) == 'funcionalidade-caractere') {
        //     pre(2);
        //     echo json_encode(['status' => 'error', 'title' => 'Oops!', 'message' => 'Separe cada funcionalidade por: /']);
        //     return;
        // }


        echo json_encode(['status' => 'success', 'title' => 'Ooba!', 'message' => 'Proposta gerada com sucesso!', 'fileUrl' => 'output.pdf']);
    }


    public function gerar()
    {
        $html = '<img src="/assets/imagens/capa.jpg" style="margin-top: 100px;!important; width: 100%!important; border-radius: 50px 0px 50px 0px;">';
        $html .= '<div class="col-md-12" style="margin-left:50px; margin-top:250px!important;">';
        $html .= "<div class='d-flex text-capitalize' style='font-weight:bold;'>Cliente: $_POST[nome]" . " - " . $_POST['empresa'] . " </div>";
        $html .= "<div class='d-flex' style='font-weight:bold;'>Data de emissão: " . Date('d/m/Y', strtotime($_POST['data'])) . "</div>";
        $html .= "</div>";


        $html .= '<div class="h-100" style="margin-top: 286px;">';
        $html .= '<div class="p-5 shadow" style="width: 100%; height: 800px; border-radius:0px 0px 15px 0px; background: #041e49; color: #FFF">';
        $html .= '<h3>Quem somos</h3>';
        $html .= '<p>Agradecemos pela oportunidade de apresentar nossa proposta de desenvolvimento de site, aplicativos e PWA. Somos a Omnicode, uma agência dedicada a criar soluções digitais que não só atendem, mas superam as expectativas dos nossos clientes. Nossa missão é impulsionar o sucesso do seu negócio através de tecnologias inovadoras e design de alta qualidade.</p>';
        $html .= '</div>';
        $html .= '</div>';



        $html .= '<div class="h-100 p-0" style="margin-top:100px;">';
        $html .= '<div class="d-flex">';
        $html .= '<div style="width: 500px; margin-left: -180px; margin-top: -90px; border: 10px solid #0495e6; height: 80px; border-radius: 50px; background: #0b57d0; transform: rotate(45deg);"> </div>';
        $html .= '</div>';
        $html .= '<div class="p-5 shadow" style="width: 100%; z-index:999; position:relative; margin-top: 78px; height: 300px; background: #041e49; color: #FFF">';
        $html .= '<h3>Objetivo do projeto</h3>';
        $html .= "<p>O objetivo deste projeto é desenvolver uma solução digital personalizada que melhore a presença online da $_POST[empresa], aumente o engajamento dos usuários e otimize os processos internos. Com essa solução, sua empresa estará preparada para se destacar no mercado digital e alcançar novos patamares de sucesso.</p>";
        $html .= '</div>';

        $html .= "<img src='/assets/imagens/funcionarios.jpg' style='width: 100%; margin-top:0px; margin-bottom:500px; height: 300px;'>";


        if ($_POST['sv-app']) {
            $html .= $this->montarEscopo('APP', $_POST);
        }

        if ($_POST['sv-site']) {
            $html .= $this->montarEscopo('SITE', $_POST);
        }
        if ($_POST['sv-pwa']) {
            $html .= $this->montarEscopo('PWA', $_POST);
        }

        if ($_POST['sv-painel']) {
            $html .= $this->montarEscopo('PAINEL', $_POST);
        }


        $html .= '<div style="width: 500px; margin-left: -180px; border: 10px solid #0495e6; height: 80px; border-radius: 50px; background: #0b57d0; transform: rotate(45deg);"> </div>';
        $html .= '<div class="h-100" style="margin-top: 10px;">';
        $html .= '<div class="p-5 shadow" style="width: 100%; z-index:999; position: relative; height: 800px; margin-bottom:20%; border-radius:0px 0px 15px 0px; background: #041e49; color: #FFF">';
        $html .= '<h3>Cinco vantagens do projeto</h3><br><br>';

        $html .= '<h4>1. Aumento da Visibilidade Online</h4>';
        $html .= '<p>Com um site otimizado para SEO e integrado às redes sociais, sua empresa será encontrada mais facilmente pelos clientes, resultando em maior tráfego e oportunidades de negócios.</p>';
        $html .= '<h4>2. Melhoria na Experiência do Usuário</h4>';
        $html .= '<p>Nosso foco em design responsivo e funcionalidade intuitiva garante que seus clientes terão uma experiência agradável e envolvente, aumentando a satisfação e a lealdade.</p>';
        $html .= '<h4>3. Maior Engajamento e Retenção de Usuários</h4>';
        $html .= '<p>As funcionalidades avançadas, como notificações push e análise de dados, permitem manter seus usuários engajados e retidos, aumentando o valor de vida do cliente.</p>';
        $html .= '<h4>4. Otimização dos Processos Internos</h4>';
        $html .= '<p>Com um painel de administração fácil de usar e integrações com APIs externas, sua equipe poderá gerenciar o conteúdo e os serviços de maneira eficiente, economizando tempo e recursos.</p>';
        $html .= '<h4>5. Escalabilidade e Futuro-Prova</h4>';
        $html .= '<p>Nossas soluções são desenvolvidas com tecnologias modernas e escaláveis, garantindo que sua empresa possa crescer e se adaptar às mudanças do mercado sem a necessidade de grandes revisões tecnológicas.</p>';

        $html .= '</div>';
        $html .= '</div>';



        if ($_POST['sv-app']) {
            $html .= $this->montarCronograma('APP', $_POST);
        }

        if ($_POST['sv-site']) {
            $html .= $this->montarCronograma('SITE', $_POST);
        }
        if ($_POST['sv-pwa']) {
            $html .= $this->montarCronograma('PWA', $_POST);
        }

        if ($_POST['sv-painel']) {
            $html .= $this->montarCronograma('PAINEL', $_POST);
        }


        // $html .= '<div class="p-5 shadow" style="width: 100%; z-index:999; position:relative; margin-top: 0px; height: 150px; background: #041e49; color: #FFF">';
        // $html .= '<h3>Definição de escopo</h3>';
        // $html .= '<div style="color:#FFF;">APP</div>';
        // $html .= '</div>';


        // $html .="<img src='/assets/imagens/funcionarios.jpg' style='width: 100%; margin-top:0px; height: 300px;'>";

        // $html .= '<div style="width: 800px; margin-left: -180px; margin-top: 500px; border: 10px solid #0495e6; height: 80px; border-radius: 50px; background: #0b57d0; transform: rotate(45deg);"> </div>';

        // foreach ($_POST as $valor) {
        //     pre($_POST);
        // }
        $html .= '</div>';


        echo $html;
    }



    public function montarEscopo($tipo, $dados)
    {
        switch ($tipo) {
            case 'PWA':
                $tipo_sv = 'pwa';
                break;
            case 'PAINEL':
                $tipo_sv = 'painel';
                break;
            case 'SITE':
                $tipo_sv = 'site';
                break;
            case 'APP':
                $tipo_sv = 'app';
                break;
        }

        $escopo = '<div style="width: 500px; margin-left: -180px; border: 10px solid #0495e6; height: 80px; border-radius: 50px; background: #0b57d0; transform: rotate(45deg);"> </div>';
        $escopo .= '<div class="p-5 shadow" style="width: 100%; z-index:999; position:relative; margin-top: 0px; height: 150px; background: #041e49; color: #FFF">';
        $escopo .= '<h3>Definição de escopo</h3>';
        $escopo .= '<div style="color:#FFF;">' . $tipo . '</div>';
        $escopo .= '</div>';
        $escopo .= '<div style="margin: 50px; margin-bottom: 30%;">';
        $escopo .= '<div class="col-md-12" style="min-height:530px;">';
        $escopo .= '<h4>Desenvolvimento de ' . $tipo . '</h4>';
        $escopo .= '<p>Tecnologias: ' . $dados["tecnologia-" . $tipo_sv] . '</p>';
        $escopo .= '<h4>Funcionalidades do ' . $tipo . '</h4>';


        $funcionalidades = $this->tratarFuncionalidades($tipo_sv, $dados);

        $escopo .= '<ul>';
        foreach ($funcionalidades as $key => $funcionalidade) {
            if ($funcionalidade) {
                $escopo .= "<li>$funcionalidade</li>";
            }
        }
        $escopo .= '</ul>';

        $escopo .= '</div>';
        $escopo .= '</div>';

        return $escopo;
    }


    public function montarCronograma($tipo, $dados)
    {
        switch ($tipo) {
            case 'PWA':
                $tipo_sv = 'pwa';
                break;
            case 'PAINEL':
                $tipo_sv = 'painel';
                break;
            case 'SITE':
                $tipo_sv = 'site';
                break;
            case 'APP':
                $tipo_sv = 'app';
                break;
        }

        $escopo = '<div style="width: 500px; margin-left: -180px; border: 10px solid #0495e6; height: 80px; border-radius: 50px; background: #0b57d0; transform: rotate(45deg);"> </div>';
        $escopo .= '<div class="p-5 shadow" style="width: 100%; z-index:999; position:relative; margin-top: 0px; height: 150px; background: #041e49; color: #FFF">';
        $escopo .= '<h3>Definição de cronograma</h3>';
        $escopo .= '<div style="color:#FFF;">' . $tipo . '</div>';
        $escopo .= '</div>';
        $escopo .= '<div style="margin: 50px; margin-bottom: 30%;">';
        $escopo .= '<div class="col-md-12" style="min-height:750px;">';
        $escopo .= '<h4>Planejamento de desenvolvimento do ' . $tipo . '</h4>';

        $escopo .= $this->montarTabelaCronograma($tipo_sv, $dados);



        // $funcionalidades = $this->tratarFuncionalidades($tipo_sv, $dados);

        // $escopo .= '<ul>';
        // foreach ($funcionalidades as $key => $funcionalidade) {
        //     if ($funcionalidade) {
        //         $escopo .= "<li>$funcionalidade</li>";
        //     }
        // }
        // $escopo .= '</ul>';

        $escopo .= '</div>';
        $escopo .= '</div>';

        return $escopo;
    }

    public function montarTabelaCronograma($tipos_sv, $dados)
    {
        $cronograma = '<table border="1" style="border-collapse: collapse;">';
        $cronograma .= '<thead>';
        $cronograma .= '<th style="border: 1px solid black; width: 200px; text-align: center;">FASE</th>';
        $cronograma .= '<th style="border: 1px solid black; width: 200px; text-align: center;">ATIVIDADES</th>';
        $cronograma .= '<th style="border: 1px solid black; width: 200px; text-align: center;">DURAÇÃO</th>';
        $cronograma .= '<th style="border: 1px solid black; width: 200px; text-align: center;">DATA INÍCIO</th>';
        $cronograma .= '<th style="border: 1px solid black; width: 200px; text-align: center;">DATA TÉRMINO</th>';
        $cronograma .= '</thead>';
        $cronograma .= '<tr>';
        $cronograma .= '<td style="border: 1px solid black; width: 200px; text-align: center;">Planejamento</td>';
        $cronograma .= '<td style="border: 1px solid black; width: 200px; text-align: justify;">Reuniões de briefing, análise de requisitos</td>';
        $cronograma .= '<td style="border: 1px solid black; width: 200px; text-align: center;">' . $_POST['duracao-planejamento-' . $tipos_sv] . '</td>';
        $cronograma .= '<td style="border: 1px solid black; width: 200px; text-align: center;">' . Date('d/m/Y', strtotime($_POST['data-inicio-planejamento-' . $tipos_sv])) . '</td>';
        $cronograma .= '<td style="border: 1px solid black; width: 200px; text-align: center;">' . Date('d/m/Y', strtotime($_POST['data-termino-planejamento-' . $tipos_sv])) . '</td>';
        $cronograma .= '</tr>';
        $cronograma .= '<tr>';
        $cronograma .= '<td style="border: 1px solid black; width: 200px; text-align: center;">Design</td>';
        $cronograma .= '<td style="border: 1px solid black; width: 200px; text-align: left; padding: 5px;">Criação de wireframes e mockups</td>';
        $cronograma .= '<td style="border: 1px solid black; width: 200px; text-align: center;">' . $_POST['duracao-design-' . $tipos_sv] . '</td>';
        $cronograma .= '<td style="border: 1px solid black; width: 200px; text-align: center;">' . Date('d/m/Y', strtotime($_POST['data-inicio-design-' . $tipos_sv])) . '</td>';
        $cronograma .= '<td style="border: 1px solid black; width: 200px; text-align: center;">' . Date('d/m/Y', strtotime($_POST['data-termino-design-' . $tipos_sv])) . '</td>';
        $cronograma .= '</tr>';
        $cronograma .= '<tr>';
        $cronograma .= '<td style="border: 1px solid black; width: 200px; text-align: center;">Desenvolvimento</td>';
        $cronograma .= '<td style="border: 1px solid black; width: 200px; text-align: left; padding: 5px;">Codificação do site, aplicativo e PWA</td>';
        $cronograma .= '<td style="border: 1px solid black; width: 200px; text-align: center;">' . $_POST['duracao-desenvolvimento-' . $tipos_sv] . '</td>';
        $cronograma .= '<td style="border: 1px solid black; width: 200px; text-align: center;">' . Date('d/m/Y', strtotime($_POST['data-inicio-desenvolvimento-' . $tipos_sv])) . '</td>';
        $cronograma .= '<td style="border: 1px solid black; width: 200px; text-align: center;">' . Date('d/m/Y', strtotime($_POST['data-termino-desenvolvimento-' . $tipos_sv])) . '</td>';
        $cronograma .= '</tr>';
        $cronograma .= '<tr>';
        $cronograma .= '<td style="border: 1px solid black; width: 200px; text-align: center;">Testes</td>';
        $cronograma .= '<td style="border: 1px solid black; width: 200px; text-align: left; padding: 5px;">Testes de usabilidade e funcionalidade</td>';
        $cronograma .= '<td style="border: 1px solid black; width: 200px; text-align: center;">' . $_POST['duracao-testes-' . $tipos_sv] . '</td>';
        $cronograma .= '<td style="border: 1px solid black; width: 200px; text-align: center;">' . Date('d/m/Y', strtotime($_POST['data-inicio-testes-' . $tipos_sv])) . '</td>';
        $cronograma .= '<td style="border: 1px solid black; width: 200px; text-align: center;">' . Date('d/m/Y', strtotime($_POST['data-termino-testes-' . $tipos_sv])) . '</td>';
        $cronograma .= '</tr>';
        $cronograma .= '<tr>';
        $cronograma .= '<td style="border: 1px solid black; width: 200px; text-align: center;">Lançamento</td>';
        $cronograma .= '<td style="border: 1px solid black; width: 200px; text-align: left; padding: 5px;">Deploy e treinamento</td>';
        $cronograma .= '<td style="border: 1px solid black; width: 200px; text-align: center;">' . $_POST['duracao-lancamento-' . $tipos_sv] . '</td>';
        $cronograma .= '<td style="border: 1px solid black; width: 200px; text-align: center;">' . Date('d/m/Y', strtotime($_POST['data-inicio-lancamento-' . $tipos_sv])) . '</td>';
        $cronograma .= '<td style="border: 1px solid black; width: 200px; text-align: center;">' . Date('d/m/Y', strtotime($_POST['data-termino-lancamento-' . $tipos_sv])) . '</td>';
        $cronograma .= '</tr>';
        $cronograma .= '</table>';

        return $cronograma;
    }

    public function tratarFuncionalidades($tipo_sv, $dados)
    {
        $dados = explode('/', $dados["funcionalidade-$tipo_sv"]);
        return $dados;
    }
}
