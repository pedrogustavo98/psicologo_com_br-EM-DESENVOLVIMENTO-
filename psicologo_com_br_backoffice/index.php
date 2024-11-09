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

function pr($valor)
{
    echo "<pre>";
    print_r($valor);
}

$uri = explode('/', substr($_SERVER['REQUEST_URI'], '1'));


if (!$core->validarSession()) {

    if ($uri[1] == 'login') {
        $restrito->login();
    }
    if ($uri[1] == 'logout') {
        $restrito->logout();
    }

    $restrito->start();
    exit;
}


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
            case 'salvar':
                $convenios->salvar();
                break;
            case 'ver':
                $convenios->ver($uri[2]);
                break;
            case 'alterar':
                $convenios->alterar();
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
                $workshops->ver($uri[2]);
                break;
            case 'salvar':
                $workshops->salvar();
                break;
            case 'alterar':
                $workshops->alterar();
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
        switch ($uri[1]) {
            case 'listar':
                $mensagens->listar();
                break;
            case 'ver':
                $mensagens->ver();
                break;
            case 'enviar':
                $mensagens->enviar();
                break;
        }
        break;
    case 'clinica':
        if ($uri[1] == 'alterar') {
            $minhaClinica->alterar();
            return;
        }

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
