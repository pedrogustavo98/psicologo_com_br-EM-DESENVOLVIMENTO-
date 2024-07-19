function setValid(element) {
    $('#' + element).removeClass('invalid-form');
}

function setInvalid(element, msg) {
    $('#' + element).addClass('invalid-form');
}

function goUrl(page, url, param) {
    window.location = url + '/' + page + '/' + param;
}

function goUrlAbaContas(page, url, param) {
    window.location = url + '/' + param + '/' + page + '/contas';
}

function goUrlAbaAvaliacoes(page, url, param) {
    window.location = url + '/' + param + '/' + page + '/avaliacoes';
}


function goUrlAbaCardapio(page, url, param) {
    window.location = url + '/' + param + '/' + page + '/cardapio';
}

function goUrlAbaComplementos(page, url, param) {
    window.location = url + '/' + param + '/' + page + '/complementos';
}

function goUrlComentarios(page, url, param) {
    window.location = url + '/' + param + '/' + page;
}


function goBack() {
    window.history.back();
}

var maskTelCel = function (val) {
    return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
},
    optionsTelCel = {
        onKeyPress: function (val, e, field, options) {
            field.mask(maskTelCel.apply({}, arguments), options);
        }
    };

var maskCpfCnpj = function (val) {
    console.log(val);
    return val.replace(/\D/g, '').length <= 11 ? '000.000.000-00999' : '00.000.000/0000-00';
},
    optionsCpfCnpj = {
        onKeyPress: function (val, e, field, options) {
            field.mask(maskCpfCnpj.apply({}, arguments), options);
        }
    };

/**
 * Toast - Função de chamada padrão plugin iziToast
 *
 * @param {string} message
 * @param {string} [status='']
 * @param {string} [title='']
 * @param {string} [icon='']
 * @param {string} [color='']
 */
function toast(message, status = '', title = '', icon = '', color = '') {
    var titleColor, messageColor, iconColor, backgroundColor, progressBarColor = '';

    switch (status) {
        case 'error':
            title = 'Oops...';
            color = 'red';
            icon = 'fa fa-times-circle';
            break;
        case 'success':
            title = 'Sucesso';
            color = 'green';
            icon = 'fa fa-check';
            break;
        case 'warning':
            title = 'Atenção!';
            color = 'yellow';
            icon = 'fa fa-exclamation-triangle';
            break;
        case 'empty':
            title = 'Vazio :(';
            titleColor = '#E5158A';
            messageColor = '#FFFFFF';
            iconColor = '#E5158A';
            backgroundColor = 'rgba(54, 8, 100, 0.8)';
            progressBarColor = '#E5158A';
            break;

        default:
            titleColor = '#E5158A';
            messageColor = '#FFFFFF';
            iconColor = '#E5158A';
            backgroundColor = 'rgba(54, 8, 100, 0.8)';
            progressBarColor = '#E5158A';
            break;
    }
    iziToast.show({
        icon: icon,
        title: title,
        message: message,
        color: color,
        titleColor, messageColor, iconColor, backgroundColor, progressBarColor
    });
}

/**
 * addToastFila - Função para adicionar toast na fila de exibição. Será exibido na próxima página a ser carregada.
 *
 * @param {object} objToast
 * @param {string} local - Admin, Site
 */
function addToastFila(objToast, local) {
    var toasts = JSON.parse(localStorage.getItem('toasts' + local));
    if (!toasts) {
        toasts = [];
    }
    toasts.push(objToast);
    localStorage.setItem('toasts' + local, JSON.stringify(toasts));
}
// toast('mensagem', 'error');
// toast('mensagem', 'success');
// toast('mensagem', 'warning');
// toast('mensagem', '', 'Titulo', 'fa fa-envelope');

