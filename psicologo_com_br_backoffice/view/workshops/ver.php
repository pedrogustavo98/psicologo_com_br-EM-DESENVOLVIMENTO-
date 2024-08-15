<?php require('../psicologo_com_br_backoffice/view/componentes/header.php') ?>

<div class="d-flex flex-column col-md-11">

    <div class="d-flex">
        <h1>WORKSHOPS</h1>


        <div class="container-adicionar">
            <a href="/workshops/listar">
                <button class="btn btn-dark botao-adicionar">Listar</button>
            </a>
        </div>

    </div>

    <div class="col-md-12 m-0 p-0 main-janela shadow">
        <div class="tab-janela col-md-12 p-2">
            VISUALIZAR
        </div>



        <div class="content-janela m-5">

            <form class="d-flex" id="form-gerar">
                <div class="row">

                    <h5>Dados do convênio</h5>

                    <div class="col-md-12">
                        <img src="https://placehold.jp/220x220.png">
                    </div>



                    <div class="col-md-12 mt-5">
                        <label class="label-geral" for="nome">Nome do convênio*</label>
                        <input type="text" class="form-control required text-capitalize required" placeholder="Ex.: Anderson Silva" name="nome" id="nome">
                    </div>
                    


                </div>
            </form>


            <div class="col-md-12 m-3 p-3 d-flex justify-content-end">
                <button type="button" id="btn-gerar" class="btn btn-dark">Cadastrar</button>
            </div>


            <div id="hidden-content" style="display:none;"></div>


        </div>
    </div>
</div>
<?php require('../psicologo_com_br_backoffice/view/componentes/footer.php') ?>



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


</script>