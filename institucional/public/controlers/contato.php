<?php
class Contato
{
    public $uri;
    function __construct($uri)
    {
        $this->uri = $uri;
    }

    function start(){
        $contato = 'active';
        $pagina = 'Contato | ';
        require('views/contato/contato.php');

    }
}
