<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Action
 *
 * @author Fernando
 */


namespace MF\Controller;

abstract class Action {
  
   protected $view;
  
  public function __construct() {
    $this->view = new \stdClass();
  }

   protected function render($view, $layout){
     $this->view->page = $view;
     if(file_exists('../App/Views/'.$layout.'.php')){
       require_once '../App/Views/'.$layout.'.php';
     } else {
       $this->content();
     }
  }
  
  protected function content(){
    $classAtual = get_class($this);
    $classAtual = str_replace('App\\Controllers\\', '' , $classAtual);
    $classAtual = strtolower(str_replace('Controller', '', $classAtual));
    
    require_once '../App/Views/'.$classAtual.'/'.$this->view->page.'.phtml';
  }
  
}
