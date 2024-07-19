<?php
require('../propostas/control/home.php');

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
                break;
            // case 'cadastrar':
            //     $home->cadastrar();
            //     break;
            case 'gerar':
                $home->gerar();
                break;
            case 'enviar':
                $home->enviar();
                break;
            default:
                $home->listar();
                break;
        }
        break;
    default:
        $home->listar();

        break;
}
