<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controllers;
//Recursos do Mini Framework
use MF\Controller\Action;
use MF\Model\Container;

// Models
use App\Models\Produto;
use App\Models\Info;

class IndexController extends Action {
 
  public function index() {
    
    $produto = Container::getModel('Produto');
    $produtos = $produto->getProdutos();
    
    $this->view->dados = $produtos;
    $this->render('index', 'layout1');
  }

  public function sobreNos() {
    
    $info = Container::getModel('Info');
    $infos = $info->getInfo();
    
    $this->view->dados = $infos;
    $this->render('sobreNos', 'layout2');
    
  }

}
