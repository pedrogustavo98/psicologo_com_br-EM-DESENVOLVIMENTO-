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

    <!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->


    <title>Admin</title>
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
                    <a href="/dashboard">
                        <button class="btn btn-primary m-1 d-flex justify-content-center <?php echo $dashboard ?>"><i class="fa-solid fa-chart-line"></i>
                            <div class="btn-titulo">Dashboard</div>
                        </button>
                    </a>

                    <a href="/quem-somos">
                        <button class="btn btn-primary m-1 d-flex justify-content-center <?php echo $quemsomos ?>"><i class="fa-solid fa-landmark"></i>
                            <div class="btn-titulo">Quem somos</div>
                        </button>
                    </a>
                    <a href="/convenios/listar">
                        <button class="btn btn-primary m-1 d-flex justify-content-center <?php echo $convenios ?>"><i class="fa-solid fa-handshake"></i>
                            <div class="btn-titulo">Convênios</div>
                        </button>
                    </a>

                    <a href="/workshops/listar">
                        <button class="btn btn-primary m-1 d-flex justify-content-center <?php echo $workshops ?>"><i class="fa-brands fa-confluence"></i>
                            <div class="btn-titulo">Workshops</div>
                        </button>
                    </a>

                    <a href="/mensagens">
                        <button class="btn btn-primary m-1 d-flex justify-content-center <?php echo $mensagens ?>">
                            <i class="fa-solid fa-envelope"></i>
                            <div class="btn-titulo">Mensagens</div>
                        </button>
                    </a>


                    <a href="/clinica">
                        <button class="btn btn-primary m-1 d-flex justify-content-center <?php echo $clinica ?>">
                            <i class="fa-solid fa-address-card"></i>
                            <div class="btn-titulo">
                                Minha clínica
                            </div>
                        </button>
                    </a>
                    <a href="/profissionais/listar">
                        <button class="btn btn-primary m-1 d-flex justify-content-center <?php echo $profissionais ?>">
                            <i class="fa-solid fa-users"></i>
                            <div class="btn-titulo">
                                Profissionais
                            </div>
                        </button>
                    </a>
                    <a href="/home/listar">
                        <button class="btn btn-primary m-1 d-flex justify-content-center <?php echo $home ?>">
                            <i class="fa-solid fa-house"></i>
                            <div class="btn-titulo">
                                Home
                            </div>
                        </button>
                    </a>
                </div>
            </div>

            <div class="d-flex w-100 flex-column">
                <div class="tab-superior text-end p-3">
                    <!-- teste 2 -->
                    <button onclick="sair()" class="h-100" style="background: none; border: none;">
                        <i class="fas fa-angle-down"></i>
                        <span style="font-weight: bold;"><?php echo $_SESSION['usuario']['nome'] . ' (' . $_SESSION['usuario']['tipo'] . ')' ?></span>
                        <i class="fa-solid fa-circle-user fa-xl black-icon"></i>
                    </button>
                    <button id="btn-sair" class="btn btn-secondary" style="position: absolute; top: 50px; right: 35px; width: 185px;">
                        <div class="d-flex align-items-center">
                            <i class="fa-solid fa-right-from-bracket"></i>
                            <span>SAIR</span>
                        </div>
                    </button>

                </div>


                <div class="d-flex justify-content-center align-items-start pt-5 h-100 shadow container-main">