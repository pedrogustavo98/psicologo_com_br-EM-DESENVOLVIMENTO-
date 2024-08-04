<?php
class Home{
    public $uri;

    function __construct($uri)
    {
        $this->uri = $uri;
    }

    public function start(){
        $home = 'active';
        require('views/home/home.php');
    }
}