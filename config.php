<?php

return [
  'database' => [
    'name' => 'mytodo',
    'username' => 'root',
    'password' => '',
    'connection' => 'mysql:host=127.0.0.1',
    'options' => [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING //https://www.php.net/manual/en/pdo.setattribute.php
    ]
  ]
];
