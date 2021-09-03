<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Container
 *
 * @author Fernando
 */

namespace MF\Model;

use App\Connection;

class Container {
  
  public static function getModel($model){
    $class = "\\App\\Models\\".ucfirst($model);
    
    $conn = Connection::getDb();
    
    return new $class($conn);
    
  }
}
