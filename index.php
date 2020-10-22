<?php

// require 'task.php';
// require 'functions.php';
// $query = require 'boot.php';


// $tasks = $query->selectAll('todos', 'Task'); //'Task' comes from class "Task"

// require 'index.view.php';





$database = require 'core/bootstrap.php';

// die(var_dump($app));

require Router::load('routes.php')
  ->direct(Request::uri(), Request::method());
