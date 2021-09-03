<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Produto
 *
 * @author Fernando
 */

namespace App\Models;

use MF\Model\Model;

class Produto extends Model {

  public function getProdutos() {
    $query = 'select id, descricao, preco from tb_produtos';
    
    return $this->db->query($query)->fetchAll();
    
  }

}
