<?php

/**
 * Description of Bootstrap
 *
 * @author Fernando
 */
namespace MF\Init;

abstract class Bootstrap {

  private $routes;

  public function __construct() {
    $this->initRoutes();
    $this->run($this->getUrl());
  }

  public function getRoutes() {
    return $this->routes;
  }

  public function setRoutes(array $routes) {
    $this->routes = $routes;
  }
  
  abstract protected function initRoutes();
  
  protected function run($url){ 
    foreach ($this->getRoutes() as $key => $route){
  
      if($url == $route['route']){
        $class = "App\\Controllers\\".ucfirst($route['controller']);
        $controller = new $class;
        $action = $route['action'];
        $controller->$action();
        
      }
    }
  }
  
  protected function getUrl(){
    //return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $serverUrl = filter_input(INPUT_SERVER, 'REQUEST_URI');
    return parse_url($serverUrl, PHP_URL_PATH);
  }

}
