<?php require('../psicologo_com_br_backoffice/view/componentes/header.php') ?>

<style>
    td:nth-child(2) {
        width: 65%;
    }
</style>

<div class="d-flex flex-column col-md-11">

    <div class="d-flex">
        <h1>MENSAGENS</h1>
    </div>

    <div class="col-md-12 m-0 p-0 main-janela shadow">
        <div class="tab-janela col-md-12 p-2">
            PESQUISAR
        </div>



        <div class="content-janela m-5">

            <div class="row">
                <div class="col-md-12 m-0 p-0">
                    <form class="d-flex" id="form-gerar">

                        <div class="col-md-3 m-2 d-flex">
                            <input type="text" class="form-control input-padrao" placeholder="Nome" name="nome" id="nome">
                        </div>

                        <div class="col-md-3 m-2 d-flex">

                            <button class="btn btn-dark" type="submit">Buscar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <div id="hidden-content" style="display:none;"></div>


    </div>

    <div class="col-md-12 shadow main-janela">
        <?php echo $tabela ?>

    </div>
</div>



</div>
<?php require('../psicologo_com_br_backoffice/view/componentes/footer.php') ?>



<script>
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