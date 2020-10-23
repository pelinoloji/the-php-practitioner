<?php

App::bind('config', require 'config.php');

//App::bind('foo','bar'); die(App::get('foo')); =>result would be 'bar';

//die(var_dump(App::get('config'))); // it says , go config file and bring in config.php file to 'database' item.

App::bind('database', new QueryBuilder(
  Connection::make(App::get('config')['database'])
));



function view($name, $data = [])
{
  extract($data);
  return require "views/{$name}.view.php";
}

function redirect($path)
{
  header("Location: /{$path}");
}
