<?php require('../psicologo_com_br_backoffice/view/componentes/header.php') ?>

<div class="d-flex flex-column col-md-11">

    <div class="d-flex">
        <h1>MINHA CLÍNICA</h1>
    </div>

    <div class="col-md-12 m-0 p-0 main-janela shadow">
        <div class="tab-janela col-md-12 p-2">
            CADASTRAR
        </div>



        <div class="content-janela m-5">

            <form class="d-flex" id="form-gerar">
                <div class="row">

                    <h5>Dados da clínica</h5>


                    <div class="col-md-5 mt-5">
                        <label class="label-geral" for="email">E-mail*</label>
                        <input type="text" value="<?php echo $resultado['email'] ?>" disabled class="form-control required" placeholder="Ex.: anderson@email.com" name="email" id="email">
                    </div>
                    <div class="col-md-3 mt-5">
                        <label class="label-geral" for="whatsapp">WhatsApp*</label>
                        <input type="text" value="<?php echo $resultado['whatsapp'] ?>" disabled class="form-control mask-telcel required text-capitalize" placeholder="Ex.: (99) 99999-9999" name="whatsapp" id="whatsapp">
                    </div>
                    <div class="col-md-3 mt-5">
                        <label class="label-geral" for="telefone">Telefone*</label>
                        <input type="text" value="<?php echo $resultado['telefone'] ?>" disabled class="form-control mask-telcel required text-capitalize" placeholder="Ex.: (99) 99999-9999" name="telefone" id="telefone">
                    </div>
                    <div class="col-md-6 mt-5">
                        <label class="label-geral" for="facebook">Facebook*</label>
                        <input type="text" value="<?php echo $resultado['facebook'] ?>" disabled class="form-control required" placeholder="Ex.: https://facebook.com.br/profile/" name="facebook" id="facebook">
                    </div>
                    <div class="col-md-6 mt-5">
                        <label class="label-geral" for="instagram">Instagram*</label>
                        <input type="text" value="<?php echo $resultado['instagram'] ?>" disabled class="form-control required" placeholder="Ex.: https://instagram.com.br/profile/" name="instagram" id="instagram">
                    </div>

                    <h5 class="mt-5">Endereço da clínica</h5>

                    <div class="col-md-3 mt-5">
                        <label class="label-geral" for="cep">Cep*</label>
                        <input type="text" value="<?php echo $resultado['cep'] ?>" disabled class="form-control mask-cep required" placeholder="Ex.: 00000-000" name="cep" id="cep">
                    </div>
                    <div class="col-md-5 mt-5">
                        <label class="label-geral" for="rua">Endereço*</label>
                        <input type="text" value="<?php echo $resultado['logradouro'] ?>" disabled class="form-control required text-capitalize" placeholder="Ex.: Rua da alegria" name="rua" id="rua">
                    </div>
                    <div class="col-md-3 mt-5">
                        <label class="label-geral" for="numero">Número*</label>
                        <input type="text" value="<?php echo $resultado['numero'] ?>" disabled class="form-control required" placeholder="Ex.: 99" name="numero" id="numero">
                    </div>
                    <div class="col-md-3 mt-5">
                        <label class="label-geral" for="complemento">Complemento*</label>
                        <input type="text" value="<?php echo $resultado['complemento'] ?>" disabled class="form-control required text-uppercase" placeholder="Ex.: Casa 1" name="complemento" id="complemento">
                    </div>
                    <div class="col-md-3 mt-5">
                        <label class="label-geral" for="bairro">Bairro*</label>
                        <input type="text" value="<?php echo $resultado['bairro'] ?>" disabled class="form-control required text-capitalize" placeholder="Ex.: Centro" name="bairro" id="bairro">
                    </div>
                    <div class="col-md-3 mt-5">
                        <label class="label-geral" for="cidade">Cidade*</label>
                        <input type="text" value="<?php echo $resultado['cidade'] ?>" disabled class="form-control required text-capitalize" placeholder="Ex.: São Paulo" name="cidade" id="cidade">
                    </div>
                    <div class="col-md-2 mt-5">
                        <label class="label-geral" for="uf">UF*</label>
                        <input type="text" value="<?php echo $resultado['estado'] ?>" disabled class="form-control required text-uppercase" placeholder="Ex.: SP" name="uf" id="uf">
                    </div>

                </div>
            </form>


            <div class="col-md-12 m-3 p-3 d-flex justify-content-end">
                <button type="button" id="btn-alterar" class="btn btn-dark">alterar</button>
                <button type="button" id="btn-salvar" class="btn btn-dark">salvar</button>
            </div>


            <div id="hidden-content" style="display:none;"></div>


        </div>
    </div>
</div>
<?php require('../psicologo_com_br_backoffice/view/componentes/footer.php') ?>



<script>
    $('#btn-salvar').hide();

    $('#btn-alterar').on('click', function() {
        $('#btn-alterar').hide();
        $('#btn-salvar').show();
        $('input').removeAttr('disabled');
    });

    $('#btn-salvar').on('click', function(e) {
        e.preventDefault();

        var errors = 0;

        $('.required').each(function(index, element) {
            errors += validateEmpty(element.id);
        });


        if (errors > 0) {
            Swal.fire({
                title: 'Oops!',
                text: 'Por favor, preencha os campos obrigatórios!',
                icon: 'error'
            });

            return;
        }


        $.ajax({
            url: '/clinica/alterar', // URL do arquivo PHP que processará a requisição
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
                }).then((result) => {
                    location.reload();
                });
            },
            error: function(xhr, status, error) { // Função de callback para erros
                console.error('Erro na requisição AJAX:', error);
            }
        });
    });



    $('#cep').on('change', function() {
        let cep = $('#cep').val();


        cep = removerTraco(cep);

        $.ajax({
            url: `https://viacep.com.br/ws/${cep}/json/`,
            method: 'GET',
            dataType: 'json',
            success: function(response) { // Função de callback para o sucesso da requisição
                let dado = response;
               
                if(!dado.erro){
                    $('#bairro').val(dado.bairro);
                    $('#cidade').val(dado.localidade);
                    $('#uf').val(dado.uf);
                    $('#rua').val(dado.logradouro);
                }

            },
            error: function(xhr, status, error) { // Função de callback para erros
                console.error('Erro na requisição AJAX:', error);
            }
        });
    });
</script>