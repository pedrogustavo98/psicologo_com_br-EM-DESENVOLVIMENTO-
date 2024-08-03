<?php
class Contato
{
    public $uri;
    function __construct($uri)
    {
        $this->uri = $uri;
    }

    function start(){
        require('views/contato/contato.php');

    }
}
