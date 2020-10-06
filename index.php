<?php

require 'task.php';
require 'functions.php';
$query = require 'boot.php';


$tasks = $query->selectAll('todos', 'Task'); //'Task' comes from class "Task"

require 'index.view.php';
