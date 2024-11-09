<?php require('../psicologo_com_br_backoffice/view/componentes/header.php') ?>

<div class="d-flex flex-column col-md-11">

    <div class="d-flex">
        <h1>CONVÊNIOS PARCEIROS</h1>


        <div class="container-adicionar">
            <a href="/convenios/listar">
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

                    <input type="hidden" name="id" id="convenio_id" value="<?php echo $resultado['id']?>">
                    <label for="imagem" class="label-geral" style="width: 250px;">
                        <div class="img-container">
                            <img class="m-2" id="img-preview" src="<?php echo $resultado['imagem'] == '' ? 'https://placehold.jp/2700x1000.png' : '/' . $resultado['imagem'] ?>">


                            <input type="file" disabled class="form-control <?php echo $resultado['imagem'] == '' ? 'required' : '' ?> text-capitalize d-none" accept=".jpeg, .png, .jpg" onchange="previewImagem(event)" placeholder="Ex.: Anderson Silva" name="imagem" id="imagem">
                        </div>
                    </label>


                    <div class="col-md-12 mt-5">
                        <label class="label-geral" for="nome">Nome do convênio*</label>
                        <input type="text" class="form-control required text-capitalize required" value="<?php echo $resultado['nome'] ?>" placeholder="Ex.: Anderson Silva" name="nome" id="nome">
                    </div>



                </div>
            </form>


            <div class="col-md-12 m-3 p-3 d-flex justify-content-end">
                <button type="button" id="btn-gerar" class="btn btn-dark">Salvar</button>
                <button type="button" id="btn-alterar" class="btn btn-dark">Alterar</button>
            </div>


            <div id="hidden-content" style="display:none;"></div>


        </div>
    </div>
</div>
<?php require('../psicologo_com_br_backoffice/view/componentes/footer.php') ?>



<script>
    $('textarea, input').attr('disabled', true);
    $('#btn-alterar').show();
    $('#btn-gerar').hide();

    $('#btn-alterar').on('click', function() {
        $('#btn-gerar').show();
        $('#btn-alterar').hide();
        $('textarea, input').removeAttr('disabled', true);
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
            url: '/convenios/alterar', // URL do arquivo PHP que processará a requisição
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
                    location.reload();
                })

            },
            error: function(xhr, status, error) { // Função de callback para erros
                console.error('Erro na requisição AJAX:', error);
            }
        });
    });

    function previewImagem(event) {
        const input = event.target;
        const reader = new FileReader();

        reader.onload = function(e) {
            const imgPreview = document.getElementById(`img-preview`);
            imgPreview.src = e.target.result;
            imgPreview.style.display = 'block';
        };

        reader.readAsDataURL(input.files[0]);
    }
</script>