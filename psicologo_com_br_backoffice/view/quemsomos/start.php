<?php require('../psicologo_com_br_backoffice/view/componentes/header.php') ?>

<div class="d-flex flex-column col-md-11">
    <h1>QUEM SOMOS</h1>

    <div class="col-md-12 m-0 p-0 main-janela shadow">
        <div class="tab-janela col-md-12 p-2">
            VISUALIZAR
        </div>



        <div class="content-janela m-5">

            <form id="form-gerar">
                <div class="row">


                    <div class="col-md-12 d-flex flex-column">
                        <label class="label-geral" for="imagem" style="width: 100px;">
                            <div>Imagem*</div>
                            <img src="https://placehold.jp/2700x1000.png" class="placeholderImage">
                            <input type="file" class="form-control required text-capitalize required d-none" placeholder="Ex.: Anderson Silva" name="imagem" id="imagem">
                        </label>
                    </div>
                    <div class="col-md-12 mt-5">
                        <label class="label-geral" for="sobreposicao">Sobreposição*</label>

                        <textarea maxlength="450" class="form-control required text-capitalize required" name="sobreposicao" id="sobreposicao"></textarea>
                    </div>

                    <div class="col-md-12 mt-5">
                        <label class="label-geral" for="texto-final">Texto Final*</label>

                        <textarea maxlength="450" class="form-control required text-capitalize required" name="texto-final" id="texto-final"></textarea>


                        <!-- <textarea maxlength="450" class="form-control required text-capitalize required" name="nome" id="nome"></textarea> -->
                        <!-- <input type="text" class="form-control required text-capitalize required" placeholder="Ex.: Anderson Silva" name="nome" id="nome"> -->
                    </div>
                    <!-- <div class="col-md-3">
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
                    </div>-->





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

<script src="/assets/jquery.mask.min.js"></script>
<script src="/assets/jquery.maskMoney.min.js"></script>
<script src="/assets/utils.js"></script>
<script src="https://kit.fontawesome.com/9be86484fd.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<script>
    $('#btn-gerar').on('click', function() {
        $.ajax({
            url: '/quem-somos/salvar', // URL do arquivo PHP que processará a requisição
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
    })
</script>

<?php require('../psicologo_com_br_backoffice/view/componentes/footer.php') ?>