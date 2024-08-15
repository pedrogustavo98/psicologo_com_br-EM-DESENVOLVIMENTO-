<?php

require('../psicologo_com_br_backoffice/importsModel.php');
require('../psicologo_com_br_backoffice/importsController.php');
require('../psicologo_com_br_backoffice/createModel.php');
require('../psicologo_com_br_backoffice/createControl.php');

session_start();

function pre($valor)
{
    echo "<pre>";
    print_r($valor);
    exit;
}

$uri = explode('/', substr($_SERVER['REQUEST_URI'], '1'));


switch ($uri[0]) {
    case 'home':
        $home->start();
        break;
    case 'dashboard':
        $dashboard->start();
        break;
    case 'quem-somos':
        if ($uri[1] == 'salvar') {
            $quemsomos->salvar();
        }

        $quemsomos->start();
        break;
    case 'convenios':
        switch ($uri[1]) {
            case 'listar':
                $convenios->start();
                break;
            case 'cadastrar':
                $convenios->cadastrar();
                break;
            case 'ver':
                $convenios->ver();
                break;
        }
        break;
    case 'workshops':
        switch ($uri[1]) {
            case 'listar':
                $workshops->start();
                break;
            case 'cadastrar':
                $workshops->cadastrar();
                break;
            case 'ver':
                $workshops->ver();
                break;
        }
        break;
    case 'profissionais':
        switch ($uri[1]) {
            case 'listar':
                $profissionais->start();
                break;
            case 'cadastrar':
                $profissionais->cadastrar();
                break;
            case 'ver':
                $profissionais->ver($uri[2]);
                break;
            case 'alterar':
                $profissionais->alterar($uri[2]);
                break;
            case 'salvar':
                $profissionais->salvar();
                break;
        }
        break;
    case 'mensagens':
        $mensagens->start();
        break;
    case 'clinica':
        $minhaClinica->start();
        break;
    case 'restrito':

        if ($uri[1] == 'login') {
            $restrito->login();
        }
        if ($uri[1] == 'logout') {
            $restrito->logout();
        }

        $restrito->start();
        break;
    case 'perfil':

        $perfil->start();
        break;
    default:
        $dashboard->start();
        break;
}
