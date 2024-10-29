<?php
$db = new Db();
$core = new Core();
$conveniosModel = new ConveniosModel($uri);
$dashboardModel = new DashboardModel($uri);
$homeModel = new HomeModel($uri);
$mensagensModel = new MensagensModel($db->getConnection());
$minhaClinicaModel = new MinhaClinicaModel($db->getConnection());
$profissionaisModel = new ProfissionaisModel($db->getConnection());
$quemsomosModel = new QuemSomosModel($uri);
$workshopsModel = new WorkshopsModel($db->getConnection());
$restritoModel = new RestritoModel($db->getConnection());


