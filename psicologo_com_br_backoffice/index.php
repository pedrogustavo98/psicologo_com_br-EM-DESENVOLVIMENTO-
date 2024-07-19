<?php
require('../psicologo_com_br_backoffice/control/home.php');

$home = new Home();


function pre($valor)
{
    echo '<pre>';
    print_r($valor);
    exit;
}

switch ($_GET['modulo']) {
    case 'home':
        switch ($_GET['action']) {
            case 'listar':
                $home->listar();
                // pre('aqui');
                break;
            case 'cadastrar':
                $home->cadastrar();
                break;
            case 'gerar':
                $home->gerar();
                // pre('aqui');
                break;
            case 'enviar':
                $home->enviar();
                // pre('aqui');
                break;
            default:
                $home->listar();
                // pre('aqui');
                break;
        }
        break;
    default:
        $home->listar();

        break;
}
