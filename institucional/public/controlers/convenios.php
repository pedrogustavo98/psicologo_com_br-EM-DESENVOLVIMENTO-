<?php
class Convenios
{
    public $uri;
    public $conveniosModel;
    public $core;

    public function __construct($uri, $conveniosModel, $core)
    {
        $this->uri = $uri;
        $this->conveniosModel = $conveniosModel;
        $this->core = $core;
    }
    
    public function start(){
        $convenio = 'active';
        $pagina = 'Convênios | ';
        require('views/convenios/convenios.php');

    }

    public function salvar(){
        pre('aqui teste simples');
    }
}
