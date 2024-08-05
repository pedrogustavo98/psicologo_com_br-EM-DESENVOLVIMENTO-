<?php
class Workshops
{
    public $uri;
    function __construct($uri)
    {
        $this->uri = $uri;
    }

    function start(){
        $workshops = 'active';
        $pagina = 'Workshops | ';

        require('views/workshops/workshops.php');
    }
}