$(document).ready(function () {
    $('.count').each(function () {
        $(this).prop('Counter', 0).animate({
            Counter: $(this).text()
        }, {
            duration: 4000,
            easing: 'swing',
            step: function (now) {



                $(this).text(Math.ceil(now));
            }
        });
    });

    // Função que substitui qualquer chave não definida ([#key#]), em uma string vazia
    try {
        var pattern = /\[(.*?)\]/;
        $(document).find(':input').each(function () {
            var str = $(this).val();

            if (str != null && str != undefined) {
                $(this).val(str.replace(pattern, ''));
            }
        })
    } catch (e) { };

    try {
        $('.mask-data').mask('99/99/9999');
        $('.mask-horario').mask('99:99');
        $('.mask-mesano').mask('99/9999');
        $('.mask-diames').mask('99/99');
        $('.mask-horas').mask('99:99');
        $('.mask-ano').mask('9999');
        $('.mask-cnpj').mask('99.999.999/9999-99');
        $('.mask-cpf').mask('999.999.999-99');
        $('.mask-rg').mask('99.999.999-A');
        $('.mask-telefone').mask('(99) 9999-9999');
        $('.mask-celular').mask('(99) 99999-9999');
        $('.mask-cep').mask('99999-999');
        $('.mask-idade').mask('999');
        $('.mask-telcel').mask(maskTelCel, optionsTelCel);
        $('.mask-cpfcnpj').mask(maskCpfCnpj, optionsCpfCnpj);
        $('.mask-codigo').mask('999999');
        $('.mask-cartao').mask('0000 0000 0000 0000');
        $('.mask-porcentagem').mask("#0 %");
        $('.mask-percentual').mask('#0,0 %', { reverse: true });
        $('.apenas-numeros').on("input", function () {
            $(this).val($(this).val().replace(/[^0-9]/g, ''));
        });
    } catch (error) {
        console.error('Plugin Mask doesn`t included');
    }

    try {
        $('.mask-reais').maskMoney({ symbol: 'R$ ', showSymbol: true, thousands: '.', decimal: ',', symbolStay: true });
        $('.mask-porcentagem').maskMoney({ prefix: '', suffix: '%', thousands: '', decimal: ',', affixesStay: false, precision: 1 });
        $('.mask-km').maskMoney({ prefix: '', suffix: ' Km', thousands: '.', decimal: '', affixesStay: false, precision: 0 });
    } catch (error) {
        console.error('Plugin Mask Money doesn`t included');
    }

    // try {
    //   if ($(".sidebar").hasClass("toggled")) {
    //     $('.sidebar .collapse').collapse('hide');
    //   };
    // } catch (error) {
    //   console.log('SIDE MENU CLOSE ERROR');
    // }
});

function validateZero(element) {
    var errors = 0;
    if ($('#' + element).val() == 0) {
        setInvalid(element);
        errors++;
    } else {
        setValid(element);
    }
    return errors;
}

function validateEmpty(element) {
    var errors = 0;
    if ($('#' + element).val() == '' || $('#' + element).val() == 0) {
        setInvalid(element);
        errors++;
    } else {
        setValid(element);
    }
    return errors;
}

function validateChecked(element) {
    var errors = 0;
    if ($('#' + element).attr('checked') != 'checked') {
        setInvalid(element);
        errors++;
    } else {
        setValid(element);
    }
    return errors;
}

function validateEqual(element1, element2) {
    var errors = 0;
    if ($('#' + element1).attr('value') == $('#' + element2).attr('value')) {
        setValid(element1);
        setValid(element2);
    } else {
        setInvalid(element2);
        errors++;
    }
    return errors;
}

function validateEmail(element) {
    var errors = 0;
    var emailRegEx = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i;
    if ($('#' + element).val().search(emailRegEx) == -1) {
        setInvalid(element);
        errors++;
    } else {
        setValid(element);
    }
    return errors;
}

function validateTelCel(element) {
    var errors = 0;

    var telCelRegEx = /(\(?\d{2}\)?\s)?(\d{4,5}\-\d{4})/g;

    if (number.search(telCelRegEx) == -1) {
        setInvalid(element);
        errors++;
    } else {
        setValid(element);
    }
    return errors;
}

function validateEmptyFile(element) {
    var arquivo = $('#' + element);
    var errors = 0;
    if (arquivo[0].files.length == 0) {
        $('#' + element).siblings('img').addClass('invalid-image');
        errors++;
    } else {
        $('#' + element).siblings('img').removeClass('invalid-image');
    }
    return errors;
}

function validateSenha(element1, element2) {
    var errors = 0;
    if ($('#' + element1).val() != $('#' + element2).val()) {
        setInvalid(element2);
        errors++;
    } else {
        setValid(element1);
    }
    return errors;
}

function validateCpf(element) {
    cpf = $('#' + element).val();
    cpf = cpf.replace(/[^0-9]/g, '');

    var numeros, digitos, soma, i, resultado, digitos_iguais;
    digitos_iguais = 1;
    if (cpf.length < 11) {
        setInvalid(element);
        return 1;
    }

    for (i = 0; i < cpf.length - 1; i++) {
        if (cpf.charAt(i) != cpf.charAt(i + 1)) {
            digitos_iguais = 0;
            break;
        }
    }

    if (!digitos_iguais) {
        numeros = cpf.substring(0, 9);
        digitos = cpf.substring(9);
        soma = 0;
        for (i = 10; i > 1; i--) {
            soma += numeros.charAt(10 - i) * i;
        }
        resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
        if (resultado != digitos.charAt(0)) {

            setInvalid(element);
            return 1;
        }
        numeros = cpf.substring(0, 10);
        soma = 0;
        for (i = 11; i > 1; i--)
            soma += numeros.charAt(11 - i) * i;
        resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
        if (resultado != digitos.charAt(1)) {
            setInvalid(element);
            return 1;
        }

        return 0;
    } else {
        setInvalid(element);
        return 1;
    }
}

