<?php
require('../psicologo_com_br_backoffice/control/home.php');
require('../psicologo_com_br_backoffice/control/dashboard.php');


function pre($valor)
{
    echo "<pre>";
    print_r($valor);
    exit;
}

$uri = explode('/', substr($_SERVER['REQUEST_URI'], '1'));

$home = new Home($uri);
$dashboard = new Dashboard($uri);
// $quemsomos = new QuemSomos($uri);
// $convenios = new Convenios($uri);
// $mensagens = new Mensagens($uri);


switch ($uri[0]) {
    case 'home':
        $home->listar();
        break;
    case 'dashboard':
        $dashboard->start();
        break;
    case 'quem-somos':
        // $quemsomos->start();
        break;
    case 'convenios':
        // $convenios->start();
        break;
    case 'mensagens':
        // $mensagens->start();
        break;
    case 'clinica':
        // $clinica->start();
        break;
    default:
        $dashboard->start();
        break;
}
