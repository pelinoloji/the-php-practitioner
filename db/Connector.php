<?php


class Connector
{
  public static function make() //make connection
  {
    try {
      return new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', '');
    } catch (PDOException $e) {
      die($e->getMessage());
    }
  }
}


$pdo = Connector::make();

// $connector = new Connector(); //static method
// $connector->make();

// Connector::make(); //static method
