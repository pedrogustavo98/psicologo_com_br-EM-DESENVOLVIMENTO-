<?php
// $db = new Db();
$convenios = new Convenios($uri, $conveniosModel, $core);
$dashboard = new Dashboard($uri, $dashboardModel, $core);
$home = new Home($uri, $homeModel);
$mensagens = new Mensagens($uri, $core, $mensagensModel);
$minhaClinica = new MinhaClinica($uri, $minhaClinicaModel, $core);
$profissionais = new Profissionais($uri, $profissionaisModel, $core);
$quemsomos = new QuemSomos($uri, $quemsomosModel, $core);
$workshops = new Workshops($uri, $workshopsModel, $core);
$restrito = new Restrito($uri, $restritoModel, $core);
$perfil = new Perfil($uri, $restritoModel, $core);
