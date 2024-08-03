<?php
class QuemSomos
{
    public $uri;
    function __construct($uri)
    {
        $this->uri = $uri;
    }

    function start(){
        require('views/quemsomos/quemsomos.php');
    }
}
