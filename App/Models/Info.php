<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Models;

use MF\Model\Model;

/**
 * Description of Info
 *
 * @author Fernando
 */
class Info extends Model{

   public function getInfo() {
    $query = 'select titulo, descricao from tb_info';
    
    return $this->db->query($query)->fetchAll();
    
  }
}
