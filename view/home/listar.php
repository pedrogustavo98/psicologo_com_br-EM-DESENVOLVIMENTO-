<?php require('../propostas/view/componentes/header.php') ?>

<div class="d-flex flex-column col-md-11">
    <h1>GERADOR DE PROPOSTAS</h1>

    <div class="col-md-12 m-0 p-0 main-janela shadow">
        <div class="tab-janela col-md-12 p-2">
            CADASTRAR
        </div>



        <div class="content-janela m-5">

            <form class="d-flex" id="form-gerar">
                <div class="row">

                    <h5>Dados do cliente</h5>
                    <div class="col-md-3">
                        <label class="label-geral" for="nome">Nome do cliente*</label>
                        <input type="text" class="form-control required text-capitalize required" placeholder="Ex.: Anderson Silva" name="nome" id="nome">
                    </div>
                    <div class="col-md-3">
                        <label class="label-geral" for="empresa">Empresa*</label>
                        <input type="text" class="form-control required text-capitalize required" placeholder="Ex.: Anderson Silva" name="empresa" id="empresa">
                    </div>
                    <div class="col-md-3">
                        <label class="label-geral" for="data">Data da proposta*</label>
                        <input type="date" class="form-control required" name="data" id="data">
                    </div>
                    <div class="col-md-3">
                        <label class="label-geral" for="validade">Validade da proposta*</label>
                        <input type="date" class="form-control required" name="validade" id="validade">
                    </div>

                    <div class="d-flex flex-column">
                        <h5 class="mt-5">Tipo de serviço</h5>

                        <div class="col-md-3">
                            <input type="checkbox" name="sv-app" id="sv-app">
                            <label class="label-geral" for="sv-app">APP</label>
                        </div>
                        <div class="col-md-3">
                            <input type="checkbox" name="sv-site" id="sv-site">
                            <label class="label-geral" for="sv-site">SITE</label>
                        </div>
                        <div class="col-md-3">
                            <input type="checkbox" name="sv-pwa" id="sv-pwa">
                            <label class="label-geral" for="sv-pwa">PWA</label>
                        </div>
                        <div class="col-md-3">
                            <input type="checkbox" name="sv-painel" id="sv-painel">
                            <label class="label-geral" for="sv-painel">BackOffice</label>
                        </div>
                    </div>

                    <div id="tecnologia-app">
                        <div class="d-flex flex-column">
                            <h5 class="mt-5">Tecnologias utilizadas - (APP)</h5>
                            <textarea name="tecnologia-app" class="tecnologias text-uppercase form-control" resize="none"></textarea>
                            <p class="aviso"><span class="urgente">IMPORTANTE: </span>separar por (,)</p>
                        </div>
                    </div>

                    <div id="funcionalidade-app">
                        <div class="d-flex flex-column">
                            <h5 class="mt-5">Funcionalidades - (APP)</h5>
                            <textarea name="funcionalidade-app" class="tecnologias form-control" resize="none"></textarea>
                            <p class="aviso"><span class="urgente">IMPORTANTE: </span>separar por (/)</p>
                        </div>
                    </div>

                    <div id="tecnologia-site">
                        <div class="d-flex flex-column">
                            <h5 class="mt-5">Tecnologias utilizadas - (SITE)</h5>
                            <textarea name="tecnologia-site" class="tecnologias text-uppercase form-control" resize="none"></textarea>
                            <p class="aviso"><span class="urgente">IMPORTANTE: </span>separar por (,)</p>
                        </div>
                    </div>


                    <div id="funcionalidade-site">
                        <div class="d-flex flex-column">
                            <h5 class="mt-5">Funcionalidades - (SITE)</h5>
                            <textarea name="funcionalidade-site" class="tecnologias form-control " resize="none"></textarea>
                            <p class="aviso"><span class="urgente">IMPORTANTE: </span>separar por (/)</p>
                        </div>
                    </div>

                    <div id="tecnologia-pwa">
                        <div class="d-flex flex-column">
                            <h5 class="mt-5">Tecnologias utilizadas - (PWA)</h5>
                            <textarea name="tecnologia-pwa" class="tecnologias text-uppercase form-control" resize="none"></textarea>
                            <p class="aviso"><span class="urgente">IMPORTANTE: </span>separar por (,)</p>
                        </div>
                    </div>

                    <div id="funcionalidade-pwa">
                        <div class="d-flex flex-column">
                            <h5 class="mt-5">Funcionalidades - (PWA)</h5>
                            <textarea name="funcionalidade-pwa" class="tecnologias form-control " resize="none"></textarea>
                            <p class="aviso"><span class="urgente">IMPORTANTE: </span>separar por (/)</p>
                        </div>
                    </div>

                    <div id="tecnologia-painel">
                        <div class="d-flex flex-column">
                            <h5 class="mt-5">Tecnologias utilizadas - (PAINEL)</h5>
                            <textarea name="tecnologia-painel" class="tecnologias text-uppercase form-control" resize="none"></textarea>
                            <p class="aviso"><span class="urgente">IMPORTANTE: </span>separar por (,)</p>
                        </div>
                    </div>

                    <div id="funcionalidade-painel">
                        <div class="d-flex flex-column">
                            <h5 class="mt-5">Funcionalidades - (PAINEL)</h5>
                            <textarea name="funcionalidade-painel" class="tecnologias form-control" resize="none"></textarea>
                            <p class="aviso"><span class="urgente">IMPORTANTE: </span>separar por (/)</p>
                        </div>
                    </div>


                    <div id="container-sv-app">
                        <h5 class="mt-5">Cronograma (APP)</h5>

                        <div class="row">
                            <div class="col-md-3 mt-3">
                                <p>1. Reuniões de briefing, análise de requisitos (Fase: Planejamento)</p>
                            </div>
                            <div class="col-md-3">
                                <label class="label-geral" for="duracao-planejamento-app">Duração*</label>
                                <input type="text" class="form-control" placeholder="Ex.: 3 semanas" name="duracao-planejamento-app" id="duracao-planejamento-app">
                            </div>
                            <div class="col-md-3">
                                <label class="label-geral" for="data-inicio-planejamento-app">Data Início*</label>
                                <input type="date" class="form-control" placeholder="Ex.: 3 semanas" name="data-inicio-planejamento-app" id="data-inicio-planejamento-app">
                            </div>
                            <div class="col-md-3">
                                <label class="label-geral" for="data-termino-planejamento-app">Data Término*</label>
                                <input type="date" class="form-control" placeholder="Ex.: 3 semanas" name="data-termino-planejamento-app" id="data-termino-planejamento-app">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 mt-3">
                                <p>2. Criação de wireframes e mockups (Fase: Design)</p>
                            </div>
                            <div class="col-md-3">
                                <label class="label-geral" for="duracao-design-app">Duração*</label>
                                <input type="text" class="form-control" placeholder="Ex.: 3 semanas" name="duracao-design-app" id="duracao-design-app">
                            </div>
                            <div class="col-md-3">
                                <label class="label-geral" for="data-inicio-design-app">Data Início*</label>
                                <input type="date" class="form-control" placeholder="Ex.: 3 semanas" name="data-inicio-design-app" id="data-inicio-design-app">
                            </div>
                            <div class="col-md-3">
                                <label class="label-geral" for="data-termino-design-app">Data Término*</label>
                                <input type="date" class="form-control" placeholder="Ex.: 3 semanas" name="data-termino-design-app" id="data-termino-design-app">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 mt-3">
                                <p>3. Codificação do aplicativo (Fase: Desenvolvimento)</p>
                            </div>
                            <div class="col-md-3">
                                <label class="label-geral" for="duracao-desenvolvimento-app">Duração*</label>
                                <input type="text" class="form-control" placeholder="Ex.: 3 semanas" name="duracao-desenvolvimento-app" id="duracao-desenvolvimento-app">
                            </div>
                            <div class="col-md-3">
                                <label class="label-geral" for="data-inicio-desenvolvimento-app">Data Início*</label>
                                <input type="date" class="form-control" placeholder="Ex.: 3 semanas" name="data-inicio-desenvolvimento-app" id="data-inicio-desenvolvimento-app">
                            </div>
                            <div class="col-md-3">
                                <label class="label-geral" for="data-termino-desenvolvimento-app">Data Término*</label>
                                <input type="date" class="form-control" placeholder="Ex.: 3 semanas" name="data-termino-desenvolvimento-app" id="data-termino-desenvolvimento-app">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 mt-3">
                                <p>4. Testes de usabilidade e funcionalidade (Fase: Testes)</p>
                            </div>
                            <div class="col-md-3">
                                <label class="label-geral" for="duracao-testes-app">Duração*</label>
                                <input type="text" class="form-control" placeholder="Ex.: 3 semanas" name="duracao-testes-app" id="duracao-testes-app">
                            </div>
                            <div class="col-md-3">
                                <label class="label-geral" for="data-inicio-testes-app">Data Início*</label>
                                <input type="date" class="form-control" placeholder="Ex.: 3 semanas" name="data-inicio-testes-app" id="data-inicio-testes-app">
                            </div>
                            <div class="col-md-3">
                                <label class="label-geral" for="data-termino-testes-app">Data Término*</label>
                                <input type="date" class="form-control" placeholder="Ex.: 3 semanas" name="data-termino-testes-app" id="data-termino-testes-app">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 mt-3">
                                <p>5. Deploy e treinamento (Fase: Lançamento)</p>
                            </div>
                            <div class="col-md-3">
                                <label class="label-geral" for="duracao-lancamento-app">Duração*</label>
                                <input type="text" class="form-control" placeholder="Ex.: 3 semanas" name="duracao-lancamento-app" id="duracao-lancamento-app">
                            </div>
                            <div class="col-md-3">
                                <label class="label-geral" for="data-inicio-lancamento-app">Data Início*</label>
                                <input type="date" class="form-control" placeholder="Ex.: 3 semanas" name="data-inicio-lancamento-app" id="data-inicio-lancamento-app">
                            </div>
                            <div class="col-md-3">
                                <label class="label-geral" for="data-termino-lancamento-app">Data Término*</label>
                                <input type="date" class="form-control" placeholder="Ex.: 3 semanas" name="data-termino-lancamento-app" id="data-termino-lancamento-app">
                            </div>
                        </div>
                    </div>


                    <div id="container-sv-site">
                        <h5 class="mt-5">Cronograma (SITE)</h5>

                        <div class="row">
                            <div class="col-md-3 mt-3">
                                <p>1. Reuniões de briefing, análise de requisitos (Fase: Planejamento)</p>
                            </div>
                            <div class="col-md-3">
                                <label class="label-geral" for="duracao-planejamento-site">Duração*</label>
                                <input type="text" class="form-control" placeholder="Ex.: 3 semanas" name="duracao-planejamento-site" id="duracao-planejamento-site">
                            </div>
                            <div class="col-md-3">
                                <label class="label-geral" for="data-inicio-planejamento-site">Data Início*</label>
                                <input type="date" class="form-control" placeholder="Ex.: 3 semanas" name="data-inicio-planejamento-site" id="data-inicio-planejamento-site">
                            </div>
                            <div class="col-md-3">
                                <label class="label-geral" for="data-termino-planejamento-site">Data Término*</label>
                                <input type="date" class="form-control" placeholder="Ex.: 3 semanas" name="data-termino-planejamento-site" id="data-termino-planejamento-site">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 mt-3">
                                <p>2. Criação de wireframes e mockups (Fase: Design)</p>
                            </div>
                            <div class="col-md-3">
                                <label class="label-geral" for="duracao-design-site">Duração*</label>
                                <input type="text" class="form-control" placeholder="Ex.: 3 semanas" name="duracao-design-site" id="duracao-design-site">
                            </div>
                            <div class="col-md-3">
                                <label class="label-geral" for="data-inicio-design-site">Data Início*</label>
                                <input type="date" class="form-control" placeholder="Ex.: 3 semanas" name="data-inicio-design-site" id="data-inicio-design-site">
                            </div>
                            <div class="col-md-3">
                                <label class="label-geral" for="data-termino-design-site">Data Término*</label>
                                <input type="date" class="form-control" placeholder="Ex.: 3 semanas" name="data-termino-design-site" id="data-termino-design-site">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 mt-3">
                                <p>3. Codificação do site (Fase: Desenvolvimento)</p>
                            </div>
                            <div class="col-md-3">
                                <label class="label-geral" for="duracao-desenvolvimento-site">Duração*</label>
                                <input type="text" class="form-control" placeholder="Ex.: 3 semanas" name="duracao-desenvolvimento-site" id="duracao-desenvolvimento-site">
                            </div>
                            <div class="col-md-3">
                                <label class="label-geral" for="data-inicio-desenvolvimento-site">Data Início*</label>
                                <input type="date" class="form-control" placeholder="Ex.: 3 semanas" name="data-inicio-desenvolvimento-site" id="data-inicio-desenvolvimento-site">
                            </div>
                            <div class="col-md-3">
                                <label class="label-geral" for="data-termino-desenvolvimento-site">Data Término*</label>
                                <input type="date" class="form-control" placeholder="Ex.: 3 semanas" name="data-termino-desenvolvimento-site" id="data-termino-desenvolvimento-site">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 mt-3">
                                <p>4. Testes de usabilidade e funcionalidade (Fase: Testes)</p>
                            </div>
                            <div class="col-md-3">
                                <label class="label-geral" for="duracao-testes-site">Duração*</label>
                                <input type="text" class="form-control" placeholder="Ex.: 3 semanas" name="duracao-testes-site" id="duracao-testes-site">
                            </div>
                            <div class="col-md-3">
                                <label class="label-geral" for="data-inicio-testes-site">Data Início*</label>
                                <input type="date" class="form-control" placeholder="Ex.: 3 semanas" name="data-inicio-testes-site" id="data-inicio-testes-site">
                            </div>
                            <div class="col-md-3">
                                <label class="label-geral" for="data-termino-testes-site">Data Término*</label>
                                <input type="date" class="form-control" placeholder="Ex.: 3 semanas" name="data-termino-testes-site" id="data-termino-testes-site">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 mt-3">
                                <p>5. Deploy e treinamento (Fase: Lançamento)</p>
                            </div>
                            <div class="col-md-3">
                                <label class="label-geral" for="duracao-lancamento-site">Duração*</label>
                                <input type="text" class="form-control" placeholder="Ex.: 3 semanas" name="duracao-lancamento-site" id="duracao-lancamento-site">
                            </div>
                            <div class="col-md-3">
                                <label class="label-geral" for="data-inicio-lancamento-site">Data Início*</label>
                                <input type="date" class="form-control" placeholder="Ex.: 3 semanas" name="data-inicio-lancamento-site" id="data-inicio-lancamento-site">
                            </div>
                            <div class="col-md-3">
                                <label class="label-geral" for="data-termino-lancamento-site">Data Término*</label>
                                <input type="date" class="form-control" placeholder="Ex.: 3 semanas" name="data-termino-lancamento-site" id="data-termino-lancamento-site">
                            </div>
                        </div>
                    </div>


                    <div id="container-sv-pwa">
                        <h5 class="mt-5">Cronograma (PWA)</h5>

                        <div class="row">
                            <div class="col-md-3 mt-3">
                                <p>1. Reuniões de briefing, análise de requisitos (Fase: Planejamento)</p>
                            </div>
                            <div class="col-md-3">
                                <label class="label-geral" for="duracao-planejamento-pwa">Duração*</label>
                                <input type="text" class="form-control" placeholder="Ex.: 3 semanas" name="duracao-planejamento-pwa" id="duracao-planejamento-pwa">
                            </div>
                            <div class="col-md-3">
                                <label class="label-geral" for="data-inicio-planejamento-pwa">Data Início*</label>
                                <input type="date" class="form-control" placeholder="Ex.: 3 semanas" name="data-inicio-planejamento-pwa" id="data-inicio-planejamento-pwa">
                            </div>
                            <div class="col-md-3">
                                <label class="label-geral" for="data-termino-planejamento-pwa">Data Término*</label>
                                <input type="date" class="form-control" placeholder="Ex.: 3 semanas" name="data-termino-planejamento-pwa" id="data-termino-planejamento-pwa">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 mt-3">
                                <p>2. Criação de wireframes e mockups (Fase: Design)</p>
                            </div>
                            <div class="col-md-3">
                                <label class="label-geral" for="duracao-design-pwa">Duração*</label>
                                <input type="text" class="form-control" placeholder="Ex.: 3 semanas" name="duracao-design-pwa" id="duracao-design-pwa">
                            </div>
                            <div class="col-md-3">
                                <label class="label-geral" for="data-inicio-design-pwa">Data Início*</label>
                                <input type="date" class="form-control" placeholder="Ex.: 3 semanas" name="data-inicio-design-pwa" id="data-inicio-design-pwa">
                            </div>
                            <div class="col-md-3">
                                <label class="label-geral" for="data-termino-design-pwa">Data Término*</label>
                                <input type="date" class="form-control" placeholder="Ex.: 3 semanas" name="data-termino-design-pwa" id="data-termino-design-pwa">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 mt-3">
                                <p>3. Codificação do PWA (Fase: Desenvolvimento)</p>
                            </div>
                            <div class="col-md-3">
                                <label class="label-geral" for="duracao-desenvolvimento-pwa">Duração*</label>
                                <input type="text" class="form-control" placeholder="Ex.: 3 semanas" name="duracao-desenvolvimento-pwa" id="duracao-desenvolvimento-pwa">
                            </div>
                            <div class="col-md-3">
                                <label class="label-geral" for="data-inicio-desenvolvimento-pwa">Data Início*</label>
                                <input type="date" class="form-control" placeholder="Ex.: 3 semanas" name="data-inicio-desenvolvimento-pwa" id="data-inicio-desenvolvimento-pwa">
                            </div>
                            <div class="col-md-3">
                                <label class="label-geral" for="data-termino-desenvolvimento-pwa">Data Término*</label>
                                <input type="date" class="form-control" placeholder="Ex.: 3 semanas" name="data-termino-desenvolvimento-pwa" id="data-termino-desenvolvimento-pwa">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 mt-3">
                                <p>4. Testes de usabilidade e funcionalidade (Fase: Testes)</p>
                            </div>
                            <div class="col-md-3">
                                <label class="label-geral" for="duracao-testes-pwa">Duração*</label>
                                <input type="text" class="form-control" placeholder="Ex.: 3 semanas" name="duracao-testes-pwa" id="duracao-testes-pwa">
                            </div>
                            <div class="col-md-3">
                                <label class="label-geral" for="data-inicio-testes-pwa">Data Início*</label>
                                <input type="date" class="form-control" placeholder="Ex.: 3 semanas" name="data-inicio-testes-pwa" id="data-inicio-testes-pwa">
                            </div>
                            <div class="col-md-3">
                                <label class="label-geral" for="data-termino-testes-pwa">Data Término*</label>
                                <input type="date" class="form-control" placeholder="Ex.: 3 semanas" name="data-termino-testes-pwa" id="data-termino-testes-pwa">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 mt-3">
                                <p>5. Deploy e treinamento (Fase: Lançamento)</p>
                            </div>
                            <div class="col-md-3">
                                <label class="label-geral" for="duracao-lancamento-pwa">Duração*</label>
                                <input type="text" class="form-control" placeholder="Ex.: 3 semanas" name="duracao-lancamento-pwa" id="duracao-lancamento-pwa">
                            </div>
                            <div class="col-md-3">
                                <label class="label-geral" for="data-inicio-lancamento-pwa">Data Início*</label>
                                <input type="date" class="form-control" placeholder="Ex.: 3 semanas" name="data-inicio-lancamento-pwa" id="data-inicio-lancamento-pwa">
                            </div>
                            <div class="col-md-3">
                                <label class="label-geral" for="data-termino-lancamento-pwa">Data Término*</label>
                                <input type="date" class="form-control" placeholder="Ex.: 3 semanas" name="data-termino-lancamento-pwa" id="data-termino-lancamento-pwa">
                            </div>
                        </div>
                    </div>


                    <div id="container-sv-painel">
                        <h5 class="mt-5">Cronograma (BackOffice)</h5>

                        <div class="row">
                            <div class="col-md-3 mt-3">
                                <p>1. Reuniões de briefing, análise de requisitos (Fase: Planejamento)</p>
                            </div>
                            <div class="col-md-3">
                                <label class="label-geral" for="duracao-planejamento-painel">Duração*</label>
                                <input type="text" class="form-control" placeholder="Ex.: 3 semanas" name="duracao-planejamento-painel" id="duracao-planejamento-painel">
                            </div>
                            <div class="col-md-3">
                                <label class="label-geral" for="data-inicio-planejamento-painel">Data Início*</label>
                                <input type="date" class="form-control" placeholder="Ex.: 3 semanas" name="data-inicio-planejamento-painel" id="data-inicio-planejamento-painel">
                            </div>
                            <div class="col-md-3">
                                <label class="label-geral" for="data-termino-planejamento-painel">Data Término*</label>
                                <input type="date" class="form-control" placeholder="Ex.: 3 semanas" name="data-termino-planejamento-painel" id="data-termino-planejamento-painel">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 mt-3">
                                <p>2. Criação de wireframes e mockups (Fase: Design)</p>
                            </div>
                            <div class="col-md-3">
                                <label class="label-geral" for="duracao-design-painel">Duração*</label>
                                <input type="text" class="form-control" placeholder="Ex.: 3 semanas" name="duracao-design-painel" id="duracao-design-painel">
                            </div>
                            <div class="col-md-3">
                                <label class="label-geral" for="data-inicio-design-painel">Data Início*</label>
                                <input type="date" class="form-control" placeholder="Ex.: 3 semanas" name="data-inicio-design-painel" id="data-inicio-design-painel">
                            </div>
                            <div class="col-md-3">
                                <label class="label-geral" for="data-termino-design-painel">Data Término*</label>
                                <input type="date" class="form-control" placeholder="Ex.: 3 semanas" name="data-termino-design-painel" id="data-termino-design-painel">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 mt-3">
                                <p>3. Codificação do painel (Fase: Desenvolvimento)</p>
                            </div>
                            <div class="col-md-3">
                                <label class="label-geral" for="duracao-desenvolvimento-painel">Duração*</label>
                                <input type="text" class="form-control" placeholder="Ex.: 3 semanas" name="duracao-desenvolvimento-painel" id="duracao-desenvolvimento-painel">
                            </div>
                            <div class="col-md-3">
                                <label class="label-geral" for="data-inicio-desenvolvimento-painel">Data Início*</label>
                                <input type="date" class="form-control" placeholder="Ex.: 3 semanas" name="data-inicio-desenvolvimento-painel" id="data-inicio-desenvolvimento-painel">
                            </div>
                            <div class="col-md-3">
                                <label class="label-geral" for="data-termino-desenvolvimento-painel">Data Término*</label>
                                <input type="date" class="form-control" placeholder="Ex.: 3 semanas" name="data-termino-desenvolvimento-painel" id="data-termino-desenvolvimento-painel">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 mt-3">
                                <p>4. Testes de usabilidade e funcionalidade (Fase: Testes)</p>
                            </div>
                            <div class="col-md-3">
                                <label class="label-geral" for="duracao-testes-painel">Duração*</label>
                                <input type="text" class="form-control" placeholder="Ex.: 3 semanas" name="duracao-testes-painel" id="duracao-testes-painel">
                            </div>
                            <div class="col-md-3">
                                <label class="label-geral" for="data-inicio-testes-painel">Data Início*</label>
                                <input type="date" class="form-control" placeholder="Ex.: 3 semanas" name="data-inicio-testes-painel" id="data-inicio-testes-painel">
                            </div>
                            <div class="col-md-3">
                                <label class="label-geral" for="data-termino-testes-painel">Data Término*</label>
                                <input type="date" class="form-control" placeholder="Ex.: 3 semanas" name="data-termino-testes-painel" id="data-termino-testes-painel">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 mt-3">
                                <p>5. Deploy e treinamento (Fase: Lançamento)</p>
                            </div>
                            <div class="col-md-3">
                                <label class="label-geral" for="duracao-lancamento-painel">Duração*</label>
                                <input type="text" class="form-control" placeholder="Ex.: 3 semanas" name="duracao-lancamento-painel" id="duracao-lancamento-painel">
                            </div>
                            <div class="col-md-3">
                                <label class="label-geral" for="data-inicio-lancamento-painel">Data Início*</label>
                                <input type="date" class="form-control" placeholder="Ex.: 3 semanas" name="data-inicio-lancamento-painel" id="data-inicio-lancamento-painel">
                            </div>
                            <div class="col-md-3">
                                <label class="label-geral" for="data-termino-lancamento-painel">Data Término*</label>
                                <input type="date" class="form-control" placeholder="Ex.: 3 semanas" name="data-termino-lancamento-painel" id="data-termino-lancamento-painel">
                            </div>
                        </div>
                    </div>




                    <h5 class="mt-5">Investimento</h5>

                    <table>
                        <tr id="container-investimento-site">
                            <td>Desenvolvimento de Site</td>
                            <td>Design e desenvolvimento completo</td>
                            <td class="d-flex valor"><input type="text" class="form-control mask-reais" placeholder="R$ 0,00" name="valor-desenvolvimento-site" id="valor-desenvolvimento-site"></td>
                        </tr>
                        <tr id="container-investimento-app">
                            <td>Desenvolvimento de Aplicativo</td>
                            <td>Desenvolvimento para iOS e Android</td>
                            <td class="d-flex valor"><input type="text" class="form-control mask-reais" placeholder="R$ 0,00" name="valor-desenvolvimento-app" id="valor-desenvolvimento-app"></td>
                        </tr>
                        <tr id="container-investimento-pwa">
                            <td>Desenvolvimento de PWA</td>
                            <td>Desenvolvimento completo</td>
                            <td class="d-flex valor"><input type="text" class="form-control mask-reais" placeholder="R$ 0,00" name="valor-desenvolvimento-pwa" id="valor-desenvolvimento-pwa"></td>
                        </tr>
                        <tr id="container-investimento-painel">
                            <td>Desenvolvimento de Painel</td>
                            <td>Desenvolvimento BackOffice</td>
                            <td class="d-flex valor"><input type="text" class="form-control mask-reais" placeholder="R$ 0,00" name="valor-desenvolvimento-painel" id="valor-desenvolvimento-painel"></td>
                        </tr>
                        <tr>
                            <td>Manutenção</td>
                            <td>Suporte e atualizações mensais (opcional)</td>
                            <td class="d-flex valor"><input type="text" class="form-control mask-reais" placeholder="R$ 0,00" name="valor-manutencao" id="valor-manutencao"></td>
                        </tr>
                        <tr>
                            <td>Hospedagem</td>
                            <td>Serviço de hospedagem + domínio (opcional)</td>
                            <td class="d-flex valor"><input type="text" class="form-control mask-reais" placeholder="R$ 0,00" name="valor-hospedagem" id="valor-hospedagem"></td>
                        </tr>
                    </table>


                    <h5 class="mt-5">Condições de pagamento</h5>

                    <table>
                        <tr>
                            <td>Início do projeto</td>
                            <td class="d-flex valor"><input type="text" class="form-control required mask-porcentagem" placeholder="Ex.: 30,00 %" name="porcentagem-inicio" id="porcentagem-inicio"></td>
                        </tr>
                        <tr>
                            <td>Após a entrega do design</td>
                            <td class="d-flex valor"><input type="text" class="form-control required mask-porcentagem" placeholder="Ex.: 30,00 %" name="porcentagem-entrega-design" id="porcentagem-entrega-design"></td>
                        </tr>
                        <tr>
                            <td>Após a finalização do desenvolvimento</td>
                            <td class="d-flex valor"><input type="text" class="form-control required mask-porcentagem" placeholder="Ex.: 30,00 %" name="porcentagem-finalizacao" id="porcentagem-finalizacao"></td>
                        </tr>
                        <tr>
                            <td>Na entrega final e aprovação do cliente</td>
                            <td class="d-flex valor"><input type="text" class="form-control required mask-porcentagem" placeholder="Ex.: 30,00 %" name="porcentagem-aprovacao" id="porcentagem-aprovacao"></td>
                        </tr>

                    </table>


                    <h5 class="mt-5">Dados da agência*</h5>

                    <div class="col-md-3">
                        <label for="" class="label-geral">Consultor*</label>
                        <input type="text" name="nome_consultor" class="form-control required text-capitalize" placeholder="Ex.: Luciano Santos" id="nome_consultor">
                    </div>
                    <div class="col-md-3">
                        <label for="" class="label-geral">Telefone*</label>
                        <input type="text" name="telefone_consultor" class="form-control required mask-telcel" placeholder="(99) 99999-9999" id="telefone_consultor">
                    </div>
                    <div class="col-md-3">
                        <label for="" class="label-geral">E-mail*</label>
                        <input type="text" name="email_consultor" class="form-control required" placeholder="Ex.: email@email.com.br" id="email_consultor">
                    </div>
                    <div class="col-md-3">
                        <label for="cargo" class="label-geral">Cargo*</label>
                        <select name="" class="form-control required" id="cargo">
                            <option disabled value="cargo">Cargo</option>
                            <option value="Representante comercial">Representante comercial</option>
                            <option value="Gestor comercial">Gestor comercial</option>
                            <option value="CEO">CEO</option>
                        </select>
                    </div>





                    <!-- <div class="row">
                                <div class="col-md-3 mt-3">
                                    <p>Desenvolvimento de Site</p>
                                </div>
                                <div class="col-md-4 mt-3">
                                    <p>Design e desenvolvimento completo</p>
                                </div>
                                <label class="label-geral" for="data-termino-lancamento">Valor R$</label>
                                <div class="col-md-3 d-flex">
                                    <input type="text" class="form-control required" placeholder="R$ 0,00" name="data-termino-lancamento" id="data-termino-lancamento">
                                </div>
                            </div> -->
                    <!-- <h5 class="mt-5">Condições de pagamento</h3>
                            <h5 class="mt-5">Termos & condições</h3>
                                <h5 class="mt-5">Contato</h3> -->

                </div>
            </form>


            <div class="col-md-12 m-3 p-3 d-flex justify-content-end">
                <button type="button" id="btn-gerar" class="btn btn-primary">Gerar</button>
            </div>


            <div id="hidden-content" style="display:none;"></div>


        </div>
    </div>
