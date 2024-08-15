<?php
$db = new Db();
$core = new Core();
$conveniosModel = new ConveniosModel($uri);
$dashboardModel = new DashboardModel($uri);
$homeModel = new HomeModel($uri);
$mensagensModel = new MensagensModel($uri);
$minhaClinicaModel = new MinhaClinicaModel($uri);
$profissionaisModel = new ProfissionaisModel($db->getConnection());
$quemsomosModel = new QuemSomosModel($uri);
$workshopsModel = new WorkshopsModel($uri);
$restritoModel = new RestritoModel($db->getConnection());


