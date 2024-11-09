<?php require('../psicologo_com_br_backoffice/view/componentes/header.php') ?>

<div class="d-flex flex-column col-md-11">

    <div class="d-flex">
        <h1>WORKSHOPS</h1>


        <div class="container-adicionar">
            <a href="/workshops/listar">
                <button class="btn btn-dark botao-adicionar">Voltar</button>
            </a>
        </div>

    </div>

    <div class="col-md-12 m-0 p-0 main-janela shadow">
        <div class="tab-janela col-md-12 p-2">
            VISUALIZAR
        </div>



        <div class="content-janela m-5">

            <form class="d-flex" id="form-gerar" enctype="multipart/form-data">
                <div class="row">

                    <h5>Dados do evento</h5>

                    <div class="d-flex p-0 m-0">
                        <div class="col-md-12 d-flex m-2 p-0">
                            <label for="imagem1" class="label-geral">
                                <div class="img-container">
                                    <img class="m-2" id="img-preview-0" src="<?php echo '/' . $resultado['imagem_um'] ?>">
                                    <input type="file" class="d-none required" disabled name="imagem[]" accept=".jpeg, .png, .jpg" onchange="previewImagem(event, 0)" id="imagem1">
                                </div>
                            </label>
                            <label for="imagem2" class="label-geral">
                                <div class="img-container">
                                    <img class="m-2" id="img-preview-1" src="<?php echo '/' . $resultado['imagem_dois'] ?>">
                                    <input type="file" class="d-none required" disabled name="imagem[]" accept=".jpeg, .png, .jpg" onchange="previewImagem(event, 1)" id="imagem2">
                                </div>
                            </label>
                            <label for="imagem3" class="label-geral">
                                <div class="img-container">
                                    <img class="m-2" id="img-preview-2" src="<?php echo '/' . $resultado['imagem_tres'] ?>">
                                    <input type="file" class="d-none required" disabled name="imagem[]" accept=".jpeg, .png, .jpg" onchange="previewImagem(event, 2)" id="imagem3">
                                </div>
                            </label>

                        </div>

                    </div>

                    <input type="text" name="id" id="id" value="<?php echo $resultado['id']?>">


                    <div class="col-md-3 mt-5">
                        <label class="label-geral" for="nome">Nome do evento*</label>
                        <input type="text" disabled class="form-control required text-capitalize required" value="<?php echo $resultado['nome_evento'] ?>" placeholder="Ex.: Anderson Silva" name="nome" id="nome">
                    </div>
                    <div class="col-md-10 mt-5">
                        <label class="label-geral" for="descricao">Descrição do evento*</label>
                        <textarea disabled class="form-control required text-capitalize required" name="descricao" id="descricao"><?php echo $resultado['descricao'] ?></textarea>
                    </div>



                </div>
            </form>


            <div class="col-md-12 m-3 p-3 d-flex justify-content-end">
                <button type="button" id="btn-alterar" class="btn btn-dark">Alterar</button>
                <button type="button" id="btn-salvar" class="btn btn-dark">Salvar</button>
            </div>


            <div id="hidden-content" style="display:none;"></div>


        </div>
    </div>
</div>
<?php require('../psicologo_com_br_backoffice/view/componentes/footer.php') ?>



<script>
    function previewImagem(event, id) {
        const input = event.target;
        const reader = new FileReader();

        reader.onload = function(e) {
            const imgPreview = document.getElementById(`img-preview-${id}`);
            imgPreview.src = e.target.result;
            imgPreview.style.display = 'block';
        };

        reader.readAsDataURL(input.files[0]);
    }


    $('#btn-salvar').hide();

    $('#btn-alterar').on('click', function(e) {
        $('#btn-alterar').hide();
        $('input, textarea').removeAttr('disabled');
        $('#btn-salvar').show();
    })




    $('#btn-salvar').on('click', function(e) {
        e.preventDefault();

        var errors = 0;

        // $('.required').each(function(index, element) {
        //     errors += validateEmpty(element.id);
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
            url: '/workshops/alterar', // URL do arquivo PHP que processará a requisição
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
                }).then(() => {
                    if (response.status == 'success') {
                        window.location = '/workshops/listar';
                    }
                });
            },
            error: function(xhr, status, error) { // Função de callback para erros
                console.error('Erro na requisição AJAX:', error);
            }
        });
    });
</script>