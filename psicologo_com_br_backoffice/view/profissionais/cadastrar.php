<?php require('../psicologo_com_br_backoffice/view/componentes/header.php') ?>

<div class="d-flex flex-column col-md-11">

    <div class="d-flex">
        <h1>PROFISSIONAIS</h1>


        <div class="container-adicionar">
            <a href="/profissionais/listar">
                <button class="btn btn-dark botao-adicionar">Voltar</button>
            </a>
        </div>

    </div>

    <div class="col-md-12 m-0 p-0 main-janela shadow">
        <div class="tab-janela col-md-12 p-2">
            CADASTRAR
        </div>



        <div class="content-janela m-5">

            <form class="d-flex" id="form-gerar" enctype="multipart/form-data">
                <div class="row">

                    <h5>Dados do profissional</h5>

                    <div class="d-flex p-0 m-0">
                        <div class="col-md-12 d-flex m-2 p-0">
                            <label for="imagem" class="label-geral">
                                <div class="img-container">
                                    <img class="m-2" id="img-preview" src="https://placehold.jp/220x220.png">
                                    <input type="file" class="form-control required text-capitalize required d-none" accept=".jpeg, .png, .jpg" onchange="previewImagem(event)" placeholder="Ex.: Anderson Silva" name="imagem" id="imagem">
                                </div>
                            </label>
                        </div>

                    </div>



                    <div class="col-md-3 mt-5">
                        <label class="label-geral" for="nome">Nome*</label>
                        <input type="text" class="form-control required text-capitalize required" placeholder="Ex.: Anderson Silva" name="nome" id="nome">
                    </div>
                    <div class="col-md-3 mt-5">
                        <label class="label-geral" for="email">Email*</label>
                        <input type="text" class="form-control required required" placeholder="Ex.: anderson@email.com" name="email" id="email">
                    </div>
                    <div class="col-md-3 mt-5">
                        <label class="label-geral" for="registro">Número de registro*</label>
                        <input type="text" class="form-control required text-capitalize required" placeholder="Ex.: CRP 00/000000 - UF" name="registro" id="registro">
                    </div>
                    <div class="col-md-3 mt-5">
                        <label class="label-geral" for="tipo">Tipo*</label>
                        <select class="form-control" name="tipo" id="tipo">
                            <option value="Master">Master</option>
                            <option value="Convidado">Convidado</option>
                        </select>
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
    function previewImagem(event) {
        // Obtém o arquivo selecionado
        const file = event.target.files[0];

        // Verifica se há um arquivo e se ele é uma imagem
        if (file && file.type.startsWith('image/')) {
            const reader = new FileReader();

            // Carrega a imagem selecionada
            reader.onload = function(e) {
                const imgPreview = document.getElementById('img-preview');
                imgPreview.src = e.target.result;
                imgPreview.style.display = 'block'; // Exibe a imagem
            };

            // Lê o arquivo como URL de dados
            reader.readAsDataURL(file);
        }
    }



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
            url: '/profissionais/salvar', // URL do arquivo PHP que processará a requisição
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
                    title: response.titulo,
                    text: response.mensagem,
                    icon: response.status
                });
            },
            error: function(xhr, status, error) { // Função de callback para erros
                console.error('Erro na requisição AJAX:', error);
            }
        });
    });


</script>