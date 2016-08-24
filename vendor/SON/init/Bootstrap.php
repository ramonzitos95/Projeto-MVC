<?php
/**
 * 
 */
namespace SON\init;

abstract Class Bootstrap
{
    private $routes;

	public function __construct()
	{
            $this->initRoutes();
            $this->run($this->getUrl());
	}

        //Iniciando as minhas rotas
	abstract public function initRoutes()
	
        
        protected function setRoutes(array $routes)
        {
            $this->routes = $routes;
        }
        
        protected function getUrl()
        {
            return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        }
        //Roda a aplicação
        protected function run($url)
        {
            array_walk($this->routes, function($route) use ($url){
                If($url == $route['route'])
                {
                    $class = "App\\Controllers\\".ucfirst($route['controller']);//Ucfirst transforma a primeira letra em minusculo
                    $controller = new $class; //Novo objeto
                    $action = $route['action']; //Método que vou tomar
                    $controller->$action(); //Executando método
                    
                }
            });
        }
    
}
