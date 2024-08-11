<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="/assets/padrao.css">
    <link rel="shortcut icon" href="/public/icons/ferramenta_icon.svg">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;800;900;1000&family=Josefin+Sans:wght@400;700&family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <title>Login | Versado Clínica Psicológica</title>
</head>

<body>
    <div class="col-md- m-0 p-0 d-flex">
        <div class="col-md-5 container-left" style="height: 100vh;">
        </div>
        <div class="col-md-7 container-right">

            <div class="container-campos d-flex flex-column">
                <h1>Bem Vindo!</h1>

                <form id="form-login" method="get">
                    <div class="campos-agrupados">
                        <div class="input-nome">
                            <label for="email" class="label-geral">E-mail</label>
                            <input type="text" name="email" id="email" placeholder="Ex.: email@email.com.br" class="input-padrao form-control mr-2">
                        </div>
                        <div class="input-senha">
                            <label for="senha" class="label-geral">Senha</label>
                            <input type="password" name="senha" placeholder="Ex.: *******" id="senha" class="input-padrao form-control mr-2">
                        </div>
                    </div>


                    <button type="button" id="botao-login" class='botao-login'>
                        <span>
                            Entrar
                        </span>
                    </button>
                </form>
            </div>
        </div>
    </div>

</body>

<script>
    $('#botao-login').click(function(event) {
        event.preventDefault();
        login();
    });


    function login() {
        $.ajax({
            url: '/restrito/login',
            type: 'POST',
            async: false,
            cache: false,
            contentType: false,
            processData: false,
            dataType: 'json',
            data: new FormData(document.getElementById('form-login')),
            success: function(response) {


                if (response.status == 'success') {
                    swal.fire({
                        title: response.titulo,
                        text: response.mensagem,
                        icon: response.status,
                        type: response.status,
                        showConfirmButton: true,
                    }).then((result) => {
                        window.location = "/dashboard";
                    })

                  
                } else {
                    swal.fire({
                        title: response.titulo,
                        text: response.mensagem,
                        icon: response.status,
                        type: response.status,
                        showConfirmButton: true,
                    });
                }
            }
        });
    }
</script>