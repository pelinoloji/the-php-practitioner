<?php
// echo '<pre>';
// var_dump('You typed ' . $_POST['name']);
// echo '</pre>';

$app['database']->insert('users', [
  'name' => $_POST['name']
]);

header('Location: /');
