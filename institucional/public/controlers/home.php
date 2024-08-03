<?php
class Home{
    public $uri;

    function __construct($uri)
    {
        $this->uri = $uri;
    }

    public function start(){
        require('views/home/home.php');
    }
}