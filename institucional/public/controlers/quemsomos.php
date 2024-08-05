<?php
class QuemSomos
{
    public $uri;
    function __construct($uri)
    {
        $this->uri = $uri;
    }

    function start(){
        $quemsomos = 'active';
        $pagina = 'Quem somos | ';
        require('views/quemsomos/quemsomos.php');
    }
}
