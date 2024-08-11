<?php
$db = new Db();
$conveniosModel = new ConveniosModel($uri);
$dashboardModel = new DashboardModel($uri);
$homeModel = new HomeModel($uri);
$mensagensModel = new MensagensModel($uri);
$minhaClinicaModel = new MinhaClinicaModel($uri);
$profissionaisModel = new ProfissionaisModel($uri);
$quemsomosModel = new QuemSomosModel($uri);
$workshopsModel = new WorkshopsModel($uri);
$core = new Core();
$restritoModel = new RestritoModel($db->getConnection());


