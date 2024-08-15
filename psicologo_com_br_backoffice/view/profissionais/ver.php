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
            VISUALIZAR
        </div>



        <div class="content-janela m-5">

            <form class="d-flex" id="form-gerar">
                <div class="row">

                    <h5>Dados do profissional</h5>

                    <div class="d-flex p-0 m-0">
                        <div class="col-md-12 d-flex m-2 p-0">
                            <img class="m-2" src="https://placehold.jp/220x220.png">
                        </div>

                    </div>



                    <div class="col-md-3 mt-5">
                        <label class="label-geral" for="nome">Nome*</label>
                        <input type="text" class="form-control required text-capitalize required" value="<?php echo $resultado['nome'] ?>" placeholder="Ex.: Anderson Silva" name="nome" id="nome">
                    </div>
                    <div class="col-md-3 mt-5">
                        <label class="label-geral" for="email">Email*</label>
                        <input type="text" class="form-control required required" value="<?php echo $resultado['email'] ?>" placeholder="Ex.: anderson@email.com" name="email" id="email">
                    </div>
                    <div class="col-md-3 mt-5">
                        <label class="label-geral" for="registro">Número de registro*</label>
                        <input type="text" class="form-control required text-capitalize required" value="<?php echo $resultado['registro'] ?>" placeholder="Ex.: CRP 00/000000 - UF" name="registro" id="registro">
                    </div>
                    <div class="col-md-3 mt-5">
                        <label class="label-geral" for="tipo">Tipo*</label>
                        <select class="form-control" name="tipo" id="tipo">
                            <option value="Master" <?php echo $resultado['tipo'] == 'Master' ? 'selected' : '' ?>>Master</option>
                            <option value="Convidado" <?php echo $resultado['tipo'] == 'Convidado' ? 'selected' : '' ?>>Convidado</option>
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