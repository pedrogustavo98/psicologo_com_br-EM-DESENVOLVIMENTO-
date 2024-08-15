</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.js"></script> -->

</body>

</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="/assets/jquery.mask.min.js"></script>
<script src="/assets/jquery.maskMoney.min.js"></script>
<script src="/assets/utils.js"></script>

<script>
    $('#btn-sair').hide();


    function sair() {
        const sair = document.getElementById('btn-sair');

        if (sair.style.display == 'none' || sair.style.display == '') {
            sair.style.display = 'inline-block';
        } else {
            sair.style.display = 'none';
        }

    }



    $('#btn-sair').on('click', function() {

        swal.fire({
            title: 'Ops!',
            text: 'Tem certeza que deseja sair?',
            icon: 'warning',
            type: 'warning',
            showConfirmButton: true,
        }).then((result) => {
            // console.log('aquiii');
            $.ajax({
                url: '/restrito/logout',
                type: 'POST',
                async: false,
                cache: false,
                contentType: false,
                processData: false,
                dataType: 'json',
                success: function(response) {
                    console.log(response, 'teste');

                    if (response.status == 'success') {
                        
                        window.location = "/restrito";

                    }
                }
            });
        })


    })
</script>