<?php

namespace App;
use SON\init\Bootstrap;

Class Route extends Bootstrap
{
    //Iniciando as minhas rotas
    //Arquivo apenas para configurar as rotas 
    protected function initRoutes()
    {
        $routes['home']	 = array('route'=>,'/', 'controller'=>"indexController", 'action'=>'index');//Caminho que o usuário vai digitar
        $routes['contato'] = array('route'=>,'/contact'=>"controller", 'action'=>'contact'); //Rota do contato
        $this->setRoutes($routes);
    }
    
}