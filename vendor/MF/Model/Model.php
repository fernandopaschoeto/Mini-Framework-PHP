<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace MF\Model;

/**
 * Description of Model
 *
 * @author Fernando
 */
abstract class Model {

    protected $db;
    
     public function __construct(\PDO $db) {
    $this->db = $db;
  }

}
