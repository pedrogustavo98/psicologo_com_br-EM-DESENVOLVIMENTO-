<?php
class Workshops
{
    public $uri;
    function __construct($uri)
    {
        $this->uri = $uri;
    }

    function start(){
        require('views/workshops/workshops.php');
    }
}
