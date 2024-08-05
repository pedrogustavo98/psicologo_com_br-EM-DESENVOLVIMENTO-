<?php require_once('views/componentes/header.php'); ?>

<div class="row m-0 p-0">
    <div class="col-md-12 container-setion-convenio d-flex flex-column shadow align-items-center">
        <h1 class="titulo-agenda mt-5">CONTATO</h1>
        <p class="container-agenda">A Clínica Bem Viver, se preocupa com a qualidade em atendê-lo.</p>
    </div>
</div>

<div class="row m-0 p-0">
    <div class="container-formulario col-md-12 p-0 m-0 d-flex justify-content-end">
        <div class="col-md-5 m-5 flex-column container-forms">

            <h4 class="subtitulo m-5 legenda-subtitulo">
                Entre em contato conosco através dos nossos canais de atendimento.
            </h4>

            <div class="col-md-12 p-5 container-telefones">
                <div class="subtitulo footer text-uppercase" style="width: 23%">
                    contato
                </div>

                <a href="#" class="nav-link">
                    <p class="btn-paragraph text-uppercase mt-2 mb-2 p-0"><i style="margin-right: 5px;" class="fa-brands fa-whatsapp"></i>(11) 94950-2572</p>
                </a>
                <a href="#" class="nav-link">
                    <p class="btn-paragraph text-uppercase mb-2 p-0"><i style="margin-right: 5px;" class="fa-solid fa-phone"></i>(11) 4619-5554</p>
                </a>
                <a href="#" class="nav-link">
                    <p class="btn-paragraph text-uppercase mb-2 p-0"><i style="margin-right: 5px;" class="fa-solid fa-envelope"></i>contato@clinicabemviversp.com.br</p>
                </a>
                <div class="subtitulo footer text-uppercase" style="width: 35%">
                    redes sociais
                </div>
                <div class="col-md-12 d-flex mt-1">
                    <a href="#" class="nav-link">
                        <i class="fa-brands fa-instagram fa-2x" style="margin: 5px;"></i>
                    </a>
                    <a href="#" class="nav-link">
                        <i class="fa-brands fa-facebook fa-2x" style="margin: 5px;"></i>
                    </a>
                </div>
            </div>

        </div>

        <div class="col-md-5 m-5 d-flex flex-column container-contato-form" >
            <div class="col-md-12 m-0 p-0" style="background: #09738a;">
                <img src="/assets/images/contato.png" style="object-fit: cover; width: 100%;">
            </div>

            <form action="#">
                <div class="row d-flex justify-content-center mt-5">

                    <div class="col-md-5 d-flex flex-column">
                        <label for="nome">NOME*</label>
                        <input type="text" placeholder="Ex.: João Paulo" class="form-control input-padrao-contato" name="nome" id="nome">
                    </div>

                    <div class="col-md-5 d-flex flex-column">
                        <label for="nome">EMPRESA*</label>
                        <input type="text" placeholder="Ex.: Sistema de Televisão" class="form-control input-padrao-contato" name="nome" id="nome">
                    </div>

                    <div class="col-md-5 mt-3 d-flex flex-column">
                        <label for="nome">TELEFONE*</label>
                        <input type="text" placeholder="Ex.: (99) 99999-9999" class="form-control input-padrao-contato" name="nome" id="nome">
                    </div>

                    <div class="col-md-5 mt-3 d-flex flex-column">
                        <label for="nome">E-MAIL*</label>
                        <input type="text" placeholder="Ex.: email@email.com.br" class="form-control input-padrao-contato" name="nome" id="nome">
                    </div>

                    <div class="col-md-10 mt-3 d-flex flex-column">
                        <label for="nome">MENSAGEM*</label>
                        <textarea name="" id="" class="form-control" style="resize: none;"></textarea>
                        <div class="col-md- mt-3">
                            <a href="#" class="btn btn-dark">Go somewhere</a>
                        </div>
                    </div>




                </div>
            </form>


        </div>


    </div>
</div>

</div>
</div>




<?php require_once('views/componentes/footer.php'); ?>