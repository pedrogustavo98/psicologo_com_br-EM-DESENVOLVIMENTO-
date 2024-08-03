<?php
class Convenios
{
    public $uri;
    function __construct($uri)
    {
        $this->uri = $uri;
    }

    function start(){
        require('views/convenios/convenios.php');

    }
}
