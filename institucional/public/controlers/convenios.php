<?php
class Convenios
{
    public $uri;
    // public $teste = 'active';
    function __construct($uri)
    {
        $this->uri = $uri;
    }
    
    function start(){
        $convenio = 'active';
        require('views/convenios/convenios.php');

    }
}
