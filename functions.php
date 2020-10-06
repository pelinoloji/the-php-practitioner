<?php




function connectDB()
{
  try {
    return $pdo = new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', '');
  } catch (PDOException $e) {
    die('Could not connect');
  }
}


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