function validateCnpj(element) {
    cnpj = $('#' + element).val();
    cnpj = cnpj.replace(/[^0-9]/g, '');

    var numeros, digitos, soma, i, resultado, digitos_iguais;
    digitos_iguais = 1;
    if (cnpj.length < 14) {
        setInvalid(element)
        return 1;
    }

    for (i = 0; i < cnpj.length - 1; i++) {
        if (cnpj.charAt(i) != cnpj.charAt(i + 1)) {
            digitos_iguais = 0;
            break;
        }
    }

    if (!digitos_iguais) {
        // O valor original
        var cnpj_original = cnpj;
        // Captura os primeiros 12 números do CNPJ
        var primeiros_numeros_cnpj = cnpj.substr(0, 12);
        // Faz o primeiro cálculo
        var primeiro_calculo = calc_digitos_posicoes(primeiros_numeros_cnpj, 5);
        // O segundo cálculo é a mesma coisa do primeiro, porém, começa na posição 6
        var segundo_calculo = calc_digitos_posicoes(primeiro_calculo, 6);
        // Concatena o segundo dígito ao CNPJ
        var cnpj = segundo_calculo;
        // Verifica se o CNPJ gerado é idêntico ao enviado
        if (cnpj === cnpj_original) {
            setValid(element)
            return 0;
        } else {
            setInvalid(element)
            return 1;
        }
    } else {
        setInvalid(element)
        return 1;
    }
}

function calc_digitos_posicoes(digitos, posicoes) {
    var soma_digitos = 0;
    // Garante que o valor é uma string
    digitos = digitos.toString();

    // Faz a soma dos dígitos com a posição
    // Ex. para 10 posições:
    //   0    2    5    4    6    2    8    8   4
    // x10   x9   x8   x7   x6   x5   x4   x3  x2
    //   0 + 18 + 40 + 28 + 36 + 10 + 32 + 24 + 8 = 196
    for (var i = 0; i < digitos.length; i++) {
        // Preenche a soma com o dígito vezes a posição
        soma_digitos = soma_digitos + (digitos[i] * posicoes);
        // Subtrai 1 da posição
        posicoes--;
        // Parte específica para CNPJ
        // Ex.: 5-4-3-2-9-8-7-6-5-4-3-2
        if (posicoes < 2) {
            // Retorno a posição para 9
            posicoes = 9;
        }
    }

    // Captura o resto da divisão entre soma_digitos dividido por 11
    // Ex.: 196 % 11 = 9
    soma_digitos = soma_digitos % 11;
    // Verifica se soma_digitos é menor que 2
    if (soma_digitos < 2) {
        // soma_digitos agora será zero
        soma_digitos = 0;
    } else {
        // Se for maior que 2, o resultado é 11 menos soma_digitos
        // Ex.: 11 - 9 = 2
        // Nosso dígito procurado é 2
        soma_digitos = 11 - soma_digitos;
    }

    // Concatena mais um dígito aos primeiro nove dígitos
    // Ex.: 025462884 + 2 = 0254628842
    var cpf = digitos + soma_digitos;

    // Retorna
    return cpf;
}

/**
 * @description Busca endereço de acordo com o cep passado através dos elementos
 * @param {Element} campoCep
 * @param {?Element} campoEndereco
 * @param {?Element} CampoBairro
 * @param {?Element} CampoEstado
 * @param {?Element} CampoCidade
 * @param {?Element} campoNumero
 */
function autopreencherCep(campoCep, campoEndereco, CampoBairro, CampoEstado, CampoCidade, campoNumero) {
    if (campoCep && $(campoCep).val() != '') {
        $.ajax({
            url: 'https://cep.alphacode.com.br/action/cep/' + $(campoCep).val(),
            type: 'GET',
            success: function (json) {
                data = $.parseJSON(json)['success'];
                if (campoEndereco) {
                    $(campoEndereco).val(data.tp_logradouro + ' ' + data.logradouro);
                }
                if (CampoBairro) {
                    $(CampoBairro).val(data.bairro);
                }
                if (CampoEstado) {
                    $(CampoEstado).val(data.uf.toUpperCase());
                }
                if (CampoCidade) {
                    $(CampoCidade).val(data.cidade);
                }
                if (campoNumero) {
                    $(campoNumero).focus();
                }
            }
        });
    }
}

