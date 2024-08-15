<?php
// $db = new Db();
$convenios = new Convenios($uri);
$dashboard = new Dashboard($uri);
$home = new Home($uri);
$mensagens = new Mensagens($uri);
$minhaClinica = new MinhaClinica($uri);
$profissionais = new Profissionais($uri, $profissionaisModel, $core);
$quemsomos = new QuemSomos($uri);
$workshops = new Workshops($uri);
$restrito = new Restrito($uri, $restritoModel, $core);
$perfil = new Perfil($uri, $restritoModel, $core);
