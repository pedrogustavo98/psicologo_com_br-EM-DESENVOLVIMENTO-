<?php
require_once('controlers/home.php');
require_once('controlers/contato.php');
require_once('controlers/convenios.php');
require_once('controlers/workshops.php');
require_once('controlers/quemsomos.php');

function pre($valor)
{
    echo "<pre>";
    print_r($valor);
    exit;
}

$uri = explode('/', substr($_SERVER['REQUEST_URI'], '1'));

$home = new Home($uri);
$quemsomos = new QuemSomos($uri);
$convenios = new Convenios($uri);
$workshops = new Workshops($uri);
$contato = new Contato($uri);

// pre($uri);
switch ($uri[0]) {
    case 'home':
        $home->start();
        break;
    case 'quem-somos':
        $quemsomos->start();
        break;
    case 'convenios':
        $convenios->start();
        break;
    case 'workshops':
        $workshops->start();
        break;
    case 'contato':
        $contato->start();
        break;
    default:
        $home->start();
        break;
}
