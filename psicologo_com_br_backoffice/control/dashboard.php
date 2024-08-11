<?php
header('Content-Type: text/html; charset=utf-8');

class Dashboard
{

    public $uri;
    public function __construct($uri)
    {
        $this->uri = $uri;
    }

    public function start()
    {
        // pre($_SESSION);
        $dashboard = 'active';
        require('../psicologo_com_br_backoffice/view/dashboard/dashboard.php');
    }
}