</div>
<?php require('../propostas/view/componentes/footer.php') ?>



<script>
    $('#container-sv-app').hide();
    $('#container-sv-site').hide();
    $('#container-sv-pwa').hide();
    $('#container-sv-painel').hide();
    $('#container-investimento-pwa').hide();
    $('#container-investimento-site').hide();
    $('#container-investimento-app').hide();

    $('#funcionalidade-app').hide();
    $('#funcionalidade-site').hide();
    $('#funcionalidade-pwa').hide();
    $('#funcionalidade-painel').hide();
    $('#tecnologia-app').hide();
    $('#tecnologia-site').hide();
    $('#tecnologia-pwa').hide();
    $('#tecnologia-painel').hide();



    $('#sv-app').on('change', function() {
        dado = $('#sv-app');

        $('#container-sv-app').hide();
        $('#container-investimento-app').hide();
        $('#funcionalidade-app').hide();
        $('#tecnologia-app').hide();
        validarCamposSV('app', 'delete');


        if (dado[0].checked) {
            $('#container-sv-app').show();
            $('#container-investimento-app').show();
            $('#funcionalidade-app').show();
            $('#tecnologia-app').show();
            validarCamposSV('app', 'add');

        }
    })


    $('#sv-site').on('change', function() {
        dado = $('#sv-site');

        $('#container-sv-site').hide();
        $('#container-investimento-site').hide();
        $('#funcionalidade-site').hide();
        $('#tecnologia-site').hide();

        validarCamposSV('site', 'delete');


        if (dado[0].checked) {
            $('#container-sv-site').show();
            $('#container-investimento-site').show();
            $('#funcionalidade-site').show();
            $('#tecnologia-site').show();
            validarCamposSV('site', 'add');
        }
    })


    $('#sv-pwa').on('change', function() {
        dado = $('#sv-pwa');

        $('#container-sv-pwa').hide();
        $('#container-investimento-pwa').hide();
        $('#funcionalidade-pwa').hide();
        $('#tecnologia-pwa').hide();
        validarCamposSV('pwa', 'delete')

        if (dado[0].checked) {
            $('#container-sv-pwa').show();
            $('#container-investimento-pwa').show();
            $('#funcionalidade-pwa').show();
            $('#tecnologia-pwa').show();
            validarCamposSV('pwa', 'add')
        }
    })

    $('#sv-painel').on('change', function() {
        dado = $('#sv-painel');

        $('#container-sv-painel').hide();
        $('#container-investimento-painel').hide();
        $('#funcionalidade-painel').hide();
        $('#tecnologia-painel').hide();


        validarCamposSV('painel', 'delete')


        if (dado[0].checked) {
            $('#container-sv-painel').show();
            $('#container-investimento-painel').show();
            $('#funcionalidade-painel').show();
            $('#tecnologia-painel').show();

            validarCamposSV('painel', 'add')
        }
    })



    $('#btn-gerar').on('click', function(e) {
        e.preventDefault();

        // var errors = 0;

        // $('.required').each(function(index, element) {
        //     errors += validateEmpty(element.id);
        //     // console.log(errors);
        // });


        // if (errors > 0) {
        //     Swal.fire({
        //         title: 'Oops!',
        //         text: 'Por favor, preencha os campos obrigatórios!',
        //         icon: 'error'
        //     });

        //     return;
        // }


        $.ajax({
            url: '/?modulo=home&action=enviar', // URL do arquivo PHP que processará a requisição
            type: 'POST',
            async: false,
            cache: false,
            contentType: false,
            processData: false,
            dataType: 'json',
            data: new FormData(document.getElementById('form-gerar')),
            success: function(response) { // Função de callback para o sucesso da requisição
                let dado = response;

                Swal.fire({
                    title: response.title,
                    text: response.message,
                    icon: response.status
                }).then(() => {
                    if (response.status == 'success') {
                        $.ajax({
                            url: '/?modulo=home&action=gerar', // URL do arquivo PHP que processará a requisição
                            type: 'POST',
                            async: false,
                            cache: false,
                            contentType: false,
                            processData: false,
                            dataType: 'html',
                            data: new FormData(document.getElementById('form-gerar')),
                            success: function(response) {
                                console.log(response);

                                setTimeout(() => {
                                    const opt = {
                                        // margin: [0, 0, 10, 0], // Margens em mm [topo, esquerda, baixo, direita]
                                        filename: 'document.pdf',
                                        image: {
                                            type: 'jpeg',
                                            quality: 0.98
                                        },
                                        html2canvas: {
                                            scale: 2,
                                            logging: true,
                                            dpi: 192,
                                            letterRendering: true
                                        },
                                        jsPDF: {
                                            unit: 'mm',
                                            format: 'a4',
                                            orientation: 'portrait'
                                        },
                                        pagebreak: {
                                            mode: ['css', 'legacy'],
                                            before: '.break-before',
                                            after: '.break-after'
                                        }
                                    };

                                    // Use html2pdf para gerar o PDF com as opções especificadas
                                    html2pdf().from(response).set(opt).save();
                                }, 500);



                            }
                        });
                    }
                });
            },
            error: function(xhr, status, error) { // Função de callback para erros
                console.error('Erro na requisição AJAX:', error);
            }
        });
    });


    function validarCamposSV(servico, tipo) {
        if (tipo == 'add') {
            $(`#duracao-planejamento-${servico}`).addClass('required');
            $(`#data-inicio-planejamento-${servico}`).addClass('required');
            $(`#data-termino-planejamento-${servico}`).addClass('required');
            $(`#duracao-design-${servico}`).addClass('required');
            $(`#data-inicio-design-${servico}`).addClass('required');
            $(`#data-termino-design-${servico}`).addClass('required');
            $(`#duracao-desenvolvimento-${servico}`).addClass('required');
            $(`#data-inicio-desenvolvimento-${servico}`).addClass('required');
            $(`#data-termino-desenvolvimento-${servico}`).addClass('required');
            $(`#duracao-testes-${servico}`).addClass('required');
            $(`#data-inicio-testes-${servico}`).addClass('required');
            $(`#data-termino-testes-${servico}`).addClass('required');
            $(`#duracao-lancamento-${servico}`).addClass('required');
            $(`#data-inicio-lancamento-${servico}`).addClass('required');
            $(`#data-termino-lancamento-${servico}`).addClass('required');
            $(`#valor-desenvolvimento-${servico}`).addClass('required');
        } else {
            $(`#duracao-planejamento-${servico}`).removeClass('required');
            $(`#data-inicio-planejamento-${servico}`).removeClass('required');
            $(`#data-termino-planejamento-${servico}`).removeClass('required');
            $(`#duracao-design-${servico}`).removeClass('required');
            $(`#data-inicio-design-${servico}`).removeClass('required');
            $(`#data-termino-design-${servico}`).removeClass('required');
            $(`#duracao-desenvolvimento-${servico}`).removeClass('required');
            $(`#data-inicio-desenvolvimento-${servico}`).removeClass('required');
            $(`#data-termino-desenvolvimento-${servico}`).removeClass('required');
            $(`#duracao-testes-${servico}`).removeClass('required');
            $(`#data-inicio-testes-${servico}`).removeClass('required');
            $(`#data-termino-testes-${servico}`).removeClass('required');
            $(`#duracao-lancamento-${servico}`).removeClass('required');
            $(`#data-inicio-lancamento-${servico}`).removeClass('required');
            $(`#data-termino-lancamento-${servico}`).removeClass('required');
            $(`#valor-desenvolvimento-${servico}`).removeClass('required');
        }

    }
</script>