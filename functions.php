<?php


function fetchAllTasks($pdo)
{
  $statement = $pdo->prepare('select * from todos');
  $statement->execute();
  return $statement->fetchAll(PDO::FETCH_CLASS, 'Task'); // no index, standart class

}

function dd($val)
{
  echo '<pre>';
  die(var_dump($val));
  echo '</pre>';
}
