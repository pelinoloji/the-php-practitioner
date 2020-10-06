<?php

require 'task.php';
require 'db/Connector.php';
require 'functions.php';

$pdo = Connector::make();

$tasks = fetchAllTasks($pdo);

require 'index.view.php';
