<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="/assets/jquery.mask.min.js"></script>
    <script src="/assets/jquery.maskMoney.min.js"></script>
    <script src="/assets/utils.js"></script>
    <script src="https://kit.fontawesome.com/9be86484fd.js" crossorigin="anonymous"></script>

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script> -->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <title>Gerador de propostas</title>
</head>

<body>

    <div class="row m-0 p-0">
        <div class="d-flex col-md-12 m-0 p-0">
            <div class="col-md-2 container-menu d-flex flex-column align-items-center">
                <div class="container-logo shadow">
                    <img src="/assets/imagens/logo.png" class="logo">
                </div>
                <!-- teste 1 -->
                <div class="col-md-10 d-flex flex-column">
                    <a href="/home">
                        <button class="btn btn-success m-1 d-flex justify-content-center"><i class="fa-solid fa-chart-line"></i>
                            <div class="btn-titulo">Dashboard</div>
                        </button>
                    </a>

                    <a href="/quem-somos">
                        <button class="btn btn-success m-1 d-flex justify-content-center"><i class="fa-solid fa-landmark"></i>
                            <div class="btn-titulo">Quem somos</div>
                        </button>
                    </a>
                    <a href="/convenios">
                        <button class="btn btn-success m-1 d-flex justify-content-center"><i class="fa-solid fa-handshake"></i>
                            <div class="btn-titulo">Convênios</div>
                        </button>
                    </a>

                    <a href="/workshops">
                        <button class="btn btn-success m-1 d-flex justify-content-center"><i class="fa-brands fa-confluence"></i>
                            <div class="btn-titulo">Workshops</div>
                        </button>
                    </a>

                    <a href="/mensagens">
                        <button class="btn btn-success m-1 d-flex justify-content-center">
                            <i class="fa-solid fa-envelope"></i>
                            <div class="btn-titulo">Mensagens</div>
                        </button>
                    </a>


                    <a href="/clinica">
                        <button class="btn btn-success m-1 d-flex justify-content-center">
                            <i class="fa-solid fa-address-card"></i>
                            <div class="btn-titulo">
                                Minha clínica
                            </div>
                        </button>
                    </a>
                </div>
            </div>

            <div class="d-flex w-100 flex-column">
                <div class="tab-superior">
                    <!-- teste 2 -->

                </div>

                <div class="tab-conteudo d-flex justify-content-center align-items-start pt-5 h-100">