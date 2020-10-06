<?php

require 'task.php';

require 'functions.php';

$pdo = connectDB();

$tasks = fetchAllTasks($pdo);

require 'index.view.php';
