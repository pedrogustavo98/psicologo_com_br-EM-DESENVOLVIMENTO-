<?php require('../psicologo_com_br_backoffice/view/componentes/header.php') ?>

<div class="d-flex flex-column col-md-11">

    <div class="d-flex">
        <h1>CONVÊNIOS PARCEIROS</h1>


        <div class="container-adicionar">
            <a href="/convenios/listar">
                <button class="btn btn-dark botao-adicionar">Voltar</button>
            </a>
        </div>

    </div>

    <div class="col-md-12 m-0 p-0 main-janela shadow">
        <div class="tab-janela col-md-12 p-2">
            CADASTRAR
        </div>



        <div class="content-janela m-5">

            <form class="d-flex" id="form-gerar">
                <div class="row">

                    <h5>Dados do convênio</h5>


                    <div class="col-md-12 d-flex flex-column" style="width: 200px;">
                        <label class="label-geral" for="imagem">
                            <div>Imagem*</div>
                            <img src="https://placehold.jp/220x220.png" id="placeholder-image" class="placeholderImage">
                            <input type="file" class="form-control required text-capitalize required d-none" placeholder="Ex.: Anderson Silva" name="imagem" id="imagem">
                        </label>
                    </div>


                    <div class="col-md-12 mt-5">
                        <label class="label-geral" for="nome">Nome do convênio*</label>
                        <input type="text" class="form-control required text-capitalize required campo-nome" placeholder="Ex.: Anderson Silva" name="nome" id="nome">
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

    $('#btn-gerar').on('click', function() {

        $.ajax({
            url: '/convenios/salvar', 
            type: 'POST',
            async: false,
            cache: false,
            contentType: false,
            processData: false,
            dataType: 'json',
            data: new FormData(document.getElementById('form-gerar')),
            success: function(response) { 
                let dado = response;
               
                Swal.fire({
                    title: response.titulo,
                    text: response.mensagem,
                    icon: response.status
                }).then(() => {
                    if (response.status == 'success') {
                        location.reload();
                    }
                });
            },
            error: function(xhr, status, error) { // Função de callback para erros
                console.error('Erro na requisição AJAX:', error);
            }
        });
    })
</script>