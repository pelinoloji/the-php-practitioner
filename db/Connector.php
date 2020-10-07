<?php


class Connector
{
  public static function make($config) //make connection
  {
    try {

      return new PDO(
        $config['connection'] . ';dbname=' . $config['name'],
        $config['username'],
        $config['password'],
        $config['options']
      );
    } catch (PDOException $e) {
      die($e->getMessage());
    }
  }
}


//$pdo = Connector::make();

// $connector = new Connector(); //static method
// $connector->make();

// Connector::make(); //static method
