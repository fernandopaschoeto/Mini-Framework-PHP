<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App;

/**
 * Description of Connection
 *
 * @author Fernando
 */

namespace App;

class Connection {

  public static function getDb() {
    try {
      $conn = new \PDO(
          "mysql:host=localhost;dbname=mvc;charset=utf8",
          "root",
          ""
      );
      return $conn;
      
    } catch (PDOException $ex) {
      //Tratar erro . 
    }
  }

}
