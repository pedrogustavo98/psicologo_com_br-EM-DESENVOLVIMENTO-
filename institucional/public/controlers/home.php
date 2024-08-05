<?php
class Home{
    public $uri;

    function __construct($uri)
    {
        $this->uri = $uri;
    }

    public function start(){
        $home = 'active';

        // pre('aqui');
        require('views/home/home.php');
    }
}